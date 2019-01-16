<?php  

require_once 'App/init.php';

$produk1 = new Komik("Kungfu Panda","JhujuZH","pinkPanda",57000,274);

$produk2 = new Game("Uncharted","Neil Druckmann","Acerr Computer",99000,45);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();