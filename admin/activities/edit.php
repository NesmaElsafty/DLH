<?php

include_once '../connect.php';

session_start();

if (isset($_GET['id'])) {
	
if (isset($_SESSION['auth'])) {
$name = $_SESSION['name'];
		$sql = "SELECT * FROM data WHERE id='".$_GET['id']."'";
		$result=mysqli_query($connect,$sql);
		$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>ADD Our Data</title>
</head>
<body>
<a href="../home.php">
	<button>Home</button>
</a>
<a href="../auth/profile.php?name=<?php echo $name; ?>">
	<button>Profile</button>
</a>

<a href="index.php">
	<button>Back</button>
</a>

<a href="../auth/logout.php">
	<button>LogOut</button>
</a>

	<form action="update.php" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="section" value="staff">
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	
	<input type="text" name="username" value="<?php echo $row['username']; ?>"  required><br>

	<input type="email" name="email" value="<?php echo $row['email']; ?>"  required><br>

	<input type="text" name="jobTitle" value="<?php echo $row['jobTitle']; ?>"  required><br>

	<input type="text" name="subject" value="<?php echo $row['subject']; ?>"  required><br>

	<input type="file" name="image"><br>

	<input type="submit" name="update" value="UPDATE">

	</form>

</body>
</html>

<?php 
}else{
		header('location:../index.php');
}
	}else{
		header('location:../index.php');
	}

?>