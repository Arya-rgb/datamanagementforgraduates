<?php

include "koneksi.php";
$result = mysqli_query($mysqli,"SELECT * FROM tb_wisudawan ORDER BY kode_aktifasi DESC");
?>
 <link rel="stylesheet" type="text/css" href="styletable.css"/>

<div class="judul">
    <a href="index.php">Home</a>
<h1>DATA WISUDAWAN</h1>
<h2>STMIK BANDUNG</h2>
<h3><a href="tampil4.php">Aktifasi Data Wisudawan Kembali</a></h3>
</div>
<body>
    <table border="1" class="table">
    <tr>  
        <th>KODE AKTIFASI</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>JURUSAN</th>
        <th>ALAMAT</th>
        <th>TEMPAT LAHIR</th>
        <th>TANGGAL LAHIR</th>
        <th>JUDUL SKRIPSI</th>n
        <th>DOSEN PEMBINGBING</th>
        <th>TANGGAL KELULUSAN</th>
        <th>ANGKATAN</th>
        <th>KTP</th>
        <th>IJASAH AKHIR</th>
        <th>PAS FOTO</th>
        <th>ACTION</th>
    </tr>
    
        <?php  
    while($user_data = mysqli_fetch_array($result)) {  
    echo "<tr>";        
    echo "<td>".$user_data['kode_aktifasi']."</td>";
    echo "<td>".$user_data['nim']."</td>";
    echo "<td>".$user_data['nama']."</td>";
    echo "<td>".$user_data['jurusan']."</td>";
    echo "<td>".$user_data['alamat']."</td>";
    echo "<td>".$user_data['tempat_lahir']."</td>";
    echo "<td>".$user_data['tanggal_lahir']."</td>";
    echo "<td>".$user_data['judul_skripsi']."</td>";
    echo "<td>".$user_data['dosen_pem']."</td>";
    echo "<td>".$user_data['tanggal_lulus']."</td>";
    echo "<td>".$user_data['angkatan']."</td>";
    echo "<td>".$user_data['ktp']."</td>";
    echo "<td>".$user_data['ijasah_akhir']."</td>";
    echo "<td>".$user_data['pas_foto']."</td>";
    echo "<td><a href='form_alumni.php?kode_aktifasi=$user_data[kode_aktifasi]'>Validsi</a></td></tr>";
         
    }
    ?>
</table>
    </body>