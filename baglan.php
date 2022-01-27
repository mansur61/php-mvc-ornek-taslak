<?php

echo "Bağlantı test sayfası" .'<br>';


try{
            $veritabani = "deneme";    
            $kullaniciAdi = "root";  
            $sifre = "root";

            $connection = null;
                 
            $connection  = new PDO("mysql:host=localhost;dbname=deneme",'root','');

            if ($connection) {
                echo "Connected Successfully!". "<br>";
            } else {
                echo "Connection Failed!" ."<br>";
            }

        }catch(PDOException $ex){
            echo "<br>";
            echo $ex->getMessage();
        }

?>