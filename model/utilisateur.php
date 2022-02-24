<?php
    class Utilisateur{
        /*-----------------------
                Attributs
        ------------------------*/
        private $id_util;
        private $name_util;
        private $first_name_util;
        private $mail_util;
        private $password_util;

        /*-----------------------
                constructeur
        ------------------------*/
        //constructeur (vide)
        public function __construct(){
        }

        /*-----------------------
            getter and setter
        ------------------------*/
        //getter id
        public function getIdUtil(){
            return $this->id_util;
        }
        //set id
        public function setIdUtil($newId){
            $this->id_util = $newId;
        }
        //getter name
        public function getNameUtil(){
            return $this->name_util;
        }
        //set name
        public function setNameUtil($newName){
            $this->name_util = $newName;
        }
        //getter first_name
        public function getFirstNameUtil(){
            return $this->first_name_util;
        }
        //set first_name
        public function setFirstNameUtil($newFirstName){
            $this->first_name_util = $newFirstName;
        }
        //getter mail
        public function getMailUtil(){
            return $this->mail_util;
        }
        //set mail
        public function setMailUtil($newMail){
            $this->mail_util = $newMail;
        }
        //getter password
        public function getPasswordUtil(){
            return $this->password_util;
        }
        //set password
        public function setPasswordUtil($newPassword){
            $this->password_util = $newPassword;
        }      
        /*-----------------------
                Méthodes
        ------------------------*/
        //Création d'un utilisateur (insert)
        public function createUtil($bdd){
            $nom = $this->name_util;
            $prenom = $this->first_name_util;
            $mail = $this->mail_util;
            $mdp = $this->password_util;
            try
            {   
                //requête ajout d'un utilisateur
                $req = $bdd->prepare('INSERT INTO utilisateur(name_util, first_name_util, mail_util, password_util) 
                VALUES (:name_util, :first_name_util, :mail_util, :password_util)');
                //éxécution de la requête SQL
                $req->execute(array(
                'name_util' => $nom,
                'first_name_util' => $prenom,
                'mail_util' => $mail,
                'password_util' => $mdp,                                                                 
                ));
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }        
        }
        //Mise à jour d'un utilisateur (update) en cours de dev
        public function updateUtil($bdd, $id){
            $nom = $this->name_util;
            $prenom = $this->first_name_util;
            $mail = $this->mail_util;
            $mdp = $this->password_util;
            try
            {   
                //requête udpate d'un utilisateur
                $req = $bdd->prepare('req');
                //éxécution de la requête SQL
                $req->execute(array(
                'name_util' => $nom,
                'first_name_util' => $prenom,
                'mail_util' => $mail,
                'mdp_util' => $mdp,                                                                 
                ));
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }        
        }
        //Suppression d'un utilisateur (delete) en cours de dev
        public function deleteUtil($bdd, $id){
            try
            {   
                //requête delete d'un utilisateur
                $req = $bdd->prepare('req');
                //éxécution de la requête SQL
                $req->execute(array(
                'id_util' => $id,                                                                
                ));
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }        
        }
        //Affichage d'un utilisateur (select)
        //Affichage de tous les utilisateurs (select)
        //connexion
        public function connectUser($bdd){
            $mail = $this->mail_util;
            $password = md5($this->password_util);
            try{                   
                //requête pour stocker le contenu de toute la table le contenu est stocké dans le tableau $reponse
                $reponse = $bdd->query('SELECT * FROM utilisateur WHERE mail_util = "'.$mail.'" AND password_util = 
                "'.$password.'" LIMIT 1');
                //parcours du résultat de la requête
                while($donnees = $reponse->fetch())
                {   
                   //return $donnees['mdp_user'];
                    if($mail == $donnees['mail_util'] and $password == $donnees['password_util'])
                    {
                        //retourne true si il existe
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }                
            }
            catch(Exception $e){
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
        //generate super globale
        public function generateSuperGlob(){
            $_SESSION['connected'] = true;
            $_SESSION['mail_util'] = $this->mail_util;
        }
    }
?>