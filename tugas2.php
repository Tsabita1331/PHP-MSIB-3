<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Data Pegawai</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
    <div class="container px-5 my-5">
        <p class="h4 mb-4 text-center">DATA PEGAWAI</p>
        <form id="contactForm" method="POST">
            <div class="form-floating mb-3">
                <input class="form-control" name="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" />
                <label for="namaPegawai">Nama Pegawai</label>
                <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="agama" aria-label="Agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
                <label for="agama">Agama</label>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jabatan</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="Manager" type="radio" name="jabatan" data-sb-validations="required" />
                    <label class="form-check-label" for="manager">Manager</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="Asisten" type="radio" name="jabatan" data-sb-validations="required" />
                    <label class="form-check-label" for="asisten">Asisten</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="Kabag" type="radio" name="jabatan" data-sb-validations="required" />
                    <label class="form-check-label" for="kabag">Kabag</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="Staff" type="radio" name="jabatan" data-sb-validations="required" />
                    <label class="form-check-label" for="staff">Staff</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="jabatan:required">One option is required.</div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Status</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" Value="Menikah" type="radio" name="status" data-sb-validations="required" />
                    <label class="form-check-label" for="Menikah">Menikah</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" value="BelumMenikah" type="radio" name="status" data-sb-validations="required" />
                    <label class="form-check-label" for="BelumMenikah">Belum Menikah</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="status:required">One option is required.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="jumlahAnak" type="text" placeholder="Jumlah Anak" data-sb-validations="" />
                <label for="jumlahAnak">Jumlah Anak</label>
            </div>
            <div class="d-grid">
                <button class="btn btn-info btn-block my-4" name="proses" type="submit">Simpan</button>
            </div>
        </form>
    </div>
    <?php 
        //tangkap request
        $nama = $_POST['namaPegawai'];
        $agama = $_POST['agama'];
        $status = $_POST['status'];
        $jabatan = $_POST['jabatan'];
        $jmlanak = $_POST['jumlahAnak'];
        $tombol = $_POST['proses'];
        //gapok
        switch ($jabatan) {
            case 'Manager': $gapok = 20000000; break;
            case 'Kabag': $gapok = 10000000; break;
            case 'Asisten': $gapok = 15000000; break;
            case 'Staff': $gapok = 4000000; break;
            default:  $gapok = 0;
        }
        //tunjangan jabatan
        $tunjab = 0.2 * $gapok;
        //tunjangan keluarga
        if($status == 'Menikah' && $jmlanak <= 2) $tukel = $gapok*0.05;
        else if($status == 'Menikah' && $jmlanak <= 5) $tukel = $gapok*0.1;
        else if($status == 'Menikah' && $jmlanak > 5) $tukel = $gapok*0.15;
        else $tukel = 0 ;
        //gakor
        $gakor = $gapok + $tunjab + $tukel;
        //tentukan profesi
        $zakat = ($agama == 'Islam' && $gakor >= 6000000)? 0.025 * $gakor:0;
        // Take Home Pay
        $thp = $gakor - $zakat;
        
        if(isset($tombol)){ ?>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th>NAMA</th>
                        <th>AGAMA</th>
                        <th>JABATAN</th>
                        <th>STATUS</th>
                        <th>JUMLAH ANAK</th>
                        <th>GAJI POKOK</th>
                        <th>TUNJANGAN JABATAN</th>
                        <th>TUNJANGAN KELUARGA</th>
                        <th>GAJI KOTOR</th>
                        <th>ZAKAT PROFESI</th>
                        <th>TAKE HOME PAY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $nama ?></td>
                        <td><?= $agama ?></td>
                        <td><?= $jabatan ?></td>
                        <td><?= $status ?></td>
                        <td><?= $jmlanak ?></td>
                        <td><?= number_format($gapok, 2, ',', '.');?></td>
                        <td><?= number_format($tunjab, 2, ',', '.'); ?></td> 
                        <td><?= number_format($tukel, 2, ',', '.'); ?></td>
                        <td><?= number_format($gakor, 2, ',', '.'); ?></td>
                        <td><?= number_format($zakat, 2, ',', '.'); ?></td>
                        <td><?= number_format($thp, 2, ',', '.'); ?></td>
                    </tr>
                </tbody>
            </table>
        <?php } ?>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>