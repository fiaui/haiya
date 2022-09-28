<?php
    class Klinik_Umum{
        public $Dokter = "Jungkook";
        public $Pasien = "Alifia";
        public $Gejala = "Batuk Pilek";

    public function __construct(){
        echo "Dokter : $this->Dokter <br /> Pasien : $this->Pasien <br /> Gejala : $this->Gejala";
    }
    }
    $klinik = new Klinik_Umum;