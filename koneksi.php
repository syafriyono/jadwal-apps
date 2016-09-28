<?php
$host="localhost";
$user="root";
$password="";
$db="jadwal";

$konekdb=mysql_connect($host,$user,$password);
if(! $konekdb){
echo ("gagal koneksi".mysql_error());
}
mysql_select_db($db,$konekdb)or die("databasenya gak ada".mysql_error());
?>