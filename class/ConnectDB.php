<?php

    class ConnectDB{

        protected $host = 'localhost';
        protected $database_name;
        protected $encodage = 'utf8';
        protected $database_username = 'root';
        protected $database_password = '';
        protected $driver = 'mysql';
        protected $db;

        function __construct($database_name){

            $this->database_name = $database_name;

            try{

                $this->db = new PDO("$this->driver:host=$this->host;dbname=$this->database_name;charset=$this->encodage", 
                $this->database_username, $this->database_password);

                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }catch(PDOException $e){

                die($e->getMessage());
            }
        }

        public function query($query, $data = []){

            if($data){

                $req = $this->db->prepare($query);
                $req->execute($data);

            }else{

                $req = $this->db->prepare($query);
                $req->execute();
            }

            return $req;
        }

 }



?>