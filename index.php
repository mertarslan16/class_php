
<?php

class Sekil {
    public $ad;

    public function __construct($ad) {
        $this->ad = $ad;
    }

    public function alanHesapla() {
        // Alan hesaplaması genel olarak burada yapılabilir
        return 0;
    }

    public function cevreHesapla() {
        // Çevre hesaplaması genel olarak burada yapılabilir
        return 0;
    }
}

class Dikdortgen extends Sekil {
    protected $uzunKenar;
    protected $kisaKenar;

    public function __construct($uzunKenar, $kisaKenar) {
        parent::__construct("Dikdörtgen");
        $this->uzunKenar = $uzunKenar;
        $this->kisaKenar = $kisaKenar;
    }

    public function alanHesapla() {
        return $this->uzunKenar * $this->kisaKenar;
    }

    public function cevreHesapla() {
        return 2 * ($this->uzunKenar + $this->kisaKenar);
    }
}

class Ucgen extends Sekil {
    protected $taban;
    protected $yukseklik;
    protected $kenar1;
    protected $kenar2;
    protected $kenar3;

    public function __construct($taban, $yukseklik, $kenar1, $kenar2, $kenar3) {
        parent::__construct("Üçgen");
        $this->taban = $taban;
        $this->yukseklik = $yukseklik;
        $this->kenar1 = $kenar1;
        $this->kenar2 = $kenar2;
        $this->kenar3 = $kenar3;
    }

    public function alanHesapla() {
        return ($this->taban * $this->yukseklik) / 2;
    }

    public function cevreHesapla() {
        return $this->kenar1 + $this->kenar2 + $this->kenar3;
    }
}

class Kare extends Dikdortgen {
    public function __construct($kenar) {
        parent::__construct($kenar, $kenar);
        $this->ad = "Kare";
    }
}

// Örnek kullanım
$dikdortgen = new Dikdortgen(5, 3);
echo $dikdortgen->ad . " Alan: " . $dikdortgen->alanHesapla() . ", Çevre: " . $dikdortgen->cevreHesapla() . "<br>";

$ucgen = new Ucgen(4, 6, 3, 4, 5);
echo $ucgen->ad . " Alan: " . $ucgen->alanHesapla() . ", Çevre: " . $ucgen->cevreHesapla() . "<br>";

$kare = new Kare(7);
echo $kare->ad . " Alan: " . $kare->alanHesapla() . ", Çevre: " . $kare->cevreHesapla() . "<br>";


?>
