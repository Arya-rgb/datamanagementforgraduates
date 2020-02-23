 <?php
                include "koneksi.php";
                if(isset($_POST['simpanse'])){
                    $simpanse = mysqli_query ($mysqli,  "INSERT INTO tb_wisudawan VALUES
                   ('".$_POST['kode_aktifasis']."',
                    '".$_POST['nim']."',
                    '".$_POST['nama']."',
                    '".$_POST['jurusan']."',
                    '".$_POST['alamat']."',
                    '".$_POST['tempat_lahir']."',
                    '".$_POST['tanggal_lahir']."',
                    '".$_POST['judul_skripsi']."',
                    '".$_POST['dosen_pem']."',
                    '".$_POST['tanggal_lulus']."',
                    '".$_POST['angkatan']."',
                    '".$_POST['ktp']."',
                    '".$_POST['ijasah_akhir']."',
                    '".$_POST['pas_foto']."'
                    '')");
                
                    if($simpanse){
                        echo "<script>window.alert('Data Anda Sudah Di Simpan... !, Klik ok untuk melihat table'); window.location=('tampil8_wan.php')</script>"; 
                    }else{
                        echo "<script>window.alert('Data Telah Di aktifasi, Cek Di table, klik ok untuk melihat table'); window.location=('tampil8_wan.php')</script>"; 
                    }
                    }
                   
            ?>			
<?php

$tahun_angkatan = $_GET['tahun_angkatan'];
$nim = $_GET['nim'];


!$result = mysqli_query($mysqli, "SELECT * FROM tb_mahasiswa WHERE tahun_angkatan=$tahun_angkatan and nim=$nim");

while($user_data = mysqli_fetch_array($result))
{
    $tahun_angkatan = $user_data['tahun_angkatan'];
    $nim = $user_data['nim'];
    $nama = $user_data['nama']; 
    $jurusan = $user_data['jurusan'];
    $alamat = $user_data['alamat'];
    $tempat_lahir = $user_data['tempat_lahir'];
    $tanggal_lahir = $user_data['tanggal_lahir'];
    $judul_skripsi = $user_data['judul_skripsi'];
    $dosen_pem = $user_data['dosen_pem'];
    $tanggal_lulus = $user_data['tanggal_lulus'];

}
?>
<html>
<head>  
    <title>Form Wisudawan</title>
</head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

<body>
      <div class="box-form">
    
    <br/><br/>

    <form name="update_user" method="post" action="form_wisudawan.php"  >
        <table border="0">
            <a href="index.php">Home</a>
            <h1>Form Wisudawan</h1>
            <tr> 
                <td>KODE AKTIFASI</td>
                <td><input type="text" name="kode_aktifasis" value="<?php echo $tahun_angkatan;?>.<?php echo $nim;?>" readonly required></td>
            </tr>
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $nim;?>" readonly required></td>
            </tr>
            <tr> 
                <td>NAMA</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>" readonly required placeholder="Aktifasi Di form mahasiswa"></td>
            </tr>
             <tr> 
                <td>JURUSAN</td>
                <td><input type="text" name="jurusan" value="<?php echo $jurusan;?>"readonly required placeholder="Aktifasi Di form mahasiswa"></td>
            </tr>
            <tr> 
                <td>ALAMAT</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat;?>"readonly required placeholder="Aktifasi Di form mahasiswa"></td>
            </tr>
            <tr> 
                <td>TEMPAT LAHIR</td>
                <td><input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir;?>"readonly></td>
            </tr>
             <tr> 
                <td>TANGGAL LAHIR</td>
                <td><input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>"readonly required placeholder="Aktifasi Di form mahasiswa"></td>
            </tr>
            <tr> 
                <td>JUDUL SKRIPSI</td>
                <td><input type="text" name="judul_skripsi" value="<?php echo $judul_skripsi;?>"readonly required placeholder="Aktifasi Di form mahasiswa"></td>
            </tr>
            <tr> 
                <td>DOSEN PEMBINGBING</td>
                <td><input type="text" name="dosen_pem" value="<?php echo $dosen_pem;?>"readonly required placeholder="Aktifasi Di form mahasiswa"></td>
            </tr>
             <tr> 
                <td>TANGGAL LULUS</td>
                <td><input type="date" name="tanggal_lulus" value="<?php echo $tanggal_lulus;?>"readonly required placeholder="Aktifasi Di form mahasiswa"></td>
            </tr>
            <tr>
                <td>ANGKATAN</td>
                <td><input type="text" name="angkatan" value="<?php echo $tahun_angkatan;?> " required ></td>
            </tr>
            <tr>
                <td>DATA YANG DI PERLUKAN</td>
            </tr>
            <tr>
                <td>FILE KTP(PDF)</td>
                <td><input type="file" name="ktp"  ></td>
            </tr>
            <tr>
                <td>IJASAH AKHIR(PDF)</td>
                <td><input type="file" name="ijasah_akhir"  ></td>
            </tr>
            <tr>
                <td>PAS PHOTO(JPEG)</td>
                <td><input type="file" name="pas_foto" required ></td>
            </tr>
            <tr>
                <td><input type="hidden" name="kode_aktifasi" value="<?php echo $_GET['tahun_angkatan'] and $_GET['nim'];?>"></td>
                <td><input type="submit" name="simpanse" value="SIMPAN DATA"></td>
            </tr>
            <tr>
                
                <td><a href="tampil7_wan.php">EXPORT TO EXCEL</a></td>
            <tr>
                <td><a href="tampil5_wan.php">HAPUS</a></td>
            <tr>   
                <td><a href="tampil6_wan.php">UBAH</a></td>
                <tr>
                <td><a href="tampil8_wan.php">VALIDASI</a></td>
            <tr>
                <td><a href="#">PENCARIAN</a></td>
                
            </tr>
        </table>
    </form>
    </div>
</body>
</html>