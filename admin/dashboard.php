<?php
 include("functions.php");
    include("function.php");
    include("connection.php");
    $result = mysqli_query($con,"SELECT COUNT(*) AS `count` FROM `tbl_player`");
$row = mysqli_fetch_assoc($result);
$count = $row['count'];
 $result = mysqli_query($con,"SELECT COUNT(*) AS `count1` FROM `tbl_manager`");
$row1 = mysqli_fetch_assoc($result);
$count1 = $row1['count1'];
$result = mysqli_query($con,"SELECT COUNT(*) AS `count2` FROM `tbl_club`");
$row2 = mysqli_fetch_assoc($result);
$count2 = $row2['count2'];
$result = mysqli_query($con,"SELECT COUNT(*) AS `count3` FROM `tbl_transfermaster`");
$row3 = mysqli_fetch_assoc($result);
$count3 = $row3['count3'];




?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>ADMIN</title>


  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="file:///C|/wamp64/www/Football Club/admin/assets/css/pe-icon-7-stroke.css" rel="stylesheet" /><!-- 
<style >
        .img{
            background: url(assets/img/11.jpg);
            background-size:contain;

            width: 100%;
            height: 100%;
        }
    </style> -->
    <style >
    .my-card
{

    position:absolute;
    left:40%;
    top:-20px;
    border-radius:50%;
}
.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
</style>

</head>
<body>
    <style type="text/css">
        img {
  width: 200px;
  height: 400px;
  object-fit: cover;
}
    </style>

<div class="wrapper"  >
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

   
      <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    WELCOME ADMIN
                </a>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Home</p>
                    </a>
                </li>

          
                <li>
                    <a href="addplayer.php">
                        <i class="pe-7s-graph"></i>
                        <p>Add Player</p>
                    </a>
                </li>
                
                <li>
                    <a href="addfixture.php">
                        <i class="pe-7s-note2"></i>
                        <p>Add Fixture</p>
                    </a>
                </li>
                <li>
                    <a href="stadium.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Add Stadium </p>
                    </a>
                </li>
                <li>
                    <a href="home.php">
                        <i class="pe-7s-user"></i>
                        <p>Requests </p>
                    </a>
                </li>
                  <li>
                    <a href="viewmanager.php">
                        <i class="pe-7s-user"></i>
                        <p>Manager Details </p>
                    </a>
                </li> 
                <li>
                    <a href="viewplayer.php">
                        <i class="pe-7s-user"></i>
                        <p>Player Details </p>
                    </a>
                </li>     
                
            </ul>

      </div>
    </div>

    <div class="main-panel"  >
        <nav class="navbar navbar-default navbar-fixed" >
            <div class="container-fluid" >
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"></a>
                </div>
                <div class="collapse navbar-collapse" >
                    
                       

                    <ul class="nav navbar-nav navbar-right" >
                       
                        <li>
                            <a href="login.php">
                                <p>Log out</p>
                            </a>
                        </li>
            <li class="separator hidden-lg"></li>
                    </ul>
                </div>
                
            </div>
        </nav>
        <div class="jumbotron"  >
<div class="row w-100"  >
        <div class="col-md-3"  >
            <div class="card border-info mx-sm-1 p-3" >
                <div class="card border-info shadow text-info p-3 my-card" >
                    <span  aria-hidden="true"></span></div>
                <div class="text-info text-center mt-3"><h4>Players</h4></div>
                <div class="text-info text-center mt-2"><h1><?php echo $count;
                ?></h1></div>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="card border-success mx-sm-1 p-3">

                <div class="card border-success shadow text-success p-3 my-card" ><span  aria-hidden="true"></span></div>
                <div class="text-success text-center mt-3" ><h4>Managers</h4></div>
                <div class="text-success text-center mt-2" ><h1><?php echo $count1;
                ?></h1></div>
            </div>
        </div>

        <div class="col-md-3" >
            <div class="card border-danger mx-sm-1 p-3">
                <div class="card border-danger shadow text-danger p-3 my-card" ><span aria-hidden="true"></span></div>
                <div class="text-danger text-center mt-3"><h4>Clubs</h4></div>
                <div class="text-danger text-center mt-2"><h1><?php echo $count2;
                ?></h1></div>
            </div>
        </div>
        <div class="col-md-3" >
            <div class="card border-danger mx-sm-1 p-3">
                <div class="card border-danger shadow text-danger p-3 my-card" ><span  aria-hidden="true"></span></div>
                <div class="text-danger text-center mt-3"><h4>Transfers</h4></div>
                <div class="text-danger text-center mt-2"><h1><?php echo $count3;
                ?></h1></div>
            </div>
        </div>
        <div class="col-md-3">
            
       
     </div>
</div>
        <div class="img" >
  
              </div> 
              
               <h4 ><a href="viewtransfer.php"><button class="btn btn-danger "> Transfer Report</button></a> 
               <a href="viewfixture.php"><button class="btn btn-danger dropdown-toggle"> Fixture Report</button></a> 
               <a href="playerreport.php"><button class="btn btn-danger dropdown-toggle"> Player Report</button></a> 
               <a href="managerreport.php"><button class="btn btn-danger dropdown-toggle"> Manager Report</button></a>
               <a href="club.php"><button class="btn btn-danger dropdown-toggle"> Club Report</button></a></h4> 
              <!-- <input type="button" name="button"  onclick="viewtransfer.php"> -->
</div>

<!-- <div class=img>
  <img src="C:\wamp64\www\Football Club\admin\assets\img\full-screen-image-3.jpg">
</div> -->
</body>




    <!--   Core JS Files   -->
    <script src="file:///C|/Users/ARJUN RAJESH/Desktop/drive/admin_template/abc/BS3/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="file:///C|/Users/ARJUN RAJESH/Desktop/drive/admin_template/abc/BS3/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="file:///C|/Users/ARJUN RAJESH/Desktop/drive/admin_template/abc/BS3/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="file:///C|/Users/ARJUN RAJESH/Desktop/drive/admin_template/abc/BS3/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="file:///C|/Users/ARJUN RAJESH/Desktop/drive/admin_template/abc/BS3/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="file:///C|/Users/ARJUN RAJESH/Desktop/drive/admin_template/abc/BS3/assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>


</html>
