<?php
// include database connection file
include "koneksi.php";

// Get id from URL to delete that user
$kode_aktifasi= $_GET['kode_aktifasi'];

// Delete user row from table based on given id
$query = mysqli_query($mysqli, "DELETE FROM tb_wisudawan WHERE kode_aktifasi=$kode_aktifasi");

// After delete redirect to Home, so that latest user list will be displayed.
header("location:tampil6_wan.php?pesan=hapus");

?>
<h1>BERHASIL DI HAPUS></h1>
