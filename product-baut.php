<?php
include './assets/function/functions.php';
$kd = $_POST['id'];
$data = barang("SELECT * FROM data_barang WHERE id_barang =" . $kd);

foreach ($data as $barang) {
?>
    <table  width='100%'>
        <tr>
            <td>
                <img style="width: 300px;" src="./assets/function/img/<?= $barang['img']; ?>" class="card-img-top card-img" alt="...">
            </td>
            <tr class="text-center">
                <td style="padding:20px 0px 20px 0px;">
                    <p>Nama : <?= $barang['nama_barang']; ?></p>
                    <p>Stok : <?= $barang['stok']; ?></p>
                    <p>Harga : <?= $barang['harga_promo']; ?></p>
                    <p>Kategori : <?= $barang['kategori']; ?></p>
                </td>
            </tr>
        </tr>
    </table>

<?php } ?>