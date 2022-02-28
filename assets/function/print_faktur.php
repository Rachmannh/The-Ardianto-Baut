<?php
session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
    echo "
			<script>
			alert('Silahkan Login Terlebih Dahulu');
			document.location.href = 'login.php';
			</script>
	";
}

function format_rupiah($total)
{
    $angka = "Rp." . number_format($total, 2, ',', '.');
    return $angka;
}
include 'template/header.php';
$value = "";
$sampai = $value;
$dari = $value;

if (isset($_POST["cari"])) {
    $tampil = caridate2($_POST['dari'], $_POST['sampai']);
    $dari = $_POST['dari'];
    $sampai = $_POST['sampai'];
}

$no = 1;
?>

<!-- Content -->
<link rel="stylesheet" href="style.css">
<div class="tbl_keluar">
    <div class="col-10" style="margin: 20px;">
        <h1>Cetak Data Barang</h1>
        <div class="pilih-barang">
            <p>Pilih Tanggal</p>
        </div>
        <div class="tanggal">
            <form action="" method="POST">
                <input type="date" name="dari">
                <input type="date" name="sampai">
                <button type="submit" name="cari">Cari Data</button>
            </form>

            <?php
            if (isset($_POST['dari']) && isset($_POST['sampai'])) {

                $tampil = caridate2($_POST['dari'], $_POST['sampai']);

            ?>
        </div>
        <div class="tabel-data">
            <table class="table table-striped table-hover table-light table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Keluar</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Nama Customer</th>
                        <th>Harga Barang</th>
                        <th>Jumlah</th>
                        <th>Diskon</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tampil as $arr) : ?>
                        <tr>
                            <td><?= $no++ ?> </td>
                            <td><?= $arr['tanggal'] ?> </td>
                            <td><?= $arr['kode_barang'] ?> </td>
                            <td><?= $arr['nama_barang'] ?> </td>
                            <td><?= $arr['nama_cust'] ?> </td>
                            <td><?= format_rupiah($arr['harga_barang']) ?> </td>
                            <td><?= $arr['jumlah'] ?> </td>
                            <td><?= $arr['diskon'] ?> %</td>
                            <td><?= format_rupiah($arr['total']) ?> </td>
                            <td>

                                <a href="edit_penjualan.php?id=<?= $arr['id_penjualan'] ?>" class="btn btn-warning">Edit</a>
                                <a href="hapus_penjualan.php?id=<?= $arr['id_penjualan'] ?>" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger">Hapus</a>

                            </td>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                        <?php

                        $total = 0;
                        foreach ($tampil as $key) {
                            $total = $total + $key['total'];
                        }
                        // var_dump($data['total']);

                        ?>
                        <th colspan="8">Total</th>
                        <th colspan="2"><?= format_rupiah($total) ?></th>
                    </tr>
                </tbody>
            </table>

        <?php } else {
                echo 'Cari data terlebih Dahulu';
            } ?>
        </div>
    </div>
</div>
<!-- End Content -->
</div>
</div>
</div>

</body>

</html>