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
include 'template/header.php';
?>

<!-- Content -->
<div class="info-index text-center">
    <h3 class="">Dashboard Admin</h3>
    <h5 class="">Wellcome Admin</h5>
</div>
<!-- End Content -->

<?php include 'template/footer.php' ?>