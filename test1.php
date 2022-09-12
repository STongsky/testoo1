<?php

class BaseDB{

        
        private $host = "localhost:3306";
        private $user = "root";
        private $password = "";
        private $dbname = "test";
        private $connect;

        
   
        public function __construct() {

           $this->connect = mysqli_connect($this->host,$this->user,$this->password,$this->dbname);

           if ($this->connect->connect_error) {
             die("Connection failed: " . $conn->connect_error);
           }
           echo "";

  
        }

          public function insert($sql) {
            $data = mysqli_query($this->connect,$sql);

           return $data;

            
           
        }

        public function select($sql) {
            $data = mysqli_query($this->connect,$sql);

           if($data == NULL){
            die("database error");
          }

            $getdatarow = mysqli_num_rows($data);

           

            $getdata = array();

              
            if($getdatarow){


            while ($row = mysqli_fetch_assoc($data))
            {
                $getdata[] = $row;
              

            }
        }

        return $getdata;

        }

        
        public function __destruct()
        {
            mysqli_close($this->connect);

        }

           
        }




    









?>