<?php 

class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain;

	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = "harga",$jmlHalaman = 0, $waktuMain = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain; 
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
}

class Komik extends Produk {
	public function getInfoProduk() {
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
		return $str;
	}
}
 
 class CetakInfoProduk {
 	public function getInfoProduk() {
 		$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
 		return $sttr;
 	}
 }

 $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 76000, 274, 0);
 $produk2 = new Game("Uncharted","Neil Druckmann","Acerr Computer", 55000 , 0, 45);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
 