<?php
    include('../inc/connection.php');
    $sql5="select * from commande left join produit on commande.id_produit= produit.id_produit";
    $res_commande_produits=mysqli_query($conn,$sql5);
    $les_commandes_produits=mysqli_fetch_all($res_commande_produits);


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
<body></body>
    <table>
        <tr class="th"><th>id commande</th><th>id embre</th><th>id produit</th><th>prix</th><th>date_enregistrement</th><th>action</th></tr>
        <?php
            foreach($les_commandes_produits as $commande_produit){
               
                echo    "<tr>
                            <td>$commande_produit[0]</td><td>$commande_produit[1]</td>
                            <td>$commande_produit[2]</td><td>$commande_produit[8]</td>
                            <td>$commande_produit[3]</td>
                            <td> <span class='material-symbols-outlined'>search</span>
                            <span class='material-symbols-outlined'>edit</span>
                            <a href='../delete.php?commande=$commande_produit[0]'><span class='material-symbols-outlined'>delete</span></a></td>
                        </tr>";
               
            }
        ?> 
    </table>    
</body>
</html>
