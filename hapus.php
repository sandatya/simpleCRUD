<?php 
include 'config.php';
include 'koneksi_user_detail.php';
$id=$_GET['id_user'];
mysql_query("delete from user_detail where id_user='$id'");
header("location:welcome.php");

?>