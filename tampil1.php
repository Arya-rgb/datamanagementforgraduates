<?php

include "koneksi.php";
$result = mysqli_query($mysqli,"SELECT * FROM tb_mahasiswa ORDER BY nim DESC");
?>
 <link rel="stylesheet" type="text/css" href="styletable.css"/>

<div class="judul">
<h1>DATA CALON WISUDAWAN</h1>
<h2>STMIK BANDUNG</h2>
<h3><a href="form_mahasiswa.php">Kembali</a></h3>
</div>
<body>
    <br>

    <br>
    <br>
    <table border="1" class="table">
    <tr>
    
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
        <th>ACTION</th>
    </tr>
    
        <?php  
    while($user_data = mysqli_fetch_array($result)) {  
    echo "<tr>";        
    echo "<td>".$user_data['tahun_angkatan']."</td>";
    echo "<td>".$user_data['nim']."</td>";
    echo "<td>".$user_data['nama']."</td>";
    echo "<td>".$user_data['jurusan']."</td>";
    echo "<td>".$user_data['alamat']."</td>";
    echo "<td>".$user_data['tempat_lahir']."</td>";
    echo "<td>".$user_data['tanggal_lahir']."</td>";
    echo "<td>".$user_data['judul_skripsi']."</td>";
    echo "<td>".$user_data['dosen_pem']."</td>";
    echo "<td>".$user_data['tanggal_lulus']."</td>";
    echo "<td><a href='hapus.php?nim=$user_data[nim]'>Delete</a></td></tr>";
         
    }
    ?>
</table>
    </body>

        
