<?php
class Game extends Produk implements Infoproduk {
	public $waktuMain;

	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0, $waktuMain = 0) {
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->waktuMain = $waktuMain;
	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} ($this->harga})";

		return $str;
	}

	public function getInfoProduk() {
		$str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}