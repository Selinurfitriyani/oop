<?php
//Buat class baju
class Baju{

    // buat property untuk class baju
    var $pemilik;
    var $merk_baju;
    var $ukuran_baju;

    //buat method untuk class baju
    function Beli(){
        return "pembelian";
    }
}
// buat object dari class baju
$baju_sn = new Baju();
$baju_nf = new Baju();

// set property
$baju_sn->pembeli="Seli";
$baju_sn->merk_baju="Ashboel";
$baju_sn->ukuran_baju="M";

$baju_nf->pembeli="Diana";
$baju_nf->merk_baju="Supreme";
$baju_nf->ukuran_baju="XL";

//tampilkan property
echo "Nama Pembeli Baju : $baju_sn->pembeli";
echo"<br>";
echo "Merk Baju Yang Di Beli : $baju_sn->merk_baju";
echo"<br>";
echo "Ukuran Baju Yang Di Beli : $baju_sn->ukuran_baju";
echo"<br><br>";


echo "Nama Pembeli Baju : $baju_nf->pembeli";
echo"<br>";
echo "Merk Baju Yang Di Beli : $baju_nf->merk_baju";
echo"<br>";
echo "Ukuran Baju Yang Di Beli : $baju_nf->ukuran_baju";
echo"<br>";

//tampilkan method
// tampilkan method
?>