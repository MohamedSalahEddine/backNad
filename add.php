<?php
    include('inc/connection.php');
    if(isset($_POST['Titre']) &&  isset($_POST['Description']) && isset($_POST['Capacité']) &&
     isset($_POST['Catégorie']) && isset($_POST['Pays']) && isset($_POST['Ville'])
     && isset($_POST['Adresse'])&& isset($_POST['Code_postal'])){
            
        $Titre=$_POST['Titre'];
        $Description=$_POST['Description'];
        $Photo=$_POST['Photo'];
        $Capacité=$_POST['Capacité'];
        $Catégorie=$_POST['Catégorie'];
        $Pays=$_POST['Pays'];
        $Ville=$_POST['Ville'];
        $Adresse=$_POST['Adresse'];
        $CodePostal=$_POST['Code_postal'];
        $sql="insert into salle (titre, description , photo ,pays,ville , adresse,cp , capacite,categorie) values('".$Titre."' , '". $Description."', '".$Photo."', '".$Pays."' , '".$Ville."' ,  '".$Adresse."',  ".$CodePostal.",  ".$Capacité.",  '".$Catégorie."')";
    

        mysqli_query($conn, $sql);
        header('Location: php/gestion_salle.php');

    }

    if(isset($_POST['date_arrivee']) &&  isset($_POST['date_depart']) && isset($_POST['select_salle']) &&
     isset($_POST['prix'])){
            

        $date_arrivee=$_POST['date_arrivee'];
        $date_depart=$_POST['date_depart'];
        $select_salle=$_POST['select_salle'];
        //$select_salle="43-sallle de ";
        $pos=strpos($select_salle,"-");
        $id_salle_selected=substr($select_salle, 0, $pos);
        
        $id_salle_selected_int=intval($id_salle_selected);
        $prix=$_POST['prix'];
        
        $sql6="insert into produit (id_salle, date_arrivee , date_depart ,prix,etat ) values(".$id_salle_selected_int." , '". $date_arrivee."', '".$date_depart."',  ".$prix.",  'libre')";
    

        mysqli_query($conn, $sql6);
        header('Location: php/gestion_produit.php');

    }


   

    if(isset($_POST['Pseudo']) &&  isset($_POST['password']) && isset($_POST['Nom']) &&
     isset($_POST['Prenom']) && isset($_POST['email']) && isset($_POST['Civilité']) && isset($_POST['statut'])){
            
        $Pseudo=$_POST['Pseudo'];
        $password=$_POST['password'];
        $Nom=$_POST['Nom'];
        $Prenom=$_POST['Prenom'];
        $email=$_POST['email'];
        $Civilité=$_POST['Civilité'];
        $statut=$_POST['statut'];
        $statut_bool= ($statut=="admin") ? 1: 0;
        
        //$sql3= "INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `statut`, `date_enregistrement`) VALUES (NULL, '".$Pseudo."', '".$password."', '".$Nom."', '".$Prenom."', '".$email."', '".$Civilité."', ".$statut_bool.", 'NOW()')";
        $sql3= "INSERT INTO `membre` (`id_membre`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `statut`, `date_enregistrement`) VALUES (NULL, '".$Pseudo."', '".$password."', '".$Nom."', '".$Prenom."', '".$email."', '".$Civilité."', ".$statut_bool.", NOW())";

        mysqli_query($conn, $sql3);
        header('Location: php/gestion_membre.php');

    }
?>