<?php

   class Database{

       //information about your database
        private $servername = "us-cdbr-east-04.cleardb.com";
        private $username = "b777d06a42d09e";
        private $password = "beb99d0b";
        private $database = "heroku_936d64cd73d8cd1";
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