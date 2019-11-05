<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Upload dan Download File Tugas Diklat 2019</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="container">
    	<div id="header">
    		<h1>SIKeTuS V.1</h1>
    		<h1>Sistem Informasi Kearsipan Tugas Diklat</h1>
            <h1> SMK Hasan Kafrawi </h1>
    </div>
        <div id="menu">
        	<a href="index.php" class="active">Beranda</a>
            <a href="upload.php">Upload Tugas</a>
            <a href="daftar_tugas.php">Daftar Tugas</a>
        </div>
        <div id="content">
        	<h2>Beranda</h2>
            <p>Selamat Datang!di   <strong>SIKeTuS V.1</strong></p>
      <p>Sistem Informasi Kearsipan Tugas sekolah  <strong>SIKeTuS V.1</strong>  ini dibuat oleh admin <strong> SMK  </strong>.       
      <p align="center"><img src="img/logo.png" width="70"  height="55"></p>        </div>
        <div id="footer">
    		<p>Dikembangkan Oleh Siswa Siswi <strong> SMK Hasan Kafrawi 2019 </strong> - <?php echo date('Y');?></p>
    	</div>
    </div>
</body>
</html>