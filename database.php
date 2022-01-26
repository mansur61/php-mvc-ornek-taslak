<?php

class Database{

    protected $db;
    private $veritabani = "deneme"; // mysql de bu veri tabanını oluştur.
    private $kullaniciAdi = "root";
    private $sifre = "root";

    public function __construct(){

        try{
            $this->$db = new PDO('mysql:host=localhost;dbname='. $veritabani .', '. $kullaniciAdi .', '. $sifre .' ');
        }catch(PDOException $ex){
            echo $ex->getMessage();
        }
        


    }
}