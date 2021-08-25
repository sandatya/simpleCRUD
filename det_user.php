<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail User</h3>
<a class="btn" href="welcome.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_user=mysql_real_escape_string($_GET['id_user']);


$det=mysql_query("select * from user_detail where id_user='$id_user'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>Nama</td>
			<td><?php echo $d['nama'] ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $d['email'] ?></td>
		</tr>
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>