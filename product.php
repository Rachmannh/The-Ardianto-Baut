<?php
include './assets/function/functions.php';
$data = barang("SELECT * FROM data_barang ORDER BY id_barang DESC");
$title = 'Products';

function format_rupiah($total)
{
  $angka = "Rp." . number_format($total, 0, ',', '.');
  return $angka;
}

$value = "";

if (isset($_POST["cari"])) {
  $data = cari($_POST["keyword"]);
  $value = $_POST['keyword'];
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./assets/img/logo.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/responsive.css">

  <!-- Animation -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500&family=Hind+Madurai:wght@300;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Habibi&family=Hind+Madurai:wght@300;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400&family=Martel+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <!-- JQUERY -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <title><?= $web ?> | <?= $title ?></title>
</head>

<body>
  <div class="fluid-container">
    <?php
    include 'navbar.php';
    ?>
    <!-- Back to top -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <ion-icon name="caret-up-outline"></ion-icon>
    </button>
    <!-- Akhir back to top -->

    <!-- Navbar -->
    <nav class="navbar navbar-dark sizeNav">
      <div class="button-toggler">
        <button class="navbar-toggler text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <i class="bi bi-list"></i>
          <span class="btn-kategori">
            Lihat Kategori
          </span>
        </button>
        <div class="offcanvas bg-dark offcanvas-start sideCanvas" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
              <a class="navbar-brand" href="index.php"><span class="color-change">IDO</span> BAUT</a>
            </h5>
            <button type="button" class="btn close-btn" data-bs-dismiss="offcanvas" aria-label="Close">X</button>
          </div>
          <div class="offcanvas-body bg-dark text-white">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <!-- Ambil Kategori Yang Ada -->
              <?php
              $categories = barang("SELECT DISTINCT kategori FROM data_barang");
              ?>
              <li>Kategori Barang</li>

              <?php foreach ($categories as $category) : ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?= $category['kategori'] ?>
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="offcanvasNavbarDropdown">
                  <?php $barang = barang("SELECT * FROM data_barang WHERE kategori = '$category[kategori]'"); ?>
                  <?php foreach ($barang as $brg) : ?>
                    <li>
                      
                      <form action="" method="POST">
                      <a href="#modal" data-id="<?= $brg['id_barang']; ?>" class="dataBarang dropdown-item"> <?= $brg['nama_barang']?> </a>
                    </li>
                  <?php endforeach; ?>
                    <!-- <li> -->
                </ul>
              <!-- </li> -->
              <?php endforeach; ?>
              
            <form class="d-flex" method="POST" action="">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword" value="<?= $value ?>">
              <button class="btn btn-outline-secondary" type="submit" name="cari">Search</button>
            </form>
          </div>
        </div>
      </div>
      <!-- Tombol Reset Filter -->
      <?php if(isset($_POST['cari'])) : ?>
        <a href="/the-ardianto-baut/product.php">Reset Filter</a>
        <?php endif ?>
    </nav>
    <!-- Akhir Navs -->
    
  </div>

  <?php ?>

  <!-- Article -->
  <div class="container-fluid card-container">
    <div class="row">
      <div class="product-title">
        <h2>Our Product</h2>
      </div>
      <div class="row wrapper-cards mb-4">
        <?php foreach ($data as $barang) : ?>
          <div class="col-lg-2 col-md-4 col-sm-2 cards-space mb-3">
            <a href="#modal" data-id="<?= $barang['id_barang']; ?>" class="dataBarang text-black text-decoration-none">
              <div class="cards card">
                <img src="./assets/function/img/<?= $barang['img']; ?>" class="card-img-top card-img" alt="...">
                <div class="card-body">
                  <h5 class="card-title product-judul"><?= $barang['nama_barang']; ?></h5>
                  <div class="info">
                    <p class="stok-product">Stok : <?= $barang['stok'] ?></p>
                    <p class="stok-product">Harga : <?= format_rupiah($barang['harga_barang']) ?></p>
                  </div>
                  <br>
                  <button data-id="<?= $barang['id_barang']; ?>" class="dataBarang btn btn-primary w-100">Detail Barang</button>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <script type='text/javascript'>
    $(document).ready(function() {
      $('.dataBarang').click(function() {
        var id = $(this).data('id');
        // alert(id)
        $.ajax({
          url: 'product-baut.php',
          type: 'post',
          data: {
            id: id
          },
          success: function(response) {
            $('.modal-body').html(response);
            $('#empModal').modal('show');
          }
        });
      });
    });
  </script>
  </div>
  <div class="modal fade" id="empModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detail Barang</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <a href="whatsapp:contact=015555555555@s.whatsapp.com&message=I'd like to chat with you" class="btn btn-success">Pesan</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Article -->

  <!-- Footer -->
  <div class="row">
    <?php
    include 'footer.php';
    ?>
  </div>
  <!-- Akhir Footer -->

  <!-- Unused Filter -->
  <!-- 
     <form action="" method="POST">
                          <input type="hidden" name="keyword" class="form-control" value="<?= $brg['kategori'] ?>">
                          <button type="submit"  name="cari" class="dropdown-item"><?= $brg['nama_barang']?></button>
                        </form>
   -->

  <!-- Option 2: Separate Popper and Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
  </script>

  <!-- Icon JS -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- AOS Animation -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Initialize AOS -->
  <script>
    AOS.init();
  </script>
</body>

</html>