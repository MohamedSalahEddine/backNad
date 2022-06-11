<?php
    include('inc/connection.php');

    if(isset($_GET['salle'])){
        $id_salle=$_GET['salle'];
        $sql="delete from salle where id_salle=$id_salle";
        mysqli_query($conn,$sql);
        header('Location: php/gestion_salle.php');
    }

    if(isset($_GET['membre'])){
        $id_membre=$_GET['membre'];
        $sql_membre="delete from membre where id_membre=$id_membre";
        mysqli_query($conn,$sql_membre);
        header('Location: php/gestion_membre.php');
    }

    if(isset($_GET['avis'])){
        $id_avis=$_GET['avis'];
        $sql_avis="delete from avis where id_avis=$id_avis";
        mysqli_query($conn,$sql_avis);
        header('Location: php/gestion_avis.php');
    }

    if(isset($_GET['commande'])){
        $id_commande=$_GET['commande'];
        $sql_commande="delete from commande where id_commande=$id_commande";
        mysqli_query($conn,$sql_commande);
        header('Location: php/gestion_commande.php');
    }

    if(isset($_GET['produit'])){
        $id_produit=$_GET['produit'];
        $sql_produit="delete from produit where id_produit=$id_produit";
        mysqli_query($conn,$sql_produit);
        header('Location: php/gestion_produit.php');
    }
?>