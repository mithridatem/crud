<?php   
    //connexion à la base de données
    //à modifier en fonction de votre base de données
    $bdd = 'crud';
    $login = 'root';
    $mdp = '';
    $bdd = new PDO('mysql:host=localhost;dbname='.$mdp.'', ''.$login.'',''.$mdp.'', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>