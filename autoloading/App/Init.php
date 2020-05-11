<?php


// require_once 'Produk/Infoproduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoproduk.php';

function autoload($class) {

}
spl_autoload_register(function ($class){
    require_once 'Produk/' . $class. '.php';
});