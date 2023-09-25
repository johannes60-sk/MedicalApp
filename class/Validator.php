<?php

    class Validator{

        protected $data;
        public $errors = [];

        function __construct($data)
        {
            $this->data = $data;
        }

        // Verifie que les donnees envoyer par l'utilisateur sont pas vide

        public function getField($field){

            if(!isset($this->data[$field])){
                return null;
            }
            return $this->data[$field];
        }

         
        // Verifie que l'utilisateur n'existe pas deja dans la BDD

        public function isUniq($field, $db, $table, $errorMsg){

            $user = $db->query("SELECT id FROM $table WHERE $field = ? ", [$this->getField($field)])->fetch();

            if($user){
                $this->errors[$field] = $errorMsg;
            }

        }

         // Verifie que l'email entre est correct

         public function isEmail($field, $errorMsg){

            if(!filter_var($this->getField($field), FILTER_VALIDATE_EMAIL)){

                $this->errors[$field] = $errorMsg; 
            }

        }

        // Verifie qu'aucune erreur ne s'est produite

        public function isValid(){

            if(empty($this->errors)){
                return true;
            }else{

                return false;
            }
        }
    }


?>