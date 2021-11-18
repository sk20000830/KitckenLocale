<?php

   class Database{

       //information about your database
        private $servername = "http://localhost:8888/phpMyAdmin5/index.php?route=/database/structure&db=heroku_b3d06f3744f8a2b&server=2";
        private $username = "b253046c03465b";
        private $password = "fa791713";
        private $database = "heroku_b3d06f3744f8a2b";
        public $conn;


            //create our connection string
        public function __construct(){

            $this->conn = new mysqli($this->servername, $this->username,$this->password,$this->database);

            //check if the connection is okay
            if($this->conn->connect_error)
            {
                die("Connection failed: " .$this->database. ":" .$this->conn->connect_error);
            }
            else
            {
                return $this->conn;
            }
        }
            
            // echo "Connected successfuly";
   }

    
    
    


?>