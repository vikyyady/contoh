<?php include 'template/header.php' ?>
<div class="container mt-4">
 <?php
 if (isset($_GET['page'])) {
 $page = $_GET['page'];
 switch ($page) {
 case 'show-mahasiswa':
 include "mahasiswa/show.php";
 break;
 case 'create-mahasiswa':
 include "mahasiswa/create.php";
 break;
 case 'profile':
 include "profile.php";
 break;
 default:
 include "home.php";
 break;
 }
 } else {
 include "home.php";
 }
 ?>
</div>
<?php include 'template/footer.php' ?>