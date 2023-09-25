<?php

    class DatabaseAuth{

        protected $db;

        function __construct($db){

            $this->db = $db;
        }

        // function de Hachage du numero de SS

        public function hashNSS($numero_securite_social){

            return hash('sha512', $numero_securite_social);

        }

        // Generateur aleatoir de chaine de caractere

        public function random($length){

            $alphabet = "0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";

            return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
        }

        // Enregistrement du patient dans la BD

        public function register($nom, $prenom, $age, $sex, $email, $numero_securite_social,$telephone){

            $patient = [
                
                'nom' => $nom,
                'prenom' => $prenom,
                'age' => $age,
                'sex' => $sex,
                'email' => $email,
                'numero_securite_social' => $numero_securite_social,
                'telephone' => $telephone,
                
            ];

            $this->db->query("INSERT INTO patients(nom,prenom,age,sex,email,numero_securite_social,telephone) 
                              VALUES(:nom, :prenom, :age, :sex, :email, :numero_securite_social, :telephone)", $patient);
            
            // $patient_id = $this->db->lastInsertId();

            $tracking_number = $this->random(6);
            $token = $this->random(100);

            // mail($email, 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\nhttp://  $host . "/BoostJob/pages/confirm.php?id=$user_id&token=$token");

            return $tracking_number;

        }

        // connexion du patient

        public function login($numero_securite_social){

            // var_dump($numero_securite_social);
            // die();
            try{
                $patient_hosto = $this->db->query("SELECT * FROM patients WHERE(numero_securite_social = :numero_securite_social)", ['numero_securite_social' => $numero_securite_social])->fetch();
        
                if($patient_hosto){
                    $response = [
                        'message' => 'utilisateur connecte a la BD de l\'hopital',
                        'numero_securite_social' => $patient_hosto['numero_securite_social']
                    ];

                    echo json_encode($response);
                
                }else{

                    return false;
                }

                return true;

            }catch(PDOException $e){
                die($e->getMessage());
            }

        }
    }


?>