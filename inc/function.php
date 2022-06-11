<?php
    function display_salle($id, $photo, $titre, $prix, $description, $date_depart, $date_arrivee, $rating ){
        $rating_stars="";
        $description_sub=substr($description, 0, 25)."...";
        for($i=0; $i<$rating; $i++){$rating_stars.="<span class='material-symbols-outlined'>star</span>";};
        echo "<a href='fiche_produit?selected=$id'>
        <div class='div_salle'>
            <span class='hide'>1</span>
            <img src='../images/$photo' alt='$titre' width='100%' height='130px'/>
            <div class='info'>
                <div class='div1'>
                    <span class='titre'>$titre</span>
                    <span class='prix'>$prix €</span>
                </div>
                <div class='div2'>
                    <span>$description_sub</span>
                    <span>$date_depart au $date_arrivee</span>
                </div>
                <div class='div3'>
                    <span class='span_rating'>$rating_stars</span>
                    <span class='span_search'>
                        <span class='material-symbols-outlined'>search</span>
                        <span>Voir</span>
                    </span>
                </div>
            </div>
        </div>
        </a>
        ";
    }
    function display_autre($id, $image, $titre){
        echo "
            <a href='fiche_produit?selected=$id'>
                <div class='div_autre'>
                    <img src='../images/$image' alt='$titre' width='100%' height='130px'/>
                </div>
            </a>
        ";
    }
    /**echo "
        <div class='div_salle'>
            <span class='hide'>1</span>
            <img src='../images/1 .jpg' alt='img' width='200px' height='100px'/>
            <div class='info'>
                <div class='div1'>
                    <span class='titre'>Bureau Monet</span>
                    <span class='prix'>1200$</span>
                <div class='div2'>
                    <span>Parfaite pour une réunion....</span>
                    <span>18/06/2016 au 23/06/2016<span>
                <div class='div3'>
                    <span class='span_rating'>* * * * *<span>
                    <span class='span_search'>
                        <span class='material-symbols-outlined'>search</span>
                        <span>Voir</span>
                    </span>
                </div>
            </div>
        </div>
        "; */
?>

