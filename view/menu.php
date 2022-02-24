<header>   
    <nav>
        <div class="subnav">
            <img src="./img/menu.svg"  class="burgerButton" width="40px">
            <div>
                <h1>CRUD</h1>
                <img src="./img/logonum.png" id="securise"> 
            </div>
        </div>
        <ul>
<?php
    /*-----------------------------------------------------
                        Menu dynamique :
        -----------------------------------------------------*/
    //si l'utilisateur est connecté (connexion, ajouter categorie, ajouter tâche, deconnexion)
    if(isset($_SESSION['connected']))
    {
        echo '
        <a href="./createUser.php"><li>Créer utilisateur</li></a>
        <a href="./index.php"><li>Home</li></a>
        <a href="./deconnected.php"><li>Deconnexion</li></a>

        ';
    }
    //si l'utilisateur n'est pas connecté (connexion, ajouter compte, deconnexion)  
    else
    {
        echo '
        <a href="./createUser.php"><li>Créer utilisateur</li></a>
        <a href="./index.php"><li>Home</li></a>
            ';  
    }

?>      
        </ul>            
    </nav>
</header>