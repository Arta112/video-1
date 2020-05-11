<?php

// define('NAMA','Arta Hutapea');   //define tdk dapat disimpan dalam kelas

// echo NAMA;

// echo "<br>";

// const UMUR = 32; //dapat dimasukkan dalam kelas.
// echo UMUR;


// class Coba {
//    const NAMA = 'Arta';
// }
// echo  Coba::NAMA;

// echo __DIR__;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}
 $obj = new COba;
 echo  $obj->kelas;

?>