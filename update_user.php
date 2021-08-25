<?php 
include 'config.php';
include 'koneksi_user_detail.php';
$id_user=$_POST['id_user'];
$nama=$_POST['nama'];
$email=$_POST['email'];
mysql_query("update user_detail set nama='$nama', email='$email' where id_user='$id_user'");
header("location:welcome.php");

?>