<?php
include 'koneksi.php';
?>

<link rel="stylesheet" type="text/css" href="styletable.css"/>

<div class="judul">
<a href="index.php">HOME</a>
<h1>DATA MAHASISWA</h1>
<h2>STMIK BANDUNG</h2>
</div>
<br>
<br>
<form action="cari_mas.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<table border="1">
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
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($mysqli, "select * from tb_mahasiswa where nama like '%".$cari."%'");				
	}else{
		$data = mysqli_query($mysqli,"select * from tb_mahasiswa");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['tahun_angkatan']; ?></td>
        <td><?php echo $d['nim']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['jurusan']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['tempat_lahir']; ?></td>
        <td><?php echo $d['tanggal_lahir']; ?></td>
        <td><?php echo $d['judul_skripsi']; ?></td>
        <td><?php echo $d['dosen_pem']; ?></td>
        <td><?php echo $d['tanggal_lulus']; ?></td>
        
        
	</tr>
	<?php } ?>
</table>