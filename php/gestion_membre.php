<?php
     include('../inc/connection.php');
     $sql3="select * from membre";
     $res_membre=mysqli_query($conn,$sql3);
     $les_membres=mysqli_fetch_all($res_membre);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
    <table>
        <tr class="th"><th>id_membre</th><th>pseudo</th><th>nom</th><th>prenom</th><th>email</th><th>civilité</th><th>statut</th><th>date_enregistrement</th><th>action</th></tr>
        <?php
            foreach($les_membres as $membre){
                $statut_str=$membre[7]==1? "admin": "membre";
                echo    "<tr>
                            <td>$membre[0]</td><td>$membre[1]</td><td>$membre[3]</td><td>$membre[4]</td>
                            <td>$membre[5]</td><td>$membre[6]</td><td>$statut_str</td><td>$membre[8]</td>
                            <td> <span class='material-symbols-outlined'>search</span>
                            <span class='material-symbols-outlined'>edit</span> 
                            <a href='../delete.php?membre=$membre[0]'><span class='material-symbols-outlined'>delete</span></td></a>
                        </tr>";
               
            }
        ?> 
    </table>
    <div class="div_form">
        <form method="POST" action="../add.php">
            <div class="div_form_gauche">
                <label for="Pseudo">Pseudo</label>
                <div class="champs"><span class="material-symbols-outlined">person</span><input type="text" name="Pseudo" placeholder="Pseudo"></div>
                <label for="password">Mot de passe</label>
                <div class="champs"><span class="material-symbols-outlined">lock</span><input type="password" name="password" placeholder="Mot de passe"></div>
                <label for="Nom">Nom</label>
                <div class="champs"><span class="material-symbols-outlined">edit</span><input type="text" name="Nom" placeholder="Votre nom"></div>
                <label for="Prenom">Prenom</label>
                <div class="champs"><span class="material-symbols-outlined">edit</span><input type="text" name="Prenom" placeholder="Votre Prenom"></div>
            </div>
            <div class="div_form_droite">
                <label for="email">Email</label>
                <div class="champs"><span class="material-symbols-outlined">mail</span><input type="email" name="email" placeholder="Votre email"></div>
                <label for="Civilité">Civilité</label>
                <select name="Civilité">
                    <option value="m">Homme</option>
                    <option value="f">Femme</option>
                </select>
                <label for="statut">Statut</label>
                <select name="statut">
                    <option value="admin">Admin</option>
                    <option value="membre">Membre</option>
                </select>
                <input type="submit" class="sub" value="envoyer">
            </div>
        </form>
    </div>
</body>
</html>