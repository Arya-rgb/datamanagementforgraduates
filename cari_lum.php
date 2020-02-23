<?php
include 'koneksi.php';
?>


<link rel="stylesheet" type="text/css" href="styletable.css"/>

<div class="judul">
<a href="index.php">HOME</a>
<h1>DATA ALUMNI</h1>
<h2>STMIK BANDUNG</h2>
</div>
    <br>
<form action="cari_lum.php" method="get">
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
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($mysqli, "select * from tb_alumni where nama like '%".$cari."%'");				
	}else{
		$data = mysqli_query($mysqli,"select * from tb_alumni");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['angkatan']; ?></td>
        <td><?php echo $d['tanggal_lulus']; ?></td>
        <td><?php echo $d['nim']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['jurusan']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['bekerja']; ?></td>
        <td><?php echo $d['nama_perusahaan']; ?></td>
        <td><?php echo $d['alamat_perusahaan']; ?></td>
        <td><?php echo $d['bagian']; ?></td>
        }
        
	</tr>
	<?php } ?>
</table>