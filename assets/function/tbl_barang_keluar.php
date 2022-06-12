<link rel="stylesheet" href="style.css">

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

$tampil = barang("SELECT * FROM data_barang,tbl_penjualan WHERE data_barang.id_barang = tbl_penjualan.id_barang");
$value = "";
$sampai = $value;
$dari = $value;

if (isset($_POST["cari"])) {
    $tampil = cariP($_POST["keyword"]);
    $value = $_POST['keyword'];
} else if (isset($_POST['caridate'])) {
    $tampil = caridate2($_POST['dari'], $_POST['sampai']);
    $dari = $_POST['dari'];
    $sampai = $_POST['sampai'];
}

include 'template/header.php';
?>

<!-- Content -->
<div class="tbl">
    <div class="col-10 m-2">
    <h1>Data Barang Keluar</h1>
        <table class="table table-striped table-hover table-light table-bordered" >
        <div class="row">
                <div class="col-12 d-flex">
                    <form action="" method="post">
                        <label for="cari" style="font-size: 15px" class="me-2">Cari Barang : </label>
                        <input id="cari" class="mb-3 input-control-sm" type="text" name="keyword" placeholder="Masukkan Kode / Nama Barang" autocomplete="off" value="<?= $value; ?>">
                        <button type="submit" class="btn btn-info btn-sm ps-3 pe-3 ms-2 me-2 h-75" name="cari">Cari</button>
                    </form>
                    <form action="" method="post">
                        <!-- <label for="cari" style="font-size: 15px">Cari Barang :</label><br> -->
                        <input id="cari" class="mb-3 input-control-sm" type="date" name="dari" placeholder="Masukkan Kode / Nama Barang" autocomplete="off" value="<?= $dari; ?>"> s/d 
                        <input id="cari" class="mb-3 input-control-sm" type="date" name="sampai" placeholder="Masukkan Kode / Nama Barang" autocomplete="off" value="<?= $sampai; ?>">
                        <button type="submit" class="btn btn-info btn-sm ps-3 pe-3 ms-2 me-2 h-75" name="caridate">Cari</button>
                    </form>
                </div>
            </div>
            <a href="tambah_transaksi.php" class="btn btn-success btn-sm mb-2 mt-1">Tambah Transaksi</a>
            <a href="print_faktur.php" class="btn btn-warning btn-sm mb-2 mt-1 ms-2">Cetak</a>
            <?php if (isset($_POST['cari']) || isset($_POST['caridate'])) : ?>
                <a href="tbl_barang_keluar.php" class="btn btn-danger btn-sm mb-2 mt-1 ms-2">Reset</a>
            <?php endif; ?>
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
                <?php $no = 1 ; ?>
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

                            <a href="edit_penjualan.php?id=<?= $arr['id_penjualan'] ?>" class="btn btn-warning"><i class='bx bx-edit'></i></a>
                            <a href="hapus_penjualan.php?id=<?= $arr['id_penjualan'] ?>" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger"><i class='bx bx-x'></i></a>

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
    </div>
</div>
<!-- End Content -->
<?php include 'template/footer.php'; ?>
