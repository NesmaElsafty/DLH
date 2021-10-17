<?php

include_once '../connect.php';

session_start();

if ($_SESSION['auth']) {
	// echo $_SESSION['name'];

	if($_SERVER["REQUEST_METHOD"] == "POST") {
	
		if (isset($_POST['add'])) {

			$section = $_POST['section'];
			$description = $_POST['description'];
			$vision = $_POST['vision'];
			$mission = $_POST['mission'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];

			$image = $_FILES["image"]["name"];
			$target_dir = "image/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			
			$extention = explode(".",$image);
			$imageFileType = strtolower($extention[1]); 

			if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
				|| $imageFileType  == "gif" ) {
				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					$sql = "INSERT INTO data (section, description, vision,mission,email,phone,address,image)
											VALUES ('".$section."','".$description."','".$vision."','".$mission."','".$email."','".$phone."','".$address."','".$image."')";
					$add = mysqli_query($connect,$sql);
						if ($add) {
							echo 'added';
							header('location:index.php');

						}else{
							echo 'failed to add data';

						}
			}
			}else{
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.  ";
				echo $imageFileType;
				
				}

		}
	}
}else{
	header('location:../index.php');
}

?>