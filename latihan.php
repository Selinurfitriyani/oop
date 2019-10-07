<?php
   class RPL2
{
 public $siswa;
 public $laki;
 public $cewek;
 public $laptop;
 public $motor;

 public function sekolah(){
     return"Smk Assalam ";
 }
 public function jurusan(){
    return"X Rpl 2";
}
}
$ll = new RPL2;
$ll -> $siswa = 30;
$ll -> $laki  = 15;
$ll -> $perempuan = 15;
$ll -> $nama_wali_kelas = "Bu dewi";
$ll -> $nama_murid = "Ridwan";
echo "Di " .$ll->sekolah(). "jurusan" .$ll->jurusan()."<br>";
echo "Di " .$ll->jurusan(). "<br>Terdiri dari .$ll->siswa siswa yang diantaranya adalah: <br>";
echo "siswa laki - laki : $ll->laki<br>";
echo "siswa perempuan : $ll->perempuan<br>";
echo "siswa wali kelas : $ll->wali_kelas<br>";
echo "siswa ketua murid : $ll->ketua_murid<br>";
?>