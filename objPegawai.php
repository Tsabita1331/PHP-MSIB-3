<?php
require 'Pegawai.php';

//ciptakan object
$p1 = new Pegawai('001','Tsabita','Manager','Muslim', 'Menikah');
$p2 = new Pegawai('002','Syalza','Asmen','Non Muslim', 'Belum Menikah');
$p3 = new Pegawai('003','Billa','Kabag','Muslim', 'Menikah');
$p4 = new Pegawai('004','Irawan','Staff','Non Muslim', 'Menikah');
$p5 = new Pegawai('005','Ayuni','Staff','Muslim', 'Belum Menikah');

$p1->setGajiPokok();
$p1->setTunjab();
$p1->setTunkel();
$p1->setZakat();
$p1->mencetak();

$p2->setGajiPokok();
$p2->setTunjab();
$p2->setTunkel();
$p2->setZakat();
$p2->mencetak();

$p3->setGajiPokok();
$p3->setTunjab();
$p3->setTunkel();
$p3->setZakat();
$p3->mencetak();

$p4->setGajiPokok();
$p4->setTunjab();
$p4->setTunkel();
$p4->setZakat();
$p4->mencetak();

$p5->setGajiPokok();
$p5->setTunjab();
$p5->setTunkel();
$p5->setZakat();
$p5->mencetak();
