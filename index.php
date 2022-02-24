<?php
    /*-----------------------
            Session
    ------------------------*/
    //start une session
    session_start();

    /*-----------------------
            imports
    ------------------------*/
    //import utils :
    include './utils/connectBdd.php';
    //import data (model) :
    include './model/utilisateur.php';
    //import vue :
    include './view/menu.php';
    include './view/view_connexion.php';

    /*-----------------------
            Test
    ------------------------*/
    //Test (contenu du formulaire html POST) si tous les champs sont remplis
    if(isset($_POST['mail_util']) AND isset($_POST['password_util'])){
        //Création d'un nouvel objet Utilisateur
        $util = new Utilisateur();
        //affectation objet
        $util->setMailUtil(htmlspecialchars($_POST['mail_util']));
        //hashage du password en md5 et affectation à l'objet (htmlspecialchars)
        $util->setPasswordUtil($_POST['password_util']);
        //Appel de la méthode connexion (return true ou false) 
        if($util->connectUser($bdd)){
            //appel de la méthode generateSuperGlob
            $util->generateSuperGlob();
            //affichage en JS
            echo "<script>
            error.innerHTML = 'Connecté'
            </script>";
        }
        else{
            //affichage en JS
            echo "<script>
            error.innerHTML = 'identifiant incorrect'
            </script>";
        }
    }
    //test sinon
    else{
        //affichage en js des champs vides
        echo "<script>
        error.innerHTML = 'Veuillez remplir les champs'
        </script>";
    }

    //test url
    if(isset($_GET['deconnected'])){
        //affichage en js des champs vides
        echo "<script>
        error.innerHTML = 'deconnecté'
        </script>";
    }
?>