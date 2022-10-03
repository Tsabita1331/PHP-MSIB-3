<?php
require_once 'Bentuk2D.php';
class Persegipanjang extends Bentuk2D{
    //member1 variabel
    public $panjang;
    public $lebar;
    //member2 constructor
    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    
    public function namaBidang (){
        echo 'Persegi Panjang';
    }
    public function Luasbidang (){
        $luas = $this->panjang * $this->lebar;
        echo $luas;
    }
    public function kelilingBidang (){
        $keliling = 2 * ($this->panjang + $this->lebar);
        echo $keliling;
    }
    public function mencetak(){
        echo 'Panjang = '.$this->panjang; 
        echo '<br/>Lebar = '.$this->lebar;
    }
}