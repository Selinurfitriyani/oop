<?php
class Komputer
{
     public $processor = "Intel Core I 7";
     public function __construct()
     {
         echo "Construct dari komputer <br>"; 
     }
     public function __destruct()
     {
         echo " destructdari komputer <br>"; 
     }
}
class Laptop extends komputer 
{
    public function __construct()
    {
        parent :: __construct();
        echo "Construct dari komputer <br>"; 
    }
    public function spesifikasi()
     {
         echo "spesivikasi Laptop : <br>"; 
     }
     public function __destruct()
     {
         echo "destruct dari komputer <br>"; 
         parent :: __destruct();
     }
}
$asus = new Laptop ();
$asus->spesifikasi();
echo $asus-> processor;


?>