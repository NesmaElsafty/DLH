<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
		if (isset($_POST['send'])) {



	$send = mail("ahmedessam00718@gmail.com",$_POST['subject'],$_POST['message'],$_POST['email']);

	}
}else{
	header('location:index.php')
}

?>