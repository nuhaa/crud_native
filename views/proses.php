<?php
	if (!empty($_REQUEST['status']=='edit')) {
		$id    = $_REQUEST['id'];
		$query = mysqli_query($jembatan,"select * from crud_native where id='$id'");
		$row   = mysqli_fetch_array($query);
	}
?>
<form action="?crud_native=action" method="POST">
	<div class="row">
		<div class="col-md-4" style="margin-top:-20px">
		    <div class="md-form">
		        <input type="text" id="nama" name="nama" value="<?= $row['nama'] ?>" class="form-control" placeholder="Nama Lengkap" required="">
		    </div>
		</div>
		<div class="col-md-4" style="margin-top:-20px">
		    <div class="md-form">
		        <input type="text" id="username" name="username" value="<?= $row['uname'] ?>" class="form-control" placeholder="Username" required="">
		    </div>
		</div>
		<div class="col-md-4" style="margin-top:-20px">
		    <div class="md-form">
		        <input type="password" id="password" name="password" value="" class="form-control" placeholder="Password" >
		    </div>
		</div>
	</div>
	<br>
	<div class="px-4">
		<center>
			<?php
				if (!empty($_REQUEST['id'])) {
				?>
			        <input type="hidden" id="id" name="id" value="<?= $id ?>" >
			        <input type="hidden" id="password_lama" name="password_lama" value="<?= $row['password'] ?>" >
					<button type="submit" id="edit" name="edit" class="btn btn-outline-secondary waves-effect btn-block">
		                <b>Edit</b>
		            </button>
				<?php
				}else{
				?>
					<button type="submit" id="simpan" name="simpan" class="btn btn-outline-primary waves-effect btn-block">
		                <b>Simpan</b>
		            </button>				
				<?php
				}
			?>
		</center>
	</div>
</form>