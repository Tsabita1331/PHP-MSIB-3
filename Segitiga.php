<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D{
    //member1 variabel
    public $alas;
    public $tinggi;
    //member2 constructor
    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang (){
        echo 'Segitiga';
    }
    public function Luasbidang (){

        $luas = 0.5 * $this->alas * $this->tinggi;
        echo $luas;
    }  
    public function kelilingBidang (){
        $keliling = $this->alas * $this->tinggi;
        echo $keliling;
    }
    public function mencetak(){
        echo 'Alas = '.$this->alas; 
        echo '<br/>Tinggi = '.$this->tinggi;
    }
}