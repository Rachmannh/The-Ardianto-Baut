<?php
include './assets/function/functions.php';

$title = 'Contact';

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

  <title><?= $web ?> | <?= $title ?></title>
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

  <!-- Maps -->
  <section class="maps">
    <div class="container">
    <h1 class="heading mt-5">
        Our Location
      </h1>
       <!-- Maps -->
       <div data-aos="fade-up" data-aos-duration="1000">
  <div class="col">
    <div class="p-3">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d807.0162237961207!2d106.63585352915426!3d-6.178084066404299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f8d6b838a779%3A0x4d53a6eab0d615cb!2sJl.%20Ir.%20Sutami%2C%20RT.004%2FRW.014%2C%20Sukasari%2C%20Kec.%20Tangerang%2C%20Kota%20Tangerang%2C%20Banten%2015118!5e1!3m2!1sen!2sid!4v1647539785069!5m2!1sen!2sid" width="100%" height="450" class="maps" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
  </div>
  <!-- End of Maps -->
    </div>
  </section>
  <!-- End -->

  <!-- Contact Form -->
  <section class="contact-form">
    <div class="container">
    <div data-aos="flip-up" data-aos-duration="2000">
    <h1 class="heading">
        Contact Form
      </h1>
      </div>

<div class="container">

<div data-aos="zoom-in" data-aos-duration="2500">
  <!-- Contact Form -->
  <div class="contact-form col">
    <div style="margin-top: -50px;">
      <!-- Form -->
      <section class="contacts">
        <div class="parent container"> 
          <div class="my-alerts alert alert-success alert-dismissible d-none fade show" role="alert">
            <strong>Terimakasih!!</strong> Pesan anda sudah kami terima.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <br>
          <br>
          <form name="ardianto-baut-contact-form">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="name" class="form-control" id="name" aria-describedby="name" name="nama" required>
            </div>
            <div class="mb-3">
              <label for="whatsapp" class="form-label">Whatsapp</label>
              <input type="whatsapp" class="form-control" id="whatsapp" name="whatsapp" required>
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="4" name="pesan" required></textarea>
            </div>
            <button type="submit" class="btn btn-danger btn-kirim">Submit</button>
            <button class="btn btn-danger btn-loading d-none" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Loading...
            </button>
          </form>
        </section> 
<!-- End of Form -->
    </div>
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

    <!-- Form Initialize -->
    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbxTb2fDkelKw490OcJNce5FEnda-OdmMfurpEmtKMNdCtk8x_xaDa2oRJ6WI17vTIR3hA/exec'
      const form = document.forms['ardianto-baut-contact-form']
      const btnKirim = document.querySelector('.btn-kirim');
      const btnLoading = document.querySelector('.btn-loading');
      const myAlerts = document.querySelector('.my-alerts')
    
      form.addEventListener('submit', e => {
        e.preventDefault()
        // Ketika tombol submit di klik
        // Tampilkan tombol loading, Hilangkan tombol kirim
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
          .then(response => {
            // Tampilkan tombol kirim, Hilangkan tombol loading
            btnLoading.classList.toggle('d-none');
            btnKirim.classList.toggle('d-none');
            // Tampilkan alert
            myAlerts.classList.toggle('d-none');
            // Reset formnya
            form.reset();
            console.log('Success!', response)
          })
          .catch(error => console.error('Error!', error.message))
      })
    </script>
    <!-- End -->

    <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 500px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

  <!-- AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
  AOS.init();
</script>

  <!-- Icon JS -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>
</html>
