<?php
include('functions.php');
include('connection.php');
session_start();
$arr=explode(',', $_GET['m_id']);
$ma_id=$arr[1];	
$p_id=$arr[0];
$c_id=$arr[2]; 	




// $sql1="SELECT * FROM tbl_transfer";
//  $sql2=mysqli_query($con,$sql1);
//  $row=mysqli_fetch_rows($con,$sql2);
 $sql="INSERT INTO tbl_transferchild(ma_id,p_id,c_id) VALUES ('$ma_id','$p_id','$c_id')";
  mysqli_query($con,$sql);
  //$p=$row['p_id'];

   $delete_sql="DELETE FROM `tbl_transfer` WHERE `tbl_transfer`.`p_id` = $p_id";
   mysqli_query($con,$delete_sql);
header("Location: reqmanager.php");
?>
<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<title>Footbal Club Management </title>
<meta name="description" content="Thoughts, reviews and ideas since 1999."/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="shortcut icon" href="#">
<link rel="stylesheet" type="text/css" href="assets/css/screen.css"/>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic"/>
</head>
<body class="author-template">
<div class="site-wrapper">
	<nav class="main-nav overlay clearfix">
			
	<ul id="menu">
		<li class="nav-home nav-current" role="presentation"><a href="index.html">Home</a></li>
		
	</ul>
	</nav>
	<div>
		<center>
			Request Accepted succesfully.

             
		</center>
	</div>
	
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/masonry.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html> -->