<?php
//1.Class adalah sebuah blueprint/template
//untuk membuat instance dari object
//2.class mendefinisikan object
//3.class menyimpan data (propety) dan 
// prilaku(method)

//membuat class dengan nama kucing
class kucing
{
  //membuat property
  public $warna="pink";
  public $jml_kaki=4;
  public $mkn_fav="kentang";

  //membuat method dengan nama suara
  public function bersuara ()
  {
      return"miaw";
  }
}
//membuat object baru
$kucing1 = new kucing();
echo "Warna Kucing;$kucing1->warna<br>";
echo "Suara Kucing;".$kucing1->bersuara();