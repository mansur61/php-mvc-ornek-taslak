<?php

class Database{

    protected $db;

    public function __construct(){

        try{
            
            $veritabani = "deneme";    
            $kullaniciAdi = "root";  
            $sifre = "";

            $connection_string = "mysql:host=localhost;dbname=deneme";
            $connection = null;
                 
            $connection  = new PDO($connection_string,$kullaniciAdi,$sifre);

            if ($connection) {
                echo "Connected Successfully!". "<br>";
                $this->db = $connection;
            } else {
                echo "Connection Failed!" ."<br>";
            }

            
        }catch(PDOException $ex){
            echo "<br>";
            echo $ex->getMessage();
        }
        
    }
}