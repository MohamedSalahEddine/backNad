<?php
 @session_start();
 include('../inc/connection.php');
 include('../inc/function.php');
 
 $sqlPseudos="select pseudo from membre";
 $resPseudos=mysqli_query($conn,$sqlPseudos);
 $Pseudos=mysqli_fetch_all($resPseudos);
 $i=0;
 $pseudosList=[];
 
 foreach($Pseudos as $k=>$v){
     $pseudosList[$i++]=$v[0];
 }
 
 

 if($_SERVER['REQUEST_METHOD']==="POST"){

     $statut_bool=1;
     $pseudo=$_POST['pseudo'];
     $mdp=$_POST['mdp'];
     $prenom=$_POST['prenom'];
     $nom=$_POST['nom'];
     $email=$_POST['email'];
     $civilite=$_POST['civilite'];

     if(!empty($pseudo) && !empty($mdp)){
        
      $sql3= "INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `statut`, `date_enregistrement`) VALUES (NULL, '".$pseudo."', '".$mdp."', '".$nom."', '".$prenom."', '".$email."', '".$civilite."', ".$statut_bool.", NOW())";

      mysqli_query($conn, $sql3);
      header('Location: ../index.php');
         
     }elseif(in_array($Pseudos,$pseudosList)){
         echo "Ce pseudo est déjà utilisé";
     }else{
         echo "saisissez des données valides s'il vous plaît !";
     }
 }
?>


<html>
<style>
  #container{
    width:400px;
    margin:0 auto;
    margin-top:10%;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
h3 {
  text-align: center;

}
</style>
<body>

<h3>S'inscrire</h3>

<div id="container">
  <form action= "" method="POST" >
  <label for="Pseudo">Pseudo</label>
    <input type="text" id="Pseudo" name="pseudo" placeholder="Votre Pseudo..">

    <label for="fname">Mot de passe</label>
    <input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe..">

    <label for="fname">Prenom</label>
    <input type="text" id="fname" name="prenom" placeholder="Votre Prenom..">

    <label for="lname">Nom</label>
    <input type="text" id="Nom" name="nom" placeholder="Votre Nom..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Votre email..">

    
    <select id="civilite" name="civilite">
      <option value="m">Homme</option>
      <option value="f">Femme</option>
      
    </select>
  
    <input type="submit" value="S'inscrire">
  </form>
</div>
</div>
</body>
</html>


