<?php
require_once '../connect.php';

session_start();

// echo '<pre>';
// print_r($row);
// echo '</pre>';

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (isset($_POST['login'])) {
		$password = $_POST['password'];
		$sql = "SELECT * FROM users WHERE email = '".$_POST['email']."'";
		// die($sql);
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_assoc($result);

		if ($row['name'] == $_POST['name'] && password_verify($password, $row['password'] )) {

			$_SESSION['auth'] = $row['auth'];
			$_SESSION['name'] = $row['name'];
			echo 'Welcome ' .$row['name']. ' you will be directed to your profile';

			$name = $row['name'];
			header("refresh:1;URL=profile.php?name=$name");
		}else{
			echo 'please correct your username or password';
		}
	}	
}else{
	// echo 'u are not admin etl3 brra';
	header('location:../index.php');
}
?>


