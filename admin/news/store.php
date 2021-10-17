<?php
include_once '../connect.php';

session_start();

if ($_SESSION['auth']) {
	// echo $_SESSION['name'];

	if($_SERVER["REQUEST_METHOD"] == "POST") {
	
		if (isset($_POST['add'])) {
			
			$count = 0;		
			$section = $_POST['section'];
			
			$title = $_POST['title'];
			$description = $_POST['description'];
			
			$image = $_FILES["image"]["name"];

			$video = $_FILES["video"]["name"];
			
			$attached = $_FILES["attached"]["name"];

			if ($image != '') {
				$target_dir = "image/";
				$target_file = $target_dir . basename($image);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
					if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
					|| $imageFileType == "gif" ) {
					
						if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
							$count++;
						}else{
							echo 'failed To upload Image';
						}
		 			}else{
		 				echo 'File is not an image';
		 			}	
			
				}elseif ($video != '') {
				$target_dir = "video/";
				$target_file = $target_dir . basename($video);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					if ($imageFileType == "mp4" || $imageFileType == "amv" || $imageFileType == "flv" || $imageFileType == "rmvb") {
					
						if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
							$count++;
							echo 'video uploaded' ;
						}else{
							echo 'failed to upload video';
							header('refresh:2;URL=create.php');
						}

					}else{
						echo 'file is not Video';
					}
				}elseif ($attached != '') {
				$target_dir = "attached/";
				$target_file = $target_dir . basename($attached);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
					if ($imageFileType == "ppt" || $imageFileType == "docx" || $imageFileType == "pdf" || $imageFileType == "text") {
					
						if (move_uploaded_file($_FILES["attached"]["tmp_name"], $target_file)) {
							$count++;
						}else{
							echo 'failed to upload attached';
							header('refresh:2;URL=create.php');
						}
					}else{
							echo 'File is not an Document';
					}	
				}else{
				$sql = "INSERT INTO data (section, jobTitle,description)
									VALUES ('".$section."','".$title."','".$description."')";
				$add = mysqli_query($connect,$sql);
					if ($add) {
						echo 'added';
						header('location:index.php');

					}else{
						echo 'failed to add data';
						header('refresh:2;URL=index.php');
					}
				}

				if ($count > 0) {
					$sql = "INSERT INTO data (section, jobTitle,description,image,video,attached)
							VALUES ('".$section."','".$title."','".$description."','".$image."','".$video."','".$attached."')";
					$add = mysqli_query($connect,$sql);
						if ($add) {
							// echo 'All Data added';
							header('location:index.php');

						}else{
							echo 'failed to add data';
							header('refresh:2;URL=index.php');

						}
				}
	}}			
}else{
	header('location:../index.php');
}

?>



