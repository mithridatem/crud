<?php   
    //connexion à la base de données
    //à modifier en fonction de votre base de données
    $bdd = new PDO('mysql:host=localhost;dbname=crud', 'root','', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>