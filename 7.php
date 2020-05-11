<?php

class Mobil {
    public $nama, $merk,$warna,
    $kecepatantambahMkasimal,
    $jumlahpenumpang;

    public function tambahKecepatan() {
        return "Kecepatan bertamabah!";
    }
}

class MobilSport extends Mobil {
    public $turbo = false;

    public function jalankanTurbo() {
        $this->turbo = true;
        return "Turbo dijalakan!";
    }
}

//instance

$mobil = new MobilSport();
echo $mobil->tambahKecepatan();
echo "<br>";
echo $mobil->jalankanTurbo();