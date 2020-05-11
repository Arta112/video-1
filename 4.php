<?php

class Product{
    public $judul ,
           $penulis, 
           $penerbit,
           $harga;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga="harga") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }


    public function getlabel() {
               return "$this->penulis, $this->penerbit";   //method
           }
}



$product1 = new product("Naruto", "Masahi kishimoto", "Shonen Jump", 30000);
$product2 = new product("unchared", "Neil Druckman", "Sony Computer", 250000);
$product3 = new product("Dragon Ball");

echo "Komik : ". $product1->getlabel();
echo "<br>";
echo "Game : ". $product2->getlabel();
echo "<br>";
var_dump($product3);

