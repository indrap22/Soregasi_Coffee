<!DOCTYPE html>
<html>
<?php

require_once "config.php";

?>

<head>
    <title>Cetak Laporan Pembelian Soregasi Coffee</title>
    <a href="admin.php" class="float-start">
            <img src="img/go-back-2.png" class="" style="width: 30px" />
          </a>
</head>

<body>

    <center>

        <h2>DATA LAPORAN PEMBELIAN</h2>

    </center>

    <table border="1" style="width: 100%">
        <tr>
            <th width="5%">No</th>
            <th>Nama Meja</th>
            <th>Pesanan</th>
            <th>Harga</th>
            <th width="5%">Jumlah</th>
            <th>Total</th>
            <th width="15%">Tanggal Pesanan</th>
        </tr>
        <?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"SELECT * FROM tbl_lap");
		while($data = mysqli_fetch_array($sql)){
		?>
        <tr>
            <td><center><?php echo $no++; ?></center></td>
            <td><center><?php echo $data['nama_meja']; ?></center></td>
            <td><center><?php echo $data['pesanan']; ?></center></td>
            <td><center><?php echo $data['harga']; ?></center></td>
            <td><center><?php echo $data['jumlah']; ?></center></td>
            <td><center><?php echo $data['total']; ?></center></td>
            <td><center><?php echo $data['tgl_pesan']; ?></center></td>
        </tr>
        <?php 
		}
		?>
    </table>

    <script>
    window.print();
    </script>

</body>

</html>