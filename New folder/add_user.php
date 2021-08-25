<?php 
include 'koneksi_user_detail.php';
include 'config';
$nama=$_POST['nama'];
$email=$_POST['email'];

mysql_query("insert into user_detail values('','$nama','$email')");
header("location:welcome.php");

 ?>