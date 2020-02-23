<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$kode_aktifasi = $_POST['kode_aktifasi'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$judul_skripsi = $_POST['judul_skripsi'];
$dosen_pem = $_POST['dosen_pem'];
$tanggal_lulus = $_POST['tanggal_lulus'];
$angkatan = $_POST['angkatan'];


$foto = $_FILES['pas_foto']['name'];
$tmp = $_FILES['pas_foto']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "file/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO tb_wisudawan VALUES('".$kode_aktifasi."', '".$nim."', '".$nama."', '".$jurusan."', '".$alamat."', '".$tempat_lahir."','".$tanggal_lahir."', '".$judul_skripsi."','".$dosen_pem."', '".$tanggal_lulus."','".$angkatan."', '".$fotobaru."')";
  $sql = mysqli_query($mysqli, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
