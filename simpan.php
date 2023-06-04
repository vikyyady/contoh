<?php
include 'connection.php';

if (isset($_POST['Submit'])) {
    
$npm            = $_POST['npm'];
$nama           = $_POST['nama'];
$jurusan        = $_POST['jurusan'];
$tempatLahir    = $_POST['tempatLahir'];
$tanggalLahir   = $_POST['tanggalLahir'];
$jenisKelamin   = $_POST['jenisKelamin'];
$alamat         = $_POST['alamat'];
$telepon        = $_POST['telepon'];
$email          = $_POST['email'];

$result = mysqli_query($con, "INSERT INTO mahasiswa(npm,nama,jurusan,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat,telepon,email) VALUES('$npm','$nama','$jurusan','$tempatLahir','$tanggalLahir','$jenisKelamin','$alamat','$telepon','$email')");

header('location: tampil.php');
}
?>
