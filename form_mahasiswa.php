<html>
    <head>
    <title>Form Mahasiswa</title>
        
    <link rel="stylesheet" type="text/css" href="style.css"/>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
    </head>
    <body>
        <div class="box-form">
            <?php
                include "koneksi.php";
                if(isset($_POST['simpan'])){
                    $simpann = mysqli_query ($mysqli,  "INSERT INTO tb_mahasiswa VALUE
                    ('".$_POST['tahun_angkatan']."',
                    '".$_POST['nim']."',
                    '".$_POST['nama']."',
                    '".$_POST['jurusan']."',
                    '".$_POST['alamat']."',
                    '".$_POST['tempat_lahir']."',
                    '".$_POST['tanggal_lahir']."',
                    '".$_POST['judul_skripsi']."',
                    '".$_POST['dosen_pem']."',
                    '".$_POST['tanggal_lulus']."'     
                    '')");
                    if($simpann){
                        echo "<script>window.alert('Data Anda Sudah Di Simpan... !, Klik ok untuk input kembali'); window.location=('form_mahasiswa.php')</script>"; 
                    }else{
                        echo "<script>window.alert('NIM sudah di gunakan... !, Klik ok untuk input kembali'); window.location=('form_mahasiswa.php')</script>"; 
                    }
                    }
                   
            ?>
            <a href="index.php">Home</a>
            <h2>FORM MAHASISWA STMIK BANDUNG</h2>
        <form action="" method="post">
            <br>
            TAHUN ANGKATAN<br>
           <select type="option" name="tahun_angkatan">
	        			<option value="2018">2018</option>
	        			<option value="2019">2019</option>
                        <option value="2018">2020</option>
	        			<option value="2019">2021</option>
	        		</select><br>
            
            NIM<br>
             <input type="number" name="nim" required /><br>
            
            NAMA<br>
             <input type="text" name="nama" value="" /><br>
            
            JURUSAN<br>
            <select type="option" name="jurusan">
	        			<option value="Teknik Informatika">Teknik Informatika</option>
	        			<option value="Sistem Informasi">Sistem Informasi</option>
	        		</select><br>
            
            ALAMAT<br>
             <textarea name="alamat" rows="4" cols="40" required ></textarea><br>
            
            TEMPAT LAHIR<br>
             <input type="text" name="tempat_lahir" value="" /><br>
            
            TANGGAL LAHIR<br>
             <input type="date" name="tanggal_lahir" value="" /><br>
            
            JUDUL SKRIPSI<br>
             <input type="text" name="judul_skripsi" value="" /><br>
            
            NAMA DOSEN<br>
            <script>
            function ddlselect ()
            {
                var d=document.getElementById("ddselect");
                var displaytext=d.options[d.selectedIndex].text;
                document.getElementById("textvalue").value=displaytext;
                
            }
            </script>
             <select type="option" id="ddselect" onchange="ddlselect ();" >
	        			<option value="Uro Abdulrohim, MT">Uro Abdulrohim, MT</option>
	        			<option value="Yus Jayusman, MT">Yus Jayusman, MT</option>
	        			<option value="Rini Nuraini Sukmana, MT">Rini Nuraini Sukmana, MT</option>
	        			<option value="Mina Ismu Rahayu, MT">Mina Ismu Rahayu, MT</option>
	        			<option value="Indra Maulana YK, M.Kom">Indra Maulana YK, M.Kom</option>
                        <option value="Rudi Bambang Herdiana, M.kom">Rudi Bambang Herdiana, M.kom</option>
                        <option value="Siti Yulianti, M.K">Siti Yulianti, M.Kom</option>
	        		</select>
            
            <br>
            DOSEN PEMBINGBING<br>
             <input type="text" name="dosen_pem" id="textvalue"  readonly/><br> 
           
            TANGGAL LULUS<br>
            <input type="date" name="tanggal_lulus" value=""/><br>
            <br>
            <input type="submit" name="simpan" value="SIMPAN DATA CALON"/>
            
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="tampil1.php">HAPUS</a>
            <a href="tampil2.php">UBAH</a>
            <a href="tampil4.php">AKTIVASI</a>
            <a href="tampil3.php">EXPORT TO EXCEL</a>
            
            
            
            
            </form>
        </div>
    </body>
</html>