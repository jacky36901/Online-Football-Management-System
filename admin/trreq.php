<?php
include('functions.php');
include('connection.php');
session_start();
$arr=explode(',', $_GET['m_id']);
$accid=$arr[0];	
$reqid=$arr[2];
$p_id=$arr[3];
$c_id=$arr[1];
$ca_id=$arr[4];


 
 $sql="INSERT INTO tbl_transfer(requestid,acceptid,p_id,c_id) VALUES ('$reqid','$accid','$p_id','$c_id')";
  mysqli_query($con,$sql);
  $sql1="INSERT INTO tbl_transfermaster(p_id,fromid,toid,m_id,date) VALUES ('$p_id','$c_id','$ca_id','$reqid',CURRENT_TIMESTAMP)";
  mysqli_query($con,$sql1);
  echo "Pending for approval";
  header("Location: transferlist.php");
  
   //echo $sql;

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
		<li class="nav-home nav-current" role="presentation"><a href="managerindex.php">Home</a></li>
		
	</ul>
	</nav>
	<div>
		<center>
			Trasfer Request has been submitted.

             
		</center>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/masonry.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>
 -->