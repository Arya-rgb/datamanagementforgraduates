<?php

include "koneksi.php";
$query = mysqli_query($mysqli,"SELECT * FROM tb_mahasiswa ORDER BY nim DESC");
?>
<link rel="stylesheet" type="text/css" href="styletable.css"/>
<div class="judul">
<h1>DATA MAHASISWA</h1>
<h2>STMIK BANDUNG</h2>
<h3><a href="index.php">Home</a></h3>
</div>
<form action="" method="post">
    
    <table border="1" class="table">
    <tr>
        <th>NO</th>
        <th>Tahun Angkatan</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>JURUSAN</th>
        <th>ALAMAT</th>
        <th>TEMPAT LAHIR</th>
        <th>TANGGAL LAHIR</th>
        <th>JUDUL SKRIPSI</th>
        <th>DOSEN PEMBINGBING</th>
        <th>TAHUN KELULUSAN</th>
        
    </tr>
    <?php if(mysqli_num_rows($query)>0){ ?>
    <?php 
        $no = 1;
        while($data = mysqli_fetch_array($query)) {
        ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data["tahun_angkatan"];?></td>
        <td><?php echo $data["nim"];?></td>
        <td><?php echo $data["nama"];?></td>
        <td><?php echo $data["jurusan"];?></td>
        <td><?php echo $data["alamat"];?></td>
        <td><?php echo $data["tempat_lahir"];?></td>
        <td><?php echo $data["tanggal_lahir"];?></td>
        <td><?php echo $data["judul_skripsi"];?></td>
        <td><?php echo $data["dosen_pem"];?></td>
        <td><?php echo $data["tanggal_lulus"];?></td>
        
    </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
