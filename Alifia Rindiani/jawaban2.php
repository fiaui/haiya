<!-- how to make -->
<!-- Constructor -->

<?php
class klinik_umum {
  
   public $Dokter = "Jungkook";
   public $Pasien = "Alifia";
   
   public function __construct(){
     echo "Pasien DiPanggil Dokter";
   }
  
   public function Pasien_Bernama(){
     return "Pasien bernama $this->Pasien Dipanggil Dokter $this->Dokter";
  
   }

   // Destructor
   public function __destruct(){
     echo "Pasien sedang Berkonsultasi";
   }
}
  
$Pasien_Alifia= new klinik_umum();
  
echo "<br />";
echo $Pasien_Alifia->Pasien_Bernama();
echo "<br />";
  
unset($Pasien_Alifia);
  
echo "<br />";
echo "Pasien Berikutnya...";
?>