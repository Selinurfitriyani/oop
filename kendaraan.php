<?php
class Kendaraan
{
    public $mobil = "avanza";
    public function __construct()
     {
         echo "mobil yang akan di masukan <br>"; 
     }
     public function __destruct()
     {
         echo "mobil yang akan di keluarkan <br>"; 
     }
}
class Mbl extends Kendaraan
{
    public function __construct()
    {
         parent:: __construct();
         echo "Masuk Mobil<br>";
    }
    public function Diam()
    {
         echo "Diam Di Mobil <br>";
    }
    public function __destruct()
    {
        parent:: __destruct();
         echo "Keluar Di Mobil <br>";
    }
} 
$seli = new Mbl ();
echo $seli-> mobil . "<br>";
$seli->Diam();