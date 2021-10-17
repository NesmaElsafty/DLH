<?php

include_once '../connect.php';

session_start();

if ($_SESSION['auth']) {
	// echo $_SESSION['name'];
 
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	
		if (isset($_POST['update'])) {
			$count = 0;
			$section = $_POST['section'];
			$id = $_POST['id'];
			$description = $_POST['description'];
			$vision = $_POST['vision'];
			$mission = $_POST['mission'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];

			$image = $_FILES["image"]["name"];
			$target_dir = "image/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			
			if ($image == '') {
				$sql = "UPDATE data
							SET description = '".$description."', 
								vision = '".$vision."',
								mission = '".$mission."',
								email = '".$email."',
								phone = '".$phone."',
								address = '".$address."'
							WHERE id = '".$id."'";
							// die($sql);
				$update = mysqli_query($connect,$sql);
						if ($update) {
							// echo 'Data updated';
							header('location:index.php');

						}else{
							echo 'failed to update data';

						}

			}elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}else{
				if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
					$sql = "UPDATE data
							SET description = '".$description."', 
								vision = '".$vision."',
								mission = '".$mission."',
								email = '".$email."',
								phone = '".$phone."',
								address = '".$address."',
								image = '".$image."'
							WHERE id = '".$id."'";

					$update = mysqli_query($connect,$sql);
						if ($update) {
							echo 'All Data updated';
							header('refresh:1;URL=index.php');

						}else{
							echo 'failed to update data';

						}
				}else{
					echo 'failed to upload image';
					header('refresh:2;URL=create.php');
				}
			}

		}
	}
}else{
	header('location:../index.php');
}

?>


