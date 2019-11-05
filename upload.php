<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Upload dan Download File Tugas</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container">
    	<div id="header">
    		<h1>SIKeTuS V.1</h1>
            <h1>Sistem Informasi Kearsipan Tugas Sekolah</h1>
            <h1> SMKN HK Mayong Jepara</h1>
    </div>
        <div id="menu">
        	<a href="index.php">Beranda</a>
            <a href="upload.php" class="active">Upload Tugas</a>
            <a href="daftar_tugas.php">Daftar Tugas</a>
        </div>
        <div id="content">
        	<h2>Upload Tugas</h2>
            <p>Upload file Tugas Anda dengan melengkapi form di bawah ini. File yang bisa di Upload hanya file dengan ekstensi <b>.doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .zip</b> dan besar file (file size) maksimal hanya 2 MB.</p>           
            <?php
			include('config.php');
			if($_POST['upload']){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];

				$nama_siswa		= $_POST['nama_siswa'];
				$kelas			= $_POST['kelas'];
				$nama			= "$kelas"."_"."$nama_siswa";
				$tgl			= date("Y-m-d");
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 8888140){
						$lokasi = 'files/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysql_query("INSERT INTO arsip_tugas VALUES(NULL, '$tgl', '$nama_siswa','$kelas','$nama', '$file_ext', '$file_size', '$lokasi')");
						if($in){
							echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
						}else{
							echo '<div class="error">KESALAHAN: Gagal upload file!</div>';
						}
					}else{
						echo '<div class="error">KESALAHAN: Besar ukuran file (file size) maksimal 2 Mb!</div>';
					}
				}else{
					echo '<div class="error">KESALAHAN: Ekstensi file tidak di izinkan!</div>';
				}
			}
			?>
            
            <p>
            <form action="" method="post" enctype="multipart/form-data">
            <table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
            	<tr>
                	<td width="40%" align="right"><b>Nama Guru</b></td><td><b>:</b></td><td><input type="text" name="nama_siswa" required /></td>
                </tr>
            	<tr>
                	<td width="40%" align="right"><b>Jurusan</b></td><td><b>:</b></td><td><label for="select"></label>
                	  <select name="kelas" id="select">
                	    <option>-- Pilih Jurusan --</option>
                	    <option value="C1"> 3 RPL 1</option>
                	    <option value="C2">3 RPL 2</option>
                	    <option value="C3"> 3 RPL 3</option>
                	    
                	    
              	      </select></td>
                </tr>



                <tr>
                	<td width="40%" align="right"><b>Pilih File</b></td><td><b>:</b></td><td><input type="file" name="file" required /></td>
                </tr>
                <tr>
                	<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="upload" value="Upload" /></td>
                </tr>
            </table>
            </form>
            </p>
        </div>
        <div id="footer">
    		<p>Dikembangkan Oleh @ Guru & Siswa <strong>SMK HK Mayong Jepara</strong> - <?php echo date('Y');?></p>
    	</div>
    </div>

</body>
</html>