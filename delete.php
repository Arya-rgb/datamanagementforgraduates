<?php
// include database connection file
include "koneksi.php";

// Get id from URL to delete that user
$nim = $_GET['nim'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM tb_mahasiswa WHERE nim=$nim");

// After delete redirect to Home, so that latest user list will be displayed.
header("location:tampil1.php?pesan=hapus");
?>
