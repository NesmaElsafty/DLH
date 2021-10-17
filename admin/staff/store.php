<?php

include_once '../connect.php';

session_start();

if ($_SESSION['auth']) {
	// echo $_SESSION['name'];

	if($_SERVER["REQUEST_METHOD"] == "POST") {
	
		if (isset($_POST['add'])) {

			$section = $_POST['section'];
			$username = $_POST['username'];
			$jobTitle = $_POST['jobTitle'];
			$subject = $_POST['subject'];
			$email = $_POST['email'];

			$image = $_FILES["image"]["name"];
			$target_dir = "image/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


			$query = "SELECT * FROM data WHERE section = '".$section."'";
			$chk = mysqli_query($connect,$query);

			$count = 0;
				while ($more = mysqli_fetch_assoc($chk)) {
					if ($more['email'] == $email) {
						$count++;
					}
				}

			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			header('refresh:1;URL=create.php');
			}elseif ($count > 0) {
				echo 'This Email is Already existed';
			header('refresh:1;URL=create.php');
				
			}else{
				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					$sql = "INSERT INTO data (section, username, jobTitle,subject,email,image)
											VALUES ('".$section."','".$username."','".$jobTitle."','".$subject."','".$email."','".$image."')";
					$add = mysqli_query($connect,$sql);
						if ($add) {
							echo 'added';
							header('refresh:1;URL=index.php');

						}else{
							echo 'failed to add data';

						}
				}else{
					echo 'failed to upload image';
					// header('refresh:2;URL=create.php');
				}
			}

		}
	}
}else{
	// header('location:../index.php');
}

?>