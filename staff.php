<?php
 	include_once 'admin/connect.php'; 		

 ?>
<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dar Loqman International School</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>
						Dar Loqman</h1>
						<p>International School</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<!--<a href="index.php" class="logo">Dar Loqman</a>-->
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
						<li><a href="index.php">Home</a></li>
							<li><a href="about-us.php">About US</a></li>
							<li><a href="contact-us.php">Contact US</a></li>
							<li><a href="activities.php">Activities</a></li>
							<li class="active"><a href="staff.php">Staff</a></li>
						</ul>
						
					</nav>


				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<section class="post">

									<h3>STAFF</h3>
									<?php for ($i=0; $i < $s_row; $i++) { ?>

									<p><span class="image left"><img src="admin/staff/image/<?php echo $get_s[$i]['image']; ?>" alt="" /></span>	
									</p>
										Name: <?php echo $get_s[$i]['username']; ?>	<br>
										Email: <?php echo $get_s[$i]['email']; ?> <br>
										Job Title: <?php echo $get_s[$i]['jobTitle']; ?> <br>	

										Subject: <?php echo $get_s[$i]['subject']; ?> 
										<br>
										<br>
										<br>
										<br>
										<br>
								
									
									<?php } ?>
									<hr />
						</section>
					</div>
					</footer>

				<!-- Copyright -->
					<!-- <div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div> -->

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>