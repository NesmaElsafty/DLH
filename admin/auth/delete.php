<?php 

require_once '../connect.php';
// error_reporting(0);
	session_start();

if (isset($_SESSION['auth'])) {

	if (isset($_GET['id'])) {

		$id = $_GET['id'];		
		$sql = "DELETE FROM users WHERE id='".$id."'";
		$delete = mysqli_query($connect,$sql);

		if ($delete) {
			echo 'Deleted';
			header('location:users.php');
		}else{
			echo "failed to Delete";
		}
	}
}else{
	header('location:../index.php');
}
?>