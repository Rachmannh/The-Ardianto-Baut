<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./assets/img/logo.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/responsive.css">

  <!-- Animation -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Font -->
  <link
    href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500&family=Hind+Madurai:wght@300;400&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Habibi&family=Hind+Madurai:wght@300;400&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400&family=Martel+Sans:wght@300;400;600;700&display=swap"
    rel="stylesheet">

  <!-- Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <title>Ido Baut</title>
  </head>
  <body>
      
     <!-- Navbar -->
  <?php
  include 'navbar.php';
  ?>
  <!-- Akhir Navbar -->

  <!-- Back to top -->
  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <ion-icon name="caret-up-outline"></ion-icon>
  </button>
  <!-- Akhir back to top -->

  <!-- Konten -->

  <!-- Header -->
<header class="contact-header text-center py-5 mb-4">
  <div class="container">
    <h1 class="heading-text fw-light text-white">Kontak Kami</h1>
  </div>
</header>

<!-- Page Content -->
<section class="Content">

<!-- Card 1 -->
<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center mt-3">
                        <div class="icon"> <img src="./assets/img/location.png" alt="geo-alt"> </div>
                        <div class="ms-2 c-details">
                            <h6 class="heading mb-0">Location</h6>
                        </div>
                    </div>
                </div>
                <div class="mt-5 mb-3">
                    <h3 class="sub-heading">Jl Sukabakti 2<br>No.5 RT/RW 005/010</h3>
                </div>
            </div>
        </div>
        <!-- End of Card 1 -->

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center mt-3">
                        <div class="icon"> <img src="./assets/img/phone.png" alt="phone"> </div>
                        <div class="ms-2 c-details">
                            <h6 class="heading mb-0">Phone</h6>
                        </div>
                    </div>
                </div>
                <div class="mt-5 mb-3">
                    <h3 class="sub-heading">0812842334756 <br> 0812384731232</h3>
                </div>
            </div>
        </div>
        <!-- End of Card 2 -->

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center mt-3">
                        <div class="icon"> <img src="./assets/img/envelope.png" alt="envelope"> </div>
                        <div class="ms-2 c-details">
                            <h6 class="heading mb-0">Email</h6>
                        </div>
                    </div>
                </div>
                <div class="mt-5 mb-3">
                    <h3 class="sub-heading">Alchemistbaut@gmail.com <br> idobaut@gmail.com</h3>
                </div>
            </div>
        </div>
        <!-- End of Card 3 -->
        </div>
    </div>
</div>
</section>
  <!-- Akhir Konten -->

  <!-- Contact Form -->
  <section class="contact-form">
    <div class="container">
    <h1 class="heading">
        Contact Form
      </h1>
<div class="row gx-3 gx-xxl-5">

  <!-- Maps -->
  <div class="left-card col">
    <div class="p-3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d807.0162237961207!2d106.63585352915426!3d-6.178084066404299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f8d6b838a779%3A0x4d53a6eab0d615cb!2sJl.%20Ir.%20Sutami%2C%20RT.004%2FRW.014%2C%20Sukasari%2C%20Kec.%20Tangerang%2C%20Kota%20Tangerang%2C%20Banten%2015118!5e1!3m2!1sen!2sid!4v1647539785069!5m2!1sen!2sid" width="100%" height="450" class="maps" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
  <!-- End of Maps -->

  <!-- Right Card -->
  <div class="right-card col">
    <div class="p-3">
      <!-- End of Right Card -->

      <!-- Form -->
    <form>
    <!-- Fullname -->
  <div class="form-floating mb-3">
    <input type="fullname" id="floatingInput" class="form-control" placeholder="Masukan Nama Lengkap" required>
    <label for="fullname" class="form-label">Nama Lengkap</label>
  </div>
  <!-- End of Fullname -->

  <!-- Email -->
  <div class="form-floating mb-3">
    <input type="email" id="floatingInput" class="form-control" placeholder="Masukan Email Aktif Anda" required>
    <label for="exampleInputEmail1" class="form-label">Email</label>
  </div>
  <!-- End of Email -->

  <!-- Phone Number -->
      <div class="form-floating mb-3">
        <input type="phone" id="floatingInput" class="form-control" placeholder="Masukan Nomor Telfon" required>
        <label for="phone" class="form-label">Nomor Telfon</label>
      </div>
  <!-- End of Phone Number -->

  <!-- Message -->
  <div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 130px" required></textarea>
  <label for="floatingTextarea2">Message</label>
  </div>
  <!-- End of Message -->

  <button type="submit" class="btn btn-submit">Submit</button>
</form>
<!-- End of Form -->
    </div>
  </div>
</div>
    </div>
  </section>
  <!-- Akhir Kontak Form -->

  <!-- Footer -->
  <div class="container-footer row mt-5">
      <?php
      include 'footer.php';
      ?>
    </div>
    <!-- Akhir Footer -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>
</html>