<?php
    class Database extends PDO
    {
        private $host = "localhost";
        private $user = "root";
        private $pwd = "";
        private $db = "api";
        private $con;

        public function __construct()
        {
            $this->con = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pwd);
            
            echo "<pre>";
            var_dump($this->con);
            
            if($this->conn)
            {
                echo "connect";
                echo "<pre>";
                print_r($this->conn);
                return $this->con;
            }                
            else
                echo "failed";                            
        }
    }

    