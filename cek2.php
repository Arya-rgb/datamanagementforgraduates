<?php

include "koneksi.php";
$query = mysqli_query($mysqli,"SELECT * FROM tb_wisudawan ORDER BY kode_aktifasi DESC");
?>

<link rel="stylesheet" type="text/css" href="styletable.css"/>
<div class="judul">
<h1>DATA WISUDAWAN</h1>
<h2>STMIK BANDUNG</h2>
 <a href="index.php">home</a>
</div>
<form action="" method="post">
    <br>
    <table border="1" class="table">
    <tr>
        <th>NO</th>
        <th>KODE AKTIFASI</th>
        <th>NAMA</th>
        <th>JURUSAN</th>
        <th>ALAMAT</th>
        <th>TEMPAT</th>
        <th>TANGGAL LAHIRR</th>
        <th>JUDUL SKRIPSI</th>
        <th>DOSEN PEMBINGBING</th>
        <th>TAHUN KELULUSAN</th>
        <th>ANGKATAN</th>
        <th>KTP</th>
        <th>IJASAH AKHIR</th>
        <th>PAS FOTO</th>
        
    </tr>
    <?php if(mysqli_num_rows($query)>0){ ?>
    <?php 
        $no = 1;
        while($data = mysqli_fetch_array($query)) {
        ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data["kode_aktifasi"];?></td>
        <td><?php echo $data["nama"];?></td>
        <td><?php echo $data["jurusan"];?></td>
        <td><?php echo $data["alamat"];?></td>
        <td><?php echo $data["tempat_lahir"];?></td>
        <td><?php echo $data["tanggal_lahir"];?></td>
        <td><?php echo $data["judul_skripsi"];?></td>
        <td><?php echo $data["dosen_pem"];?></td>
        <td><?php echo $data["tanggal_lulus"];?></td>
        <td><?php echo $data["angkatan"];?></td>
        <td><?php echo $data["ktp"];?></td>
        <td><?php echo $data["ijasah_akhir"];?></td>
        <td><?php echo $data["pas_foto"];?></td>
        
    </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
