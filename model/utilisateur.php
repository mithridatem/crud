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
                $req = $bdd->prepare('INSERT INTO util(name_util, first_name_util, mail_util, password_util) 
                VALUES (:name_util, :first_name_util, :mail_util, :password_util)');
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
        //Mise à jour d'un utilisateur (update)
        public function updateUtil($bdd){
            $nom = $this->name_util;
            $prenom = $this->first_name_util;
            $mail = $this->mail_util;
            $mdp = $this->password_util;
            try
            {   
                //requête ajout d'un utilisateur
                $req = $bdd->prepare('INSERT INTO util(name_util, first_name_util, mail_util, password_util) 
                VALUES (:name_util, :first_name_util, :mail_util, :password_util)');
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
        //Suppression d'un utilisateur (delete)
        public function deleteUtil($bdd){
            $nom = $this->name_util;
            $prenom = $this->first_name_util;
            $mail = $this->mail_util;
            $mdp = $this->password_util;
            try
            {   
                //requête ajout d'un utilisateur
                $req = $bdd->prepare('INSERT INTO util(name_util, first_name_util, mail_util, password_util) 
                VALUES (:name_util, :first_name_util, :mail_util, :password_util)');
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
        //Affichage d'un utilisateur (select)
        //Affichage de tous les utilisateurs (select)
        
    }
?>