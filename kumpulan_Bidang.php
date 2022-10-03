<?php
require_once 'Lingkaran.php';
require_once 'Segitiga.php';
require_once 'Persegipanjang.php';

$l1 = new Lingkaran(3);
$s1 = new Segitiga(3, 5);
$p1 = new Persegipanjang(9, 12);

$data = [$l1,$s1,$p1];
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kumpulan Bidang</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <h3 class="text-center">BIDANG DATAR</h3>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Bidang</th>
                    <th>Keterangan</th>
                    <th>Luas Bidang</th>
                    <th>Keliling Bidang</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($data as $d){
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $d-> namaBidang(); ?></td>
                    <td><?= $d->mencetak(); ?></td>
                    <td><?= $d->luasBidang(); ?></td>
                    <td><?= $d->kelilingBidang(); ?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>