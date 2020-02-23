 <?php
                include "koneksi.php";
                if(isset($_POST['simpanses'])){
                    $simpanses = mysqli_query ($mysqli,  "INSERT INTO tb_alumni VALUES
                   ('".$_POST['kode_aktifasiss']."',
                    '".$_POST['angkatan']."',
                    '".$_POST['tanggal_lulus']."',
                    '".$_POST['nim']."',
                    '".$_POST['nama']."',
                    '".$_POST['jurusan']."',
                    '".$_POST['alamat']."',
                    '".$_POST['bekerja']."',
                    '".$_POST['nama_perusahaan']."',
                    '".$_POST['alamat_perusahaan']."',
                    '".$_POST['bagian']."'  
                    '')");
                    if($simpanses){
                        echo "<script>window.alert('Data Anda Sudah Di Simpan... !, Klik ok untuk melihat table'); window.location=('tampil_lum.php')</script>"; 
                    }else{
                        echo "<script>window.alert('Data Telah Di Validasi, Cek Di table, klik ok untuk melihat table'); window.location=('tampil_lum.php')</script>"; 
                    }
                    }
                   
            ?>
<?php

$kode_aktifasi = $_GET['kode_aktifasi'];



$result = mysqli_query($mysqli, "SELECT * FROM tb_wisudawan WHERE kode_aktifasi=$kode_aktifasi");

while($user_data = mysqli_fetch_array($result))
{
    $tahun_angkatan = $user_data['kode_aktifasi'];
    $nim = $user_data['nim'];
    $nama = $user_data['nama']; 
    $jurusan = $user_data['jurusan'];
    $alamat = $user_data['alamat'];
    $tempat_lahir = $user_data['tempat_lahir'];
    $tanggal_lahir = $user_data['tanggal_lahir'];
    $judul_skripsi = $user_data['judul_skripsi'];
    $dosen_pem = $user_data['dosen_pem'];
    $tanggal_lulus = $user_data['tanggal_lulus'];
    $angkatan = $user_data['angkatan'];
}
?>
<html>
<head>  
    <title>Form Alumni</title>
</head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

<body>
      <div class="box-form">
    
    <br/><br/>

    <form name="update_user" method="post" action="form_alumni.php">
        <table border="0">
            <a href="index.php">Home</a>
            <h1>Form alumni</h1>
            <tr> 
                <td></td>
                <td><input type="hidden" name="kode_aktifasiss" value="<?php echo $kode_aktifasi;?>" readonly ></td>
            </tr>
            <tr> 
                <td>ANGKATAN</td>
                <td><input type="text" name="angkatan" value="<?php echo $angkatan;?>" readonly required></td>
            </tr>
            <tr> 
                <td>TANGGAL KELULUSAN</td>
                <td><input type="text" name="tanggal_lulus" value="<?php echo $tanggal_lulus;?>" readonly required placeholder="Aktifasi Di form mahasiswa"></td>
            </tr>
             <tr> 
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $nim;?>"readonly required placeholder="Aktifasi Di form mahasiswa"></td>
            </tr>
            <tr> 
                <td>NAMA</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"readonly required placeholder="Aktifasi Di form mahasiswa"></td>
            </tr>
            <tr> 
                <td>JURUSAN</td>
                <td><input type="text" name="jurusan" value="<?php echo $jurusan;?>"></td>
            </tr>
             <tr> 
                <td>ALAMAT</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
            </tr> 
            <tr>
            <td>STATUS KERJA</td>
           <td><select type="option" id="kerja" name="bekerja" onchange="test()">
	        			<option value="belum">Belum</option>
	        			<option value="kerja">Kerja</option>
	        		</select></td>
           </tr>
            
            <tr> 
                <td>NAMA PERUSAHAAN</td>
                <td><input type="text" name="nama_perusahaan" id="nmper" class="text" disabled="" ></td>
            </tr>
             <tr> 
                <td>ALAMAT PERUSAHAAN</td>
                <td><input type="text" name="alamat_perusahaan" id="alper" class="text" disabled="" ></td>
            </tr>
            <tr>
                <td>BAGIAN</td>
                <td><input type="text" name="bagian" class="text" id="bagper" disabled="" ></td>
            </tr>
            
            <tr>
                <td><input type="hidden" name="kode_aktifasi" value="<?php echo $_GET['kode_aktifasi']?>"></td>
                <td><input type="submit" name="simpanses" value="SIMPAN DATA"></td>
            </tr>
            <tr>
                
                <td><a href="cari_lum.php">PENCARIAN</a></td>
                
            </tr>
        </table>
    </form>
    </div>
</body>
<script>
    function test()
    {
        var kerja = document.getElementById('kerja').value;
        var alper = document.getElementById('alper');
        var nmper = document.getElementById('nmper');
        var bagper = document.getElementById('bagper');
        if (kerja == kerja){
            alper.disabled = false;
            nmper.disabled = false;
            bagper.disabled = false;
        } else {
            alper.disabled = true;
            nmper.disabled = true;
            bagper.disabled = true;
        }
    }
</script>
</html>