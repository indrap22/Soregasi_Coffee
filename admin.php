<!DOCTYPE html>
<html lang="en">

<?php

require_once "config.php";

?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Soregasi</title>
    <link rel="shortcut icon" href="img/soregasi.png " type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <!-- my css -->
    <link href="css/style.css" rel="stylesheet" />
    <style>
    .card {
        margin-bottom: 1rem;
        background-color: #9e5511;
        width: 20rem;
    }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="head-image text-center">
                        <img src="img/soregasi.png" class="img-fluid" style="width: 12rem; padding-top: 10px;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-3 table-responsive ">
        <div class="row">
            <div class="col-sm-12 text-center" style="background-color: #9E5511;">
                <h1 class="text-center">
                    Daftar Pesanan
                </h1>
                <a href="cetak.php" class="btn btn-outline-info float-end me-1 " name="laporan">
                    Laporan</a>
            </div>
            <table class="table table-bordered table-responsive " style="background-color: #9E5511;">
                <thead>
                    <tr>
                        <th scope="col">
                            <center>No</center>
                        </th>
                        <th scope="col">
                            <center>Nama Meja</center>
                        </th>
                        <th scope="col">
                            <center>Pesanan</center>
                        </th>
                        <th scope="col">
                            <center>Harga</center>
                        </th>
                        <th scope="col">
                            <center>Jumlah</center>
                        </th>
                        <th scope="col">
                            <center>Total</center>
                        </th>
                        <th scope="col">
                            <center>Tanggal Pesanan</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $queryLap = mysqli_query($koneksi , "SELECT * FROM tbl_lap");
                        $nomor = 1;
                        while ($data = mysqli_fetch_array($queryLap)) { ?>
                    <tr>
                      <td><center><?= $nomor++ ?></center></td>
                        <td>
                            <center><?= $data['nama_meja'] ?></center>
                        </td>
                        <td>
                            <center><?= $data['pesanan'] ?></center>
                        </td>
                        <td>
                            <center><?= $data['harga'] ?></center>
                        </td>
                        <td>
                            <center><?= $data['jumlah'] ?></center>
                        </td>
                        <td>
                            <center><?= $data['total'] ?></center>
                        </td>
                        <td>
                            <center><?= $data['tgl_pesan'] ?></center>
                        </td>
                    </tr>
                    <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
</body>

</html>