<?php
    include('../inc/connection.php');
    include('../inc/function.php');

    $sql="";
    $data_selected=[];
    if(isset($_GET['selected'])){
        $selected=$_GET['selected'];
        $sql="select * from salle left join produit on salle.id_salle = produit.id_salle where salle.id_salle=$selected";
        $res_selected=mysqli_query($conn,$sql);
        $data_selected=mysqli_fetch_assoc($res_selected);
        $adresse=$data_selected['adresse'];
        $adresse_clean=str_replace(" ","%20", $adresse);
    }

    $sql_autres="select * from salle left join produit on salle.id_salle = produit.id_salle LIMIT 4";
    $res_autres=mysqli_query($conn,$sql_autres);
    $data_autres=mysqli_fetch_all($res_autres);
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
    <div class="container_fp">
        <div class="fp_div1">
            <h2 class='tit'><?php echo $data_selected['titre']; ?></h2>
            <span><?php for($i=0; $i<4; $i++){ echo "<span class='material-symbols-outlined st'>star</span>"; }; ?></span>
            <span class="btn_reserver">Réserver</span>
        </div>
        <div class="fp_div2">
            <div class="fp_div2_gauche">
                <img class='img_70' src='../images/<?php echo $data_selected['photo']; ?>' alt="<?php echo $data_selected['titre']; ?>"/>
            </div>
            <div class="fp_div2_droite">
                <div class="fp_div2_droite_description">
                <h4>Description </h4>
                    <p><?php echo $data_selected['description']; ?></p>
                </div>
                <div class="fp_div2_droite_localisation">
                    <h4>Localisation </h4>
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="400" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $adresse_clean; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:350px;width:400px;}</style><a href="https://www.embedgooglemap.net">embed google map responsive</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:400px;}</style></div></div>
                </div>
            </div>
        </div>
        <div class="fp_div3">
            <div class="fp_div3_left col">
                <span>Arrivée : <?php echo $data_selected['date_depart']; ?></span>
                <span>Départ : <?php echo $data_selected['date_arrivee']; ?></span>
            </div>
            <div class="fp_div3_center col">
                <span>Capacité : <?php echo $data_selected['capacite']; ?></span>
                <span>Catégorie : <?php echo $data_selected['categorie']; ?></span>
            </div>
            <div class="fp_div3_right col">
                <span>Adresse : <?php echo $data_selected['adresse']; ?></span>
                <span>Tarif : <?php echo $data_selected['prix']; ?></span>
            </div>
        </div>
        <div class="fp_div4">
            <h3 class="ap">Autres produits</h3>
            <?php foreach($data_autres as $data_autre){
                 display_autre($data_autre[0], $data_autre[3], $data_autre[1]);
            }?>
        </div>
    </div>
</body>
</html>