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
    include './view/view_create_util.php';

    /*-----------------------
            Test
    ------------------------*/
    //Test (contenu du formulaire html POST) si tous les champs sont remplis
    if(isset($_POST['name_util']) AND isset($_POST['first_name_util'])
    AND $_POST['mail_util'] AND $_POST['password_util']){
        //Création d'un nouvel objet Utilisateur
        $util = new Utilisateur();
        //Récupération du nom dans une variable (pour affichage dans error)
        $name = htmlspecialchars($_POST['name_util']);
        //affectation des valeurs à l'objet (htmlspecialchars)
        $util->setNameUtil($name);
        $util->setFirstNameUtil(htmlspecialchars($_POST['first_name_util']));
        $util->setMailUtil(htmlspecialchars($_POST['mail_util']));
        //hashage du password en md5 et affectation à l'objet (htmlspecialchars)
        $util->setPasswordUtil(md5(htmlspecialchars($_POST['password_util'])));
        //Appel de la méthode d'ajout en BDD 
        $util->createUtil($bdd);
        //affichage en js de l'ajout d'un utilisateur
        echo "<script>
        error.innerHTML = 'L\'utilisateur $name a été ajouté'
        </script>";
    }
    //test sinon
    else{
        //affichage en js des champs vides
        echo "<script>
        error.innerHTML = 'Veuillez remplir les champs'
        </script>";
    }
?>