<?php

class Produk{
    public $judul ,
           $penulis, 
           $penerbit,
           $harga,
           $jmlHalaman,
           $waktuMain;
          


    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0, $waktuMain =0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman =$jmlHalaman;
        $this->waktuMain = $waktuMain;
        
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
    public  function getInfoProdk () {
        $str = "Komik :{$this->judul} | {$this->getlabel()} (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoproduk() {
        $str = "Game : {$this->judul} | {$this->getlabel()} (Rp.{$this->harga}) - {$this->waktuMain} Jam.";  
        return $str;
    }
}




class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "komik : {$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga}) - {$this->jmlHalaman} Halaman.";
       return $str;
    }
}


$produk1 = new Komik("Naruto", "Masahi kishimoto", "Shonen Jump", 30000, 100,0);
$produk2 = new  Game("unchared", "Neil Druckman", "Sony Computer", 250000, 0 ,50);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

