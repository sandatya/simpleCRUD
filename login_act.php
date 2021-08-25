<?php 
session_start();
include 'config.php';
$username=$_POST['username'];
$pass=$_POST['password'];
$pas=md5($pass);
$query=mysql_query("select * from user where username='$username' and password='$pas'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	$_SESSION['username']=$username;
	header("location:welcome.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
}

 ?>