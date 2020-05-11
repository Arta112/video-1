<?php

class Produk{
    public $judul ,
           $penulis, 
           $penerbit,
           $harga;
          


    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }


    public function getlabel() {
               return "$this->penulis, $this->penerbit";   //method
           }

    public function getInfoProduk() {
        $str = " {$this->judul} | {$this->getlabel()} (Rp.{$this->harga})";
        return $str;
}
}
class Komik extends produk {
    public $jmlHalaman;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0,$jmlHalaman =0) {
        parent::__construct($judul, $penulis, $penerbit, $harga,);
    $this->jmlHalaman = $jmlHalaman;
    
    }

    public  function getInfoProduk () {
       $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0,$waktuMain =0) {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktuMain =$waktuMain;
}
    
    public function getInfoproduk() {
        $str = "Game : ". parent::getInfoProduk()."- {$this->waktuMain} Jam.";  
        return $str;
    }
}




class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "komik : {$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga}) - {$this->jmlHalaman} Halaman.";
       return $str;
    }
}


$produk1 = new Komik("Naruto", "Masahi kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new  Game("unchared", "Neil Druckman", "Sony Computer", 250000,50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

 