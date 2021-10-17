<?php
include_once '../connect.php';
// && 
// echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				// break;
			// header('refresh:1;URL=create.php');
session_start();

if ($_SESSION['auth']) {
	// echo $_SESSION['name'];

	if($_SERVER["REQUEST_METHOD"] == "POST") {
	
		if (isset($_POST['add'])) {

			$section = $_POST['section'];
			
			$title = $_POST['title'];
			
			$image = $_FILES["image"]["name"];
			$images = sizeof($image);

			for ($i=0; $i < $images; $i++) { 
				$target_dir = "image/";
			$target_file = $target_dir . basename($image[$i]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				
				if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
				|| $imageFileType == "gif" ) {
				
				if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
					$sql = "INSERT INTO data (section, jobTitle, image)
											VALUES ('".$section."','".$title."','".$image[$i]."')";
					$add = mysqli_query($connect,$sql);
						if ($add) {
							// echo 'added';
							header('location:index.php');

						}else{
							echo 'failed to add data';

						}
				}else{
					// echo 'failed to upload image';
					header('refresh:2;URL=create.php');
				}
			}elseif ($imageFileType == "mp4" || $imageFileType == "amv" || $imageFileType == "flv" || $imageFileType == "rmvb") {
				
				if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
					$sql = "INSERT INTO data (section, jobTitle, video)
											VALUES ('".$section."','".$title."','".$image[$i]."')";
					$add = mysqli_query($connect,$sql);
						if ($add) {
							// echo 'added';
							header('location:index.php');

						}else{
							echo 'failed to add data';

						}
				}else{
					// echo 'failed to upload image';
					header('refresh:2;URL=create.php');
				}

			}else{
				echo 'File Type is not allowed';
					header('refresh:2;URL=create.php');
			}	
			}

		}elseif (isset($_POST['addImage'])) {
			$section = $_POST['section'];
			$title = $_POST['ACTtitle'];
			// $get_title = $_GET['title'];
			$ACTtitle = $_POST['ACTtitle'];
			
			$image = $_FILES["image"]["name"];
			$images = sizeof($image);

			for ($i=0; $i < $images; $i++) { 
				$target_dir = "image/";
			$target_file = $target_dir . basename($image[$i]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				
				if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
				|| $imageFileType == "gif" ) {
				
				if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
					$sql = "INSERT INTO data (section, jobTitle, image)
											VALUES ('".$section."','".$ACTtitle."','".$image[$i]."')";
					$add = mysqli_query($connect,$sql);
						if ($add) {
							// echo 'added';
							header("location:show.php?title=$title");

						}else{
							echo 'failed to add data';

						}
				}else{
					// echo 'failed to upload image';
					header('refresh:2;URL=create.php');
				}
			}elseif ($imageFileType == "mp4" || $imageFileType == "amv" || $imageFileType == "flv" || $imageFileType == "rmvb") {
				
				if (move_uploaded_file($_FILES["image"]["tmp_name"][$i], $target_file)) {
					$sql = "INSERT INTO data (section, jobTitle, video)
											VALUES ('".$section."','".$ACTtitle."','".$image[$i]."')";
					$add = mysqli_query($connect,$sql);
						if ($add) {
							// echo 'added';
							header('location:index.php');

						}else{
							echo 'failed to add data';

						}
				}else{
					// echo 'failed to upload image';
					header('refresh:2;URL=create.php');
				}

			}else{
				echo 'File Type is not allowed';
					header('refresh:2;URL=create.php');
			}
			}
		}
	}
}else{
	header('location:../index.php');
}

?>