<?php
     @session_start();
     include('../inc/connection.php');
     include('../inc/function.php');
 
     
     
     if($_SERVER['REQUEST_METHOD']==='POST'){
         $id=$_POST['pseudo'];
         $mdp=$_POST['mdp'];
         if(!empty($id) && !empty($mdp)){
             $sql="select * from membre where pseudo='$id' limit 1";
             $resultat= mysqli_query($conn,$sql);
             if($resultat && mysqli_num_rows($resultat)>0){
                 $data_utilisateur=mysqli_fetch_assoc($resultat);
                 if( $mdp ==$data_utilisateur['mdp']){
                    $_SESSION['id_utilisateurGen']=$data_utilisateur['pseudo'];
                    header('Location: index.php');
                    die;
                }else{
                    echo "nom d'utilisateur ou mot de passe erroné"; 
                }
             }else{
                 echo "utilisateur non trouvé :/";
             }
         }
     }
?>
********************************************************************************
<html>
   <style>
       body{
    background: #f2f2f2;
}
#container{
    width:400px;
    margin:0 auto;
    margin-top:10%;
}
/* Bordered form */
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
    width: 38%;
    margin: 0 auto;
    padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #53af57;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #53af57;
    border: 1px solid #53af57;
}
   </style>
    <body>
        <div id="container">
           
            
            <form action="" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Votre Pseudo</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="pseudo" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="mdp" required>

                <input type="submit" id='submit' value='LOGIN' >
                
            </form>
        </div>
    </body>
</html>