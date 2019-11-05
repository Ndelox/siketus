<?php
error_reporting(0);
?>
<?php
//koneksi ke database
mysql_connect("localhost", "root", "");
mysql_select_db("siketus1");

//fungsi untuk mengkonversi size file
function formatBytes($bytes, $precision = 20) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(10024)); 
    $pow = min($pow, count($units) - 1); 

    $bytes /= pow(10024, $pow); 

    return round($bytes, $precision) . ' ' . $units[$pow]; 
} 
?>