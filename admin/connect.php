<?php 

error_reporting(0);
$connect = mysqli_connect("localhost","root","","school");

if ($connect){
	// echo 'connected';
}else{
	echo 'failed to connect ';
}

								//ABOUT US SECTION
$as_sql = "SELECT * FROM data WHERE section = 'about-us'";
$AS_result = mysqli_query($connect,$as_sql);
$get_as = mysqli_fetch_assoc($AS_result);

// echo '<pre>';
// print_r($get_as);
// echo '</pre>';
								//---------------------


								//ACTIVITIES

$act_sql = "SELECT jobTitle, image FROM data WHERE section = 'activities' GROUP BY jobTitle";
$ACT_result = mysqli_query($connect,$act_sql);
$get_act = mysqli_fetch_all($ACT_result,MYSQLI_ASSOC);
$act_row=mysqli_num_rows($ACT_result);
// echo '<pre>';
// print_r($get_act);
// echo '</pre>';

								//SINGLE ACTIVITY

$sa_sql = 'SELECT image FROM data WHERE jobTitle = "'.$_GET['title'].'"';
$sa_result = mysqli_query($connect,$sa_sql);
$get_sa = mysqli_fetch_all($sa_result,MYSQLI_ASSOC);
$sa_row=mysqli_num_rows($sa_result);

// echo '<pre>';
// // print_r($get_sa);
// echo '</pre>';

				//----------------------
					//STAFF
$s_sql = "SELECT * FROM data WHERE section = 'staff'";
$s_result = mysqli_query($connect,$s_sql);
$get_s = mysqli_fetch_all($s_result,MYSQLI_ASSOC);
$s_row=mysqli_num_rows($s_result);

// echo '<pre>';
// print_r($get_s);
// echo '</pre>';


			//-----------------------
				//NEWS

$n_sql = "SELECT * FROM data WHERE section = 'news' ORDER BY date DESC";
$n_result = mysqli_query($connect,$n_sql);
$get_n = mysqli_fetch_all($n_result,MYSQLI_ASSOC);
$n_row=mysqli_num_rows($n_result);


?>
