<?php 

class Kalkulator{
    protected float $daya = 0, $konsumsiDaya;

    public function __construct($konsumsiDaya)
    {
        $this->konsumsiDaya = $konsumsiDaya;
    }

    public function isiDaya($dayaMasuk){
        $this->daya = $this->daya +  $dayaMasuk;
    }

    public function dayaSekarang(){
        echo "Daya Saat ini : ". $this->daya ."%";
    }

    public function cekDaya($konsumsiDaya){
        if( $this->daya >= $konsumsiDaya) {
             $this->daya -= $konsumsiDaya;
             return true;
         }
         echo "Daya tidak cukup!!";
 
         return false;
     }
    
    public function tambah($angka1, $angka2){
        $konsumsiDaya = $this->konsumsiDaya;
        if($this->cekDaya($konsumsiDaya) == true){
            echo $angka1+$angka2;
        }
    }
    public function kurang($angka1, $angka2){
        $konsumsiDaya = $this->konsumsiDaya;
        if($this->cekDaya($konsumsiDaya) == true){
            echo $angka1-$angka2;
        }
    }
    public function kali($angka1, $angka2, $konsumsiDaya = 0){
        $konsumsiDaya = $this->konsumsiDaya;
        if($this->cekDaya($konsumsiDaya) == true){
            echo $angka1*$angka2;
        }
    }
    public function bagi($angka1, $angka2, $konsumsiDaya = 0){
        $konsumsiDaya = $this->konsumsiDaya;
        if($this->cekDaya($konsumsiDaya) == true){
            if($angka2 !== 0){
            echo $angka1/$angka2;
            }
            else{
            echo "Tidak bisa melakuka pembagian dengan angka 0";
             }
        
            }
        }
}

class KalkulatorHemat extends Kalkulator{
    public function pemangkatan($angka, $pangkat){
        $konsumsiDaya = $this->konsumsiDaya;
        $hasil = 1;
        if($this->cekDaya($konsumsiDaya) == true){
            for($i=1; $i <= $pangkat; $i++){
                $hasil = $hasil*$angka;

           }
        }
        if($hasil > 1000000){
            echo "Nilai diluar batas yang ditentukan";
        }
        else{
        echo $hasil;
        }
        }
    }
        


$k = new Kalkulator(10);
$kh = new KalkulatorHemat(5);

// ---------------------------------
echo "Kalkulator <br>";
$k->isiDaya(100);
$k->dayaSekarang();
echo "<br>";

$k->tambah(10,20);
echo "<br>";
$k->kurang(10,20);
echo "<br>";
$k->kali(10,20);
echo "<br>";
$k->bagi(10,10);
echo "<br>";
$k->bagi(500,10);
echo "<br>";
$k->bagi(30,10);
echo "<br>";
$k->bagi(40,10);
echo "<br>";
$k->bagi(30,10);
echo "<br>";
$k->bagi(50,10);
echo "<br>";
$k->bagi(60,10);
echo "<br>";
$k->bagi(70,10);
echo "<br>";
$k->dayaSekarang();


echo "<hr>";
// ------------------------------- 
echo "Kalkulator Hemat <br>";
$kh->isiDaya(100);
$kh->dayaSekarang();
echo "<br>";
$kh->tambah(10,2);
echo "<br>";
$kh->bagi(10,2);
echo "<br>";
$kh->pemangkatan(10,7);
echo "<br>";
$kh->dayaSekarang();
