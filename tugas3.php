<?php

$m1 = ['nim'=>'192901','nama'=>'Tsabita','nilai'=>50];
$m2 = ['nim'=>'192902','nama'=>'Syalza','nilai'=>70];
$m3 = ['nim'=>'192903','nama'=>'Billa','nilai'=>90];
$m4 = ['nim'=>'192904','nama'=>'Irawan','nilai'=>40];
$m5 = ['nim'=>'192905','nama'=>'Caca','nilai'=>77];
$m6 = ['nim'=>'192906','nama'=>'Ayuni','nilai'=>59];
$m7 = ['nim'=>'192907','nama'=>'Zahra','nilai'=>75];
$m8 = ['nim'=>'192908','nama'=>'Auliah','nilai'=>95];
$m9 = ['nim'=>'192909','nama'=>'Akhmad','nilai'=>85];
$m10 = ['nim'=>'192910','nama'=>'Manda','nilai'=>99];


$ar_judul = ['No','Nim','Nama','Nilai','Keterangan','Grade','Predikat'];


$jml_data = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

$jumlah_mahasiswa = count($jml_data);
$nilai_mahasiswa = array_column($jml_data,'nilai');
$max_nilai = max($nilai_mahasiswa);
$min_nilai = min($nilai_mahasiswa);
$rata2 = array_sum($nilai_mahasiswa) / $jumlah_mahasiswa;

$keterangan = [
    'Jumlah Mahasiswa'=>$jumlah_mahasiswa,
    'Nilai Tertinggi'=>$max_nilai,
    'Nilai Terendah'=>$min_nilai,
    'Nilai Rata-Rata'=>$rata2
];
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Nilai Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <h3 class="text-center">Data Mahasiswa</h3>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($jml_data as $data){
              
                $keterangan_mahasiswa = ($data['nilai']>= 60) ? 'lulus' : 'tidak lulus';

                if($data['nilai'] > 85  && $data['nilai'] <= 100) $grade = 'A';
                else if($data['nilai'] >75  && $data['nilai'] <= 85) $grade = 'B';
                else if($data['nilai'] >= 60  && $data['nilai'] <= 75) $grade = 'C';
                else if($data['nilai'] > 30  && $data['nilai'] < 60 ) $grade = 'D';
                else if($data['nilai'] >= 0 && $data['nilai'] <= 30) $grade = 'E';
                else $grade = '' ;

                switch ($grade) {
                    case 'A': $predikat = 'Memuaskan'; break;
                    case 'B': $predikat = 'Baik'; break;
                    case 'C': $predikat = 'Cukup'; break;
                    case 'D': $predikat = 'Kurang'; break;
                    case 'E': $predikat = 'Buruk'; break;
                    default: $predikat = ''; break;
                }
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nilai'] ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $keterangan_mahasiswa?></td>
                    <td><?= $predikat ?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="6"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>