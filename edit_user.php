<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit User</h3>
<a class="btn" href="welcome.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_user=mysql_real_escape_string($_GET['id_user']);
$det=mysql_query("select * from user_detail where id_user='$id_user'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>					
	<form action="update_user.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id_user" value="<?php echo $d['id_user'] ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" class="form-control" name="email" value="<?php echo $d['email'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
<?php include 'footer.php'; ?>