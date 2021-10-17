<?php 

require_once '../connect.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (isset($_POST['update'])) {	
		$id = $_POST['id'];
		$newname = $_POST['newname'];
		$newemail = $_POST['newemail'];
		$newpassword = password_hash ($_POST['newpassword'], PASSWORD_DEFAULT);
		$name = $_SESSION['name'];
		// echo $name;
		$sql = "UPDATE users
					SET name='".$newname."', email='".$newemail."', password = '".$newpassword."'
					WHERE id='".$id."'";
		$update = mysqli_query($connect, $sql);
		if ($update) {
			echo 'Data Updated Successfully';
			$_SESSION['name'] = $newname;
			header("refresh:1;URL=profile.php?name=$newname");
		}else{
			echo 'Failed To update data';
		}

	}
}else{
	echo "u can't browes this page directly";
	// header("location:index");
}

?>