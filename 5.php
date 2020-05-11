<?php

class Produk{
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

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
       return $str;
    }
}


$produk1 = new produk("Naruto", "Masahi kishimoto", "Shonen Jump", 30000);
$produk2 = new produk("unchared", "Neil Druckman", "Sony Computer", 250000);

echo "Komik : ". $produk1->getlabel();
echo "<br>";
echo "Game : ". $produk2->getlabel();

$infoproduk1 = new CetakInfoProduk();
echo "<br>";
echo $infoproduk1->cetak($produk1);


