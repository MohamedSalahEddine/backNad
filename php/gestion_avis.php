<?php
    include('../inc/connection.php');
    $sql4="select * from avis";
    $res_avis=mysqli_query($conn,$sql4);
    $les_avis=mysqli_fetch_all($res_avis);


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
        <tr class="th"><th>id_avis</th><th>id membre</th><th>id salle</th><th>commentaire</th><th>note</th><th>date_enregistrement</th><th>action</th></tr>
        <?php
            foreach($les_avis as $avis){
                $stars="";
                for($i=0; $i<$avis[4]; $i++){$stars.="<span class='material-symbols-outlined'>star</span>";};
                
                echo    "<tr>
                            <td>$avis[0]</td><td>$avis[1]</td><td>$avis[2]</td><td>$avis[3]</td>
                            <td>$stars</td><td>$avis[5]</td>
                            <td> <span class='material-symbols-outlined'>search</span>
                            <span class='material-symbols-outlined'>edit</span>
                            <a href='../delete.php?avis=$avis[0]'><span class='material-symbols-outlined'>delete</span></td></a>
                        </tr>";
               
            }
        ?> 
    </table>
    
</body>
</html>



