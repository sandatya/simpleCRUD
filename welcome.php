<?php include 'header.php'; 
	include 'config.php';

?>
<br/>
<br/>
<div class="col-md-10">
	<h3>Hi, <b><?php echo $_SESSION['username']  ?></b>. Welcome to Our site.</h3>	
<br/>
</div>



<form>
	<div align="center">
		<a class="btn btn-warning" href="reset_pass.php">Reset Your Password</a>
		<a class="btn btn-danger" href="logout.php">Sign Out of Your Account</a>	
	</div>
</form>
<h3>User Details</h3>
<button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span> Add User</button>
<form>
	
	<br>
</form>
<table class="table table-hover">
	<tr>
		<th class="col-md-1">No</th>
		<th class="col-md-4">Nama</th>
		<th class="col-md-4">Email</th>
		<th class="col-md-3">Opsi</th>
	</tr>
	<?php 
	include 'koneksi_user_detail.php';
	$query=mysql_query("SELECT * FROM user_detail");
	
	$no=1;
	while($b=mysql_fetch_array($query)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['nama'] ?></td>
			<td><?php echo $b['email'] ?></td>
			<td>
				<a href="det_user.php?id_user=<?php echo $b['id_user']; ?>" class="glyphicon glyphicon-eye-open"></a>&nbsp;&nbsp;&nbsp;
				<a href="edit_user.php?id_user=<?php echo $b['id_user']; ?>" class="glyphicon glyphicon-pencil"></a>&nbsp;&nbsp;&nbsp;
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus.php?id_user=<?php echo $b['id_user']; ?>' }" class="glyphicon glyphicon-trash"></a>
			</td>
		</tr>		
		<?php 
	}
	?>
	<tr>
					
		
		</td>
	</tr>
</table>
<ul class="pagination">			
						
		</ul>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add New User</h4>
			</div>
			<div class="modal-body">
				<form action="add_user.php" method="post">
					<div class="form-group">
						<label>Nama</label>
						<input name="nama" type="text" class="form-control" placeholder="Nama User">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input name="email" type="text" class="form-control" placeholder="Email">
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>



<?php 
include 'footer.php';

?>