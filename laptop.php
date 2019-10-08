<?php
//Buat class laptop
class Laptop{

    // buat property untuk class laptop
    var $pemilik;
    var $merk;
    var $ukuran_layar;

    //buat method untuk class laptop
    function Hidupkan_Laptop(){
        return "Hidupkan Laptop";
    }
    function Matikan_Laptop(){
        return "Matikan Laptop";
    }
}
// buat object dari class laptop (instalasi)
$laptop_anto = new Laptop();

// set property
$laptop_anto->pemilik="Anto";
$laptop_anto->merk="Asus";
$laptop_anto->ukuran_layar="15 inchi";

//tampilkan property
echo "Nama Pemilik Laptop : $laptop_anto->pemilik";
echo"<br>";
echo $laptop_anto->merk;
echo"<br>";
echo $laptop_anto->ukuran_layar;
echo"<br>";

//tampilkan method
// tampilkan method
echo $laptop_anto->Hidupkan_Laptop();
echo "<br />";
echo $laptop_anto->Matikan_Laptop();
?>