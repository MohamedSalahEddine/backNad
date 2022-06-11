<?php
    include('../inc/connection.php');
    $sql="select * from salle";
    $res_salles=mysqli_query($conn,$sql);
    $les_salles=mysqli_fetch_all($res_salles);

    $sql2="select * from produit ";
    $res_produits=mysqli_query($conn,$sql2);
    $les_produits=mysqli_fetch_all($res_produits);

?>

<!DOCTYPE html>
<html lang="en"></html>
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
    <tr class="th"><th>id_produit</th><th>date d'arrivée </th><th>date de départ</th><th>id salle</th><th>prix</th><th>état</th><th>action</th></tr>
        <?php
            foreach($les_produits as $produit){
                echo    "<tr>
                            <td>$produit[0]</td><td>$produit[2]</td><td>$produit[3]</td>
                            <td>$produit[1]</td><td>$produit[4]</td><td>$produit[5]</td>
                            <td> 
                            <span class='material-symbols-outlined'>search</span>
                            <span class='material-symbols-outlined'>edit</span> 
                            <a href='../delete.php?produit=$produit[0]'><span class='material-symbols-outlined'>delete</span></a></td>
                        </tr>";
               
            }
        ?> 
    </table>
    <div class="div_form2">
        <form action="../add.php" method="POST">
            <div class="div_form2_gauche">
                <label for="date_arrivee">Date d'arrivée</label>
                <input type="datetime-local" name="date_arrivee">
                <label for="date_depart">Date de depart</label>
                <input type="datetime-local" name="date_depart">
            </div>
            <div class="div_form2_droite">
                <label for="select_salle" class="select_salle">Salle</label>
                <select name="select_salle" class="select2">
                    <?php
                        foreach($les_salles as $salle){
                            echo "<option class='sel' value='$salle[0]-'>".implode('-', $salle)."</option>";
                        }
                    ?>
                </select>
                <label for="prix">Tarif</label>
                <input type="number" name="prix" placeholder="prix en euro" >
                <input type="submit" value="envoyer" class="sub">
            </div>
        </form>
    </div>
</body>
</html>


