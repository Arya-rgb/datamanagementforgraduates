<?php

include "koneksi.php";
$query = mysqli_query($mysqli,"SELECT * FROM tb_alumni ORDER BY kode_aktifasi DESC");
?>

<link rel="stylesheet" type="text/css" href="styletable.css"/>
<div class="judul">
<h3><a href="index.php">Home</a></h3>
<h1>DATA ALUMNI</h1>
<h2>STMIK BANDUNG</h2>
<h3><a href="tampil8_wan.php">Validasi Lagi</a></h3>
</div>
<form action="" method="post">
    
    <table border="1" class="table">
    <tr>
        <th>NO</th>
        <th>ANGKATAN</th>
        <th>TANGGAL LULUS</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>JURUSAN</th>
        <th>ALAMAT</th>
        <th>STATUS KERJA</th>
        <th>NAMA PERUSAHAAN</th>
        <th>ALAMAT PERUSAHAAN</th>
        <th>BAGIAN</th>
        
    </tr>
    <?php if(mysqli_num_rows($query)>0){ ?>
    <?php 
        $no = 1;
        while($data = mysqli_fetch_array($query)) {
        ?>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $data["angkatan"];?></td>
        <td><?php echo $data["tanggal_lulus"];?></td>
        <td><?php echo $data["nim"];?></td>
        <td><?php echo $data["nama"];?></td>
        <td><?php echo $data["jurusan"];?></td>
        <td><?php echo $data["alamat"];?></td>
        <td><?php echo $data["bekerja"];?></td>
        <td><?php echo $data["nama_perusahaan"];?></td>
        <td><?php echo $data["alamat_perusahaan"];?></td>
        <td><?php echo $data["bagian"];?></td>
        
    </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
