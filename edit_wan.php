<?php
// include database connection file
include_once("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['updates']))
{   
    $kode_aktifasi=$_POST['kode_aktifasi'];
    $nama = $_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $alamat=$_POST['alamat'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $judul_skripsi=$_POST['judul_skripsi'];
    $dosen_pem=$_POST['dosen_pem'];
    $tanggal_lulus=$_POST['tanggal_lulus'];
    $angkatan=$_POST['angkatan'];
    $ktp=$_POST['ktp'];
    $ijasah_akhir=$_POST['ijasah_akhir'];
    $pas_foto=$_POST['pas_foto'];
    // update user data
    $result = mysqli_query($mysqli, "UPDATE tb_wisudawan SET kode_aktifasi='$kode_aktifasi',nama='$nama',jurusan='$jurusan',alamat='$alamat',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',judul_skripsi='$judul_skripsi',dosen_pem='$dosen_pem',tanggal_lulus='$tanggal_lulus',angkatan='$angkatan',ktp='$ktp',ijasah_akhir='$ijasah_akhir',pas_foto='$pas_foto' WHERE kode_aktifasi=$kode_aktifasi");

    // Redirect to homepage to display updated user in list
    header("Location:tampil6_wan.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kode_aktifasi = $_GET['kode_aktifasi'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_wisudawan WHERE kode_aktifasi=$kode_aktifasi");

while($user_data = mysqli_fetch_array($result))
{
    $kode_aktifasi = $user_data['kode_aktifasi'];
    $nama = $user_data['nama'];
    $jurusan = $user_data['jurusan']; 
    $alamat = $user_data['alamat'];
    $tempat_lahir = $user_data['tempat_lahir'];
    $tanggal_lahir = $user_data['tanggal_lahir'];
    $judul_skripsi = $user_data['judul_skripsi'];
    $dosen_pem = $user_data['dosen_pem'];
    $tanggal_lulus = $user_data['tanggal_lulus'];
    $angkatan = $user_data['angkatan'];
    $ktp = $user_data['ktp'];
    $ijasah_akhir = $user_data['ijasah_akhir'];
    $pas_foto = $user_data['pas_foto'];

}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

<body>
      <div class="box-form">
    <a href="form_wisudawan.php">Kembali</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit_wan.php">
        <table border="0">
            <h1>Edit Data Wisudawan</h1>
            <tr> 
                <td>NAMA</td>
                <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
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
                <td>TEMPAT LAHIR</td>
                <td><input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir;?>"></td>
            </tr>
            <tr> 
                <td>TANGGAL LAHIR</td>
                <td><input type="text" name="tanggal_lahir" value="<?php echo $tanggal_lahir;?>"></td>
            </tr>
             <tr> 
                <td>JUDUL SKRIPSI</td>
                <td><input type="text" name="judul_skripsi" value="<?php echo $judul_skripsi;?>"></td>
            </tr>
            <tr> 
                <td>DOSEN PEMBINGBING</td>
                <td><input type="text" name="dosen_pem" value="<?php echo $dosen_pem;?>"></td>
            </tr>
            <tr> 
                <td>TANGGAL LULUS</td>
                <td><input type="text" name="tanggal_lulus" value="<?php echo $tanggal_lulus;?>"></td>
            </tr>
             <tr> 
                <td>ANGKATAN</td>
                <td><input type="text" name="angkatan" value="<?php echo $angkatan;?>"></td>
            </tr>
             <tr> 
                <td>FILE KTP</td>
                <td><input type="file" name="ktp" value="<?php echo $ktp;?>"></td>
            </tr>
             <tr> 
                <td>FILE IJASAH</td>
                <td><input type="file" name="ijasah_akhir" value="<?php echo $ijasah_akhir;?>"></td>
            </tr>
             <tr> 
                <td>PAS FOTO</td>
                <td><input type="file" name="pas_foto" value="<?php echo $pas_foto;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="kode_aktifasi" value=<?php echo $_GET['kode_aktifasi'];?>></td>
                <td><input type="submit" name="updates" value="Update"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>