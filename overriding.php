<?php 

class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	} 

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		// komik : Kungfu Panda | InnerBS, pinkPanda (Rp.99000) - 274 halaman.
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
}

class Komik extends Produk {
	public $JmlHalaman;

	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0, $jmlHalaman = 0) {
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfoProduk() {
		$str = "Komik : ". parent ::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk {
	public $waktuMain;

	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0, $waktuMain = 0) {
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->waktuMain = $waktuMain;
	}

	public function getInfoProduk() {
		$str = "Game : " . parent ::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk$Produk) {
		$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
		return $str;
	}
}

$produk1 = new Komik("Kungfu Panda","InnerBS","pinkPanda",99000, 274);

$produk2 = new Game("Uncharted","Neil Druckmann","Acerr Computer", 55000,45);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();