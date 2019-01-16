<?php  

class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain,
		   $tipe;

	public function __construct($judul = "judul",$penulis = "penulis",$penerbit = "penerbit",$harga = 0, $jmlHalaman = 0, $waktuMAin = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMAin = $waktuMAin;
		$this->tipe = $tipe;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		//komik : Kungfu Panda | JhujuZH, pinkPanda (Rp.57000) - 274 halaman.
		$str = "{$this->tipe} : {$this->judul} |{$this->getLabel()} (Rp. {$this->harga})";
		if($this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		}else if ($this->tipe == "Game") {
			$str .= " ~ {$this->waktuMain} Jam.";
		}
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak(Produk $Produk) {
		$str = "{$Produk->judul} | {$Produk->getLabel()} (Rp. {$Produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Kungfu Panda","JhujuZH","pinkPanda", 57000, 274, 0,"Komik");

$produk2 = new Produk("Uncharted","Neil Druckmann","Acerr Computer", 99000, 274, 0, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();


