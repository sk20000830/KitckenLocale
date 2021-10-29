<?php

   class Database{

       //information about your database
        private $servername = "localhost";
        private $username = "root";
        private $password = "root";
        private $database = "portfolio";
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