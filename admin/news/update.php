<?php
include_once '../connect.php';

session_start();

if ($_SESSION['auth']) {
	// echo $_SESSION['name'];

	if($_SERVER["REQUEST_METHOD"] == "POST") {
	
		if (isset($_POST['update'])) {
			
			$section = $_POST['section'];
			$id = $_POST['id'];
			$title = $_POST['title'];
			$description = $_POST['description'];
			
			$image = $_FILES["image"]["name"];

			$video = $_FILES["video"]["name"];
			
			$attached = $_FILES["attached"]["name"];
			$count = 0;
			if ($image != '') {
				$target_dir = "image/";
				$target_file = $target_dir . basename($image);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
					if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg"
					|| $imageFileType == "gif" ) {
					
						if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
							//UPDATE STATMENT for image
							$image_sql = "UPDATE data
											SET image = '".$image."',
												jobTitle = '".$title."',
												description = '".$description."'
											WHERE id = '".$id."'";
							$update_image = mysqli_query($connect,$image_sql);
							if ($update_image) {
								$count++;
							}
						}else{
							echo 'failed To upload Image';
						}
		 			}else{
		 				echo 'File is not an image';
		 			}	
			
				}
				if ($video != '') {
				$target_dir = "video/";
				$target_file = $target_dir . basename($video);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					if ($imageFileType == "mp4" || $imageFileType == "amv" || $imageFileType == "flv" || $imageFileType == "rmvb") {
					
						if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
							//UPDATE STATMENT FOR VIDEO
							$video_sql = "UPDATE data
											SET video = '".$video."',
												jobTitle = '".$title."',
												description = '".$description."'
											WHERE id = '".$id."'";
							$update_video = mysqli_query($connect,$video_sql);
	
							if ($update_video) {
								$count++;
							}
						}else{
							echo 'failed to upload video';
							header('refresh:2;URL=create.php');
						}

					}else{
						echo 'file is not Video';
					}
				}
				if ($attached != '') {
				$target_dir = "attached/";
				$target_file = $target_dir . basename($attached);
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					
					if ($imageFileType == "ppt" || $imageFileType == "docx" || $imageFileType == "pdf" || $imageFileType == "txt") {
					
						if (move_uploaded_file($_FILES["attached"]["tmp_name"], $target_file)) {
							//UPDATE STATMENT FOR ATTACHED FILE
							$attach_sql = "UPDATE data
											SET attached = '".$attached."',
												jobTitle = '".$title."',
												description = '".$description."'
											WHERE id = '".$id."'";
							$attached_update = mysqli_query($connect,$attach_sql);
							if ($attached_update) {
								$count++;
							}
							
						}else{
							echo 'failed to upload attached';
							header('refresh:2;URL=create.php');
						}
					}else{
							echo 'File is not an Document';
					}	
				}
				if ($image == '' && $video == '' && $attached == '') {
					
					// update statment
				$query = "UPDATE data
									SET	jobTitle = '".$title."',
										description = '".$description."'
									WHERE id = '".$id."'";
				$update = mysqli_query($connect,$query);
					if ($update) {
						$count++;
						// echo 'updated';
						// header('refresh:2;URL=index.php');

					}else{
						echo 'failed to add data';
						header('refresh:2;URL=index.php');
					}
				}

				if ($count > 0) {
					 // echo 'updated';
					 header('location:index.php');

				}

	}}			
}else{
	header('location:../index.php');
}

?>



