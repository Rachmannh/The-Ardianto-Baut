<!-- Navbar -->
<?php
// include './assets/function/functions.php';
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php"><span class="color-change">IDO</span> BAUT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if($title == 'Home'){ echo 'active';} ?>" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($title == 'About'){ echo 'active';} ?>" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($title == 'Products'){ echo 'active';} ?>" href="product.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($title == 'Contact'){ echo 'active';} ?>" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->