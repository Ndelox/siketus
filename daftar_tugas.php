<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple Upload dan Download File Tugas Sekolah</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="container">
    	<div id="header">
    		<h1>SIKeTuS V.1</h1>
            <h1>Sistem Informasi Kearsipan Tugas Sekolah</h1>
            <h1>SMK HK Mayong Jepara </h1>
    </div>
        
        <div id="menu">
        	<a href="index.php">Beranda</a>
            <a href="upload.php">Upload Tugas</a>
            <a href="daftar_tugas.php" class="active">Daftar Tugas</a>
        </div>
        
        <div id="content">
         <div id="pencarian">
           <form action="" method="post" target="_self">Tanggal 
             <label for="textfield"></label>
           <input type="date" name="textfield" id="textfield">
           Jurusan
           <select name="kelas">
             <option>-- Pilih Jurusan --</option>
           </select>
           Kriteria
   	  Nama File 
   	       <label for="nama"></label>
   	  <input type="text" name="nama" >
         <input type="submit" name="cari" id="cari" value="Cari">
           </p></form>
       </div>
        	<h2>Daftar Tugas</h2>
            <p>Silahkan download file yang sudah di Upload di website ini. Untuk men-Download Anda bisa mengklik Judul file yang di inginkan.</p>
            
            <p>
            <table class="table" width="100%" cellpadding="3" cellspacing="0">
            	<tr>
                	<th width="30">No.</th>
                    <th width="80">Tgl. Upload</th>
                    <th>Nama Guru</th>
                    <th width="50">Jurusan</th>
                    <th>Nama File Tugas</th>
                    <th width="50">Tipe</th>
                    <th width="70">Ukuran</th>
                </tr>
                <?php
				include('config.php');
				$sql = mysql_query("SELECT * FROM arsip_tugas ORDER BY id DESC");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center">'.$no.'</td>
							<td align="center">'.$data['tanggal_upload'].'</td>
							<td>'.$data['nama'].'</td>
							<td align="center">'.$data['kelas'].'</td>
							<td><a href="'.$data['file'].'">'.$data['nama_file'].'</a></td>
							<td align="center">'.$data['tipe_file'].'</td>
							<td align="center">'.formatBytes($data['ukuran_file']).'</td>
						</tr>
						';
						$no++;
					}
				}else{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="4" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				?>
            </table>
            </p>
        </div>
        <div id="footer">
    		<p>Dikembangkan Oleh @ Guru & Siswa <strong>SMK HK Mayong Jepara</strong> - <?php echo date('Y');?></p>
    	</div>
    </div>

</body>
</html>