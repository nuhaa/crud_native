<?php
$nama     = addslashes(mysqli_real_escape_string($jembatan,$_POST['nama']));
$username = addslashes(mysqli_real_escape_string($jembatan,$_POST['username']));
$password = addslashes(mysqli_real_escape_string($jembatan,$_POST['password']));

if (isset($_POST['simpan'])) {
	$password = md5($password);
	$query    = mysqli_query($jembatan,"insert into crud_native 
											(nama,uname,password)
										values 
										    ('$nama','$username','$password')")
							or die(mysqli_error($jembatan));
	if ($query==TRUE) {
		echo "<script>window.location='?crud_native=home&flash=ok'</script>";
	}
}

if (isset($_POST['edit'])) {
	if ($password=='') {
		$password = addslashes(mysqli_real_escape_string($jembatan,$_POST['password_lama']));
	}else{
		$password = md5($password);
	}
	$id = addslashes(mysqli_real_escape_string($jembatan,$_POST['id']));
	$query    = mysqli_query($jembatan,"update crud_native set 
										       nama='$nama',
										       uname='$username',
										       password='$password'
										where id = '$id' ")
							or die(mysqli_error($jembatan));
	if ($query==TRUE) {
		echo "<script>window.location='?crud_native=home&flash=ok'</script>";
	}
}

if ($_GET['status'] == 'delete') {
	$id = $_GET['id'];
	$query = mysqli_query($jembatan,"delete from crud_native where id='$id'");
	if ($query==TRUE) {
		echo "<script>window.location='?crud_native=home&flash=ok'</script>";
	}
}