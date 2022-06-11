<?php
    $host="localhost";
    $username="root";
    $password="";
    $dbname="loki_salle";

    if(!$conn=mysqli_connect($host,$username,$password,$dbname)){
        die("il y a eu un probleme avec la base de données");
    }
    
?>