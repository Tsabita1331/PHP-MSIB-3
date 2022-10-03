<?php
require_once 'Bentuk2D.php';
class Lingkaran extends Bentuk2D{
    //member1 variabel
    public $jari2;
    //member2 constructor
    public function __construct($jari2){
        $this->jari2 = $jari2;
    }

    public function namaBidang (){
        echo 'Lingkaran';
    }
    public function Luasbidang (){
 
        $luas = $this->jari2 * $this->jari2 * 3.14;
        echo $luas;
    }
    public function kelilingBidang (){
        $keliling = 2 * $this->jari2 * 3.14;
        echo $keliling;
    }
    public function mencetak(){
        echo 'Jari-jari = '.$this->jari2; 
    }
}