<?php
    include('../inc/connection.php');
    include('../inc/function.php');

    $sql="";
    if(isset($_GET['categorie']) && $_GET['categorie']=="reunion"){
        $sql="select * from salle left join produit on salle.id_salle = produit.id_salle where salle.categorie='reunion'";
        $res_index=mysqli_query($conn,$sql);
        $les_index=mysqli_fetch_all($res_index);
    
    }elseif(isset($_GET['categorie']) && $_GET['categorie']=="bureau"){
        $sql="select * from salle left join produit on salle.id_salle = produit.id_salle where salle.categorie='bureau'";
        $res_index=mysqli_query($conn,$sql);
        $les_index=mysqli_fetch_all($res_index);
    }elseif(isset($_GET['categorie']) && $_GET['categorie']=="formation"){
        $sql="select * from salle left join produit on salle.id_salle = produit.id_salle where salle.categorie='formation'";
        $res_index=mysqli_query($conn,$sql);
        $les_index=mysqli_fetch_all($res_index);
    }
    if(isset($_GET['ville']) && $_GET['ville']=="paris"){
        $sql="select * from salle left join produit on salle.id_salle = produit.id_salle where salle.ville='paris'";
        $res_index=mysqli_query($conn,$sql);
        $les_index=mysqli_fetch_all($res_index);
    
    }elseif(isset($_GET['ville']) && $_GET['ville']=="lyon"){
        $sql="select * from salle left join produit on salle.id_salle = produit.id_salle where salle.ville='lyon'";
        $res_index=mysqli_query($conn,$sql);
        $les_index=mysqli_fetch_all($res_index);
    }elseif(isset($_GET['ville']) && $_GET['ville']=="marseille"){
        $sql="select * from salle left join produit on salle.id_salle = produit.id_salle where salle.ville='marseille'";
        $res_index=mysqli_query($conn,$sql);
        $les_index=mysqli_fetch_all($res_index);
    }else{
        $sql="select * from salle left join produit on salle.id_salle = produit.id_salle";
        $res_index=mysqli_query($conn,$sql);
        $les_index=mysqli_fetch_all($res_index);
    }
    

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
    <?php include('header.php');?>
    <div class="container">
        <div class="div_left">
            <div class="div_left_categorie">
                <span>Catégorie</span>
                <a href="index.php?categorie=reunion"><button>Réunion</button></a>
                <a href="index.php?categorie=bureau"><button>Bureau</button></a>
                <a href="index.php?categorie=formation"><button>Formation</button></a>
            </div>
            <div class="div_left_ville">
                <span>Ville</span>
                <a href="index.php?ville=paris"><button>Paris</button></a>
                <a href="index.php?ville=lyon"><button>Lyon</button></a>
                <a href="index.php?ville=marseille"><button>Marseille</button></a>
            </div>
            <div class="div_left_capacite">
                <label for="capacite">Capacité</label>
                <input type="number" name="capacite"/>
            </div>
            <div class="div_left_prix">
                <label for="prix">Prix</label>
                <input onChange="window.location.href='index.php';" type="range" name="prix" min="1000" max="9999"/>
                <span>Minimum 1000€</span>
            </div>
            <div class="div_left_periode">
                <label for="date_depart">Date de départ</label>
                <input type="datetime-local" name="date_depart"> 
            </div>
        </div>
        <div class="div_right">
            <?php
               
                for($i=0; $i<sizeof($les_index); $i++){
                    
                    display_salle($les_index[$i][0],$les_index[$i][3],$les_index[$i][1],$les_index[$i][14],$les_index[$i][2],$les_index[$i][13],$les_index[$i][12],5);
                    
                }
            ?>
        </div>
    </div>
</body>
</html>


