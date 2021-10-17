<?php 

require_once '../connect.php';
// error_reporting(0);
	session_start();

if (isset($_SESSION['auth'])) {

	if (isset($_GET['id'])) {

		$id = $_GET['id'];	

		$query = "SELECT * FROM data WHERE id='".$id."'";
		$result = mysqli_query($connect, $query);
		$get = mysqli_fetch_assoc($result);
		$title = $get['jobTitle'];
		$sql = "DELETE FROM data WHERE id='".$id."'";
		$delete = mysqli_query($connect,$sql);

		if ($delete) {
			// echo 'Deleted';
			header("location:show.php?title=$title");
		}else{
			echo "failed to Delete";
		}
	}elseif (isset($_GET['title'])) {
		$title = $_GET['title'];
		$sql = "DELETE FROM data WHERE jobTitle='".$title."'";
		$delete = mysqli_query($connect,$sql);

		if ($delete) {
			echo 'Deleted';
			header('location:index.php');
		}else{
			echo "failed to Delete";
		}
	}
}else{
	header('location:../index.php');
}
?>
