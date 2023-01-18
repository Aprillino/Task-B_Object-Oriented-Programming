<?php

class lingkaran{
    public $nama = "lingkaran";
    public float $ruas = 20;
    public float $phi = 3.14;
    public float $scale = 4;
    public function area(){
        $luaslingkaran = (1/2)$this->phi$this->ruas;
        return $luaslingkaran;
    }
    public function circumference(){
        $kelilinglingkaran = $this->phi*($this->ruas*2);
        return $kelilinglingkaran;
    }
    public function enlarge(){
        
        $B_ruas = $this->ruas*$this->scale;
        return $B_ruas;
    }
    public function shrink(){
        
        $K_ruas = $this->ruas/$this->scale;
        return $K_ruas;
    }
}

class persegi{
    public $nama = "persegi";
    public float $sisi = 10;
    public float $scale = 4;
    public function area(){
        $luaspersegi = $this->sisi*$this->sisi;
        return $luaspersegi;
    }
    public function circumference(){
        $kelilingpersegi = 4*$this->sisi;
        return $kelilingpersegi;
    }
    public function enlarge(){
        
        $B_sisi = $this->sisi*$this->scale;
        return $B_sisi;
    }
    public function shrink(){
        
        $K_sisi = $this->sisi/$this->scale;
        return $K_sisi;
    }
}

class persegi_panjang{
    public $nama = "persegi panjanng";
    public float $panjang = 10;
    public float $lebar = 5;
    public float $scale = 4;
    public function area(){
        $luas = $this->panjang*$this->lebar;
        return $luas;
    }
    public function circumference(){
        $keliling = 2*($this->panjang+$this->lebar);
        return $keliling;
    }
    public function enlarge(){
        
        $B_panjang = $this->panjang*$this->scale;
        $B_lebar = $this->lebar*$this->scale;
        $besarin[] = [$B_panjang, $B_panjang];
        return $besarin;
    }
    public function shrink(){
        
        $K_panjang = $this->panjang/$this->scale;
        $K_lebar = $this->lebar/$this->scale;
        $kecilin[] = [$K_panjang, $K_panjang];
        return $kecilin;
    }
}

$circle = new lingkaran();
$square = new persegi();
$rectangle = new persegi_panjang();

class descriptor {
    public static function describe($bangunDatar) {
      return "Bangun Datar ini adalah ".$bangunDatar->nama." yang memiliki luas ".$bangunDatar->area()." dan keliling ".$bangunDatar->circumference();
    }
}

$descriptor = new descriptor;

echo $descriptor->describe($circle);
echo "<br/>";
echo $descriptor->describe($square);
echo "<br/>";
echo $descriptor->describe($rectangle);
echo "<br/>";




?>