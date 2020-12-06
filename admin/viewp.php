<?php
include('connection.php');
include('function.php');

session_start();
 
                        
                        


?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Player</title>

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
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    

      <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    
                </a>
            </div>
           <?php

           include('connection.php');
$sql="select * from tbl_player  ";
$res=mysqli_query($con,$sql);
           ?>
            <ul class="nav">
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-graph"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li>
                    <a href="updatep.php">
                        <i class="pe-7s-user"></i>
                        <p>Edit Profile</p>
                    </a>
                </li>
                <li>
                    
                <li>
                    <a href="viewfixp.php">
                        <i class="pe-7s-note2"></i>
                        <p>Fixture</p>
                    </a>
                </li>
                
                        
            </ul>
      </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"></a>
                </div>
                <div class="collapse navbar-collapse">
                    
                       

                    <ul class="nav navbar-nav navbar-right">
                       
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

<div class="content pb-0">
   <div class="orders">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
               <h4 class="box-title">&nbsp&nbspPLAYER Details 
               </h4>
               
            </div>
            <div class="card-body--">
               <div class="table-stats order-table ov-h">
                 <table class="table ">
                   <thead>
                     <tr>
                        <th class="serial"></th>
                        <th>Email</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Contact</th>
                        <th>DOB</th>
                        <th>Housename</th>
                        <th>Street</th>
                        <th>State</th>
                        <th>Pincode</th>
                        
                     </tr>
                   </thead>
                   <tbody>
                     
                     <tr>
                        <td class="serial"></td>
                        

                        <td><?php echo $_SESSION['email'] ; ?></td>
                        <td><?php echo $_SESSION['firstname'] ;?> </td>
                        <td><?php echo $_SESSION['lastname'] ;?></td>
                          <td><?php echo $_SESSION['contact'] ;?></td>
                         <td><?php echo $_SESSION['dob'] ;?></td>
                          <td><?php echo $_SESSION['housename'] ;?></td>
                           <td><?php echo $_SESSION['street'] ;?></td>
                           <td><?php echo $_SESSION['state'] ;?></td>
                            <td><?php echo $_SESSION['pincode'] ;?></td>
                        
                       
                  
                     </tr>
                     
                   </tbody>
                 </table>
               </div>
            </div>
          </div>
        </div>
      </div>
   </div>
</div>

       
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
