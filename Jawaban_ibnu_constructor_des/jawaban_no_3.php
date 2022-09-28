<?php 
   class apotek {
    public $jenis_obat = "kapsul";
    public $nama_obat = "oskadon";
    public $harga = "6000";

    public function __construct(){
        echo "Daftar Obat Apotek Depresi";
      }
    public function apotekobat(){
        return "Nama Obat : $this->nama_obat, Jenis Obat :  $this->jenis_obat, Harga : $this->harga";
    }
}
 
   $obat_apotek = new apotek();
   
    echo "<br />";
    echo $obat_apotek->apotekobat();
    echo "<br />";