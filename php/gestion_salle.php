<?php
     include('../inc/connection.php');
     $sql="select * from salle";
     $res_salles=mysqli_query($conn,$sql);
     $les_salles=mysqli_fetch_all($res_salles);


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
        <tr class="th"><th>id_salle</th><th>titre</th><th>description</th><th>photo</th><th>pays</th><th>ville</th><th>adresse</th><th>cp</th><th>capacité</th><th>catégorie</th><th>action</th></tr>
        <?php
            foreach($les_salles as $salle){
                echo "<tr>
                        <td>$salle[0]</td><td>$salle[1]</td><td>$salle[2]</td>
                        <td><img src='../images/$salle[3]' alt='igm' width='50px' height='50px'/></td>
                        <td>$salle[4]</td><td>$salle[5]</td><td>$salle[6]</td><td>$salle[7]</td>
                        <td>$salle[8]</td><td>$salle[9]</td>
                        <td> <span class='material-symbols-outlined'>search</span>
                        <span class='material-symbols-outlined'>edit</span> 
                        <a href='../delete.php?salle=$salle[0]'><span class='material-symbols-outlined'>delete</span></a></td>
                    </tr>";
               
            }
        ?> 
    </table>
    <div class="div_form">
        <form method="POST" action="../add.php">
            <div class="div_form_gauche">
                <label for="Titre">titre</label>
                <input type="text" name="Titre" placeholder="Titre de la salle">
                <label for="Description">Description</label>
                <input type="text" name="Description" placeholder="Description de la salle">
                <label for="Photo">Photo</label>
                <input type="file" name="Photo" placeholder="Aucun fichier selectioné">
                <label for="Capacité">Capacité</label>
                <input type="number" name="Capacité" min="1" max="1000">
                <label for="Catégorie">Catégorie</label>
                <select name="Catégorie">
                    <option value="reunion">réunion</option>
                    <option value="formation">formation</option>
                    <option value="bureau">bureau</option>
                </select>
            </div>
            <div class="div_form_droite">
                <label for="Pays">Pays</label>
                <select name="Pays">
                    <option value="France">France</option>
                    <option value="Algerie">Algerie</option>
                    <option value="Maroc">Maroc</option>
                </select>
                <label for="Ville">Ville</label>
                <select name="Ville">
                    <option value="Paris">Paris</option>
                    <option value="lyon">Lyon</option>
                    <option value="marseille">Marseille</option>
                </select>
                <label for="Adresse">Adresse</label>
                <textarea id="Adresse" name="Adresse" rows="4" cols="50"></textarea>
                <label for="Code postal">Code postal</label>
                <input type="text" name="Code postal" placeholder="Code postal de la salle">
                <input type="submit" class="sub">
            </div>
        </form>
    </div>
</body>
</html>