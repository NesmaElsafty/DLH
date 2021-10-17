<?php
	include_once 'admin/connect.php';
	// echo $get_n[0]['jobTitle'];
	// echo $get_n[0]['description'];
	// echo $get_n[0]['image'];
	// echo $get_n[0]['attached'];
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
	<!-- <style type="text/css">
			/*section newss*/

		.news{
			border-color: green;
		}
		img.news{
		border: 1px solid #ddd;
	  	border-radius: 4px;
	 	padding: 5px;
	  	width: 150px;
		}

		p.news{

		}
	</style> -->

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
						<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about-us.php">About US</a></li>
							<li><a href="contact-us.php">Contact US</a></li>
							<li><a href="activities.php">Activities</a></li>
							<li><a href="staff.php">Staff</a></li>
						</ul>
						
						</ul> 
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date">Dar Loqman ElHakim</span>
									<h2>Dar Loqman<br />
									 International School</h2>
									<p><?php echo $get_as['vision']; ?></p>
								</header>
								<a href="about-us.php" class="image main"><img src="images/pic01.jpg" alt="" /></a>
								<ul class="actions special">
									<li><a href="about-us.php" class="button large">More</a></li>
								</ul>
							</article>
							<?php for ($i=0; $i < $n_row; $i++) {  ?>
							<div style=" overflow: auto;">
								<p>
									<h5><?php echo $get_n[$i]['jobTitle']; ?></h5>
									<span class="image right">
										<?php if (isset($get_n[$i]['image'])) { ?>
										<img src="admin/news/image/<?php echo $get_n[$i]['image']; ?>" alt="" />
										<?php }elseif(isset($get_n[$i]['video'])){ 
											$str = $get_n[$i]['video'];
											$ex = explode('.',$str);
										?>
										<video controls>
								    		<source src="video/<?php echo $get['video'];?>" type="video/<?php echo $ex[1]; ?>">
								    	</video>
									<?php } ?>
									</span>
									<?php echo $get_n[$i]['description']; ?> 
									<a href="admin/news/attached/<?php echo $get_n[$i]['attached']; ?>"><?php echo $get_n[$i]['attached']; ?></a>
									<!-- <a href="admin/news/attached/<?php echo $get_n[$i]['attached']; ?>" download>download Attached File</a> -->
								</p>
							</div>
						<?php } ?>
									<hr />

						<!-- Footer -->
							<!-- <footer> -->
								<!-- <div class="pagination"> -->
									<!--<a href="#" class="previous">Prev</a>-->
									<!-- <a href="#" class="page active">1</a>
									<a href="#" class="page">2</a>
									<a href="#" class="page">3</a>
									<span class="extra">&hellip;</span>
									<a href="#" class="page">8</a>
									<a href="#" class="page">9</a>
									<a href="#" class="page">10</a>
									<a href="#" class="next">Next</a> -->
								<!-- </div> -->
							<!-- </footer> -->

					</div>

				<!-- Copyright -->
				<!-- 	<div id="copyright">
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