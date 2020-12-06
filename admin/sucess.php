<?php
include("functions.php");
include("function.php");
include("connection.php");
$na=$_POST['name'];
$num=$_POST['number'];
$t=$_POST['ty'];
$d=$_POST['date'];
$cv=$_POST['cvv'];

$p_id=$_GET['p_id'];


$ins="insert into tbl_cardpayment (Card_name,Card_no,Card_type,expdate,cvv) values('$na','$num','$t','$d','$cv')";
//echo $ins;
    $rslt=mysqli_query($con,$ins);
    if(!$rslt)
    {
      echo "error".mysqli_error($con);
      die();
    }
 $delete_sql="delete from tbl_transferchild where p_id='$p_id'";
 mysqli_query($con,$delete_sql);
 $qry="select toid from tbl_transfermaster where p_id='$p_id' ";
 $ro=mysqli_query($con,$qry);
 if(mysqli_num_rows($ro) > 0)
           {
  while($row=mysqli_fetch_array($ro))
  {
 $r=$row['toid'];
}
}
 $upd="update tbl_player set  c_id='$r' where p_id='$p_id'";
 $result=mysqli_query($con,$upd);

?>
<!DOCTYPE html>
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
<style>
.success-page{
  max-width:300px;
  display:block;
  margin: 0 auto;
  text-align: center;
      position: relative;
    top: 50%;
    transform: perspective(1px) translateY(50%)
}
.success-page img{
  max-width:62px;
  display: block;
  margin: 0 auto;
}

.btn-view-orders{
  display: block;
  border:1px solid #47c7c5;
  width:100px;
  margin: 0 auto;
  margin-top: 45px;
  padding: 10px;
  color:#fff;
  background-color:#47c7c5;
  text-decoration: none;
  margin-bottom: 20px;
}
h2{
  color:#47c7c5;
    margin-top: 25px;

}
a{
  text-decoration: none;
}</style>
</head>
<body class="author-template">
<div class="site-wrapper">
	<nav class="main-nav overlay clearfix">
			
	<ul id="menu">
		<li class="nav-home nav-current" role="presentation"><a href="managerindex.php">Home</a></li>
		
	</ul>
	</nav>
	<div>
		
		<div class="success-page">
   <img  src="http://share.ashiknesin.com/green-checkmark.png" class="center" alt="" />
  <h2>Payment Successful !</h2>
  <p>We are delighted to inform you that we received your payments</p>
  <a href="managerindex.php" class="btn-view-orders">Continue</a>
  
</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/masonry.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>