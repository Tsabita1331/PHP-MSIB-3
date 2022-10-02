<?php

class Pegawai{
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;    
    }

    public function setGajiPokok($gapok){
        $this->jabatan = $jabatan;
        switch ($jabatan) {
            case 'Manager': $gapok = 15000000; break;
            case 'Asmen': $gapok = 10000000; break;
            case 'Kabag': $gapok = 7000000; break;
            case 'Staff': $gapok = 4000000; break;
            default:  $gapok = 0;
        }
    }

    public function setTunjab($tunjab){

        $tunjab = 0.2 * $gapok;
    }
    public function setTunkel($tunkel){
        $this->status = $status;
        $tunkel = ($status == 'Menikah') ? 0.1 * $gapok : 0;
    }
    $gakor = $gapok+$tunkel+$tunjab;

    public function setZakat($zakat){
        $this->agama = $agama;
        $zakat = ($agama == 'Muslim' && $gakor >= 6000000) ? 0.025 * $gapok : 0;
    }
    $gaber = $gakor - $zakat;

    public function mencetak(){
        
        echo '<br/>Nip: '.$this->nip;
        echo '<br/>Nama: '.$this->nama;
        echo '<br/>Jabatan: '.$this->jabatan;
        echo '<br/>Agama: '.$this->agama;
        echo '<br/>Status: '.$this->status;
        echo '<br/>Gaji Pokok: Rp. '.number_format($gapok, 0, ',', '.');
        echo '<br/>Tunjangan Jabatan: Rp. '.number_format($tunjab, 0, ',', '.');
        echo '<br/>Tunjangan Kesehatan: Rp. '.number_format($tunkel, 0, ',', '.');
        echo '<br/>Zakat: Rp. '.number_format($zakat, 0, ',', '.');
        echo '<br/>Gaji Bersih: Rp. '.number_format($gaber, 0, ',', '.');
        echo '<br/>Gaji Kotor: Rp. '.number_format($gakor, 0, ',', '.');
        echo '<hr/>';
    }
}
