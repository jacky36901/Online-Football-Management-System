<?php
include('connection.php');
include('function.php');
session_start();
$r=$_SESSION['m_id'];
$qry="select tbl_manager.*,tbl_club.c_id from tbl_manager,tbl_club where $r=tbl_club.m_id  ";
$c=mysqli_query($con,$qry);
           if(mysqli_num_rows($c))
           {
            while($ro=mysqli_fetch_array($c))
           {
            $ci=$ro['c_id'];
            
           }
           }
if(!$con)
{
die("this is due to connection error".mysqli_connect_error($con));
}
else
{
     
      $selectquery = "select tbl_player.*,tbl_club.c_name,tbl_manager.m_id from tbl_player,tbl_club,tbl_manager where tbl_player.c_id=tbl_club.c_id and tbl_club.m_id=tbl_manager.m_id and tbl_manager.m_id!=$r" ;
      
      
       $result=mysqli_query($con,$selectquery);
       if(!$result)
      {
            die("invalid query".mysqli_error($con));
      }
else
{
           
    
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Manager</title>

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

            <ul class="nav">
                <li >
                    <a href="viewm.php">
                        <i class="pe-7s-graph"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li>
                    <a href="updatem.php">
                        <i class="pe-7s-user"></i>
                        <p>Edit Profile</p>
                    </a>
                </li>
                <li>
                    <a href="addclub.php">
                        <i class="pe-7s-user"></i>
                        <p>Add Club</p>
                    </a>
                </li>
                <li>
                    <a href="viewfixm.php">
                        <i class="pe-7s-note2"></i>
                        <p>Fixture</p>
                    </a>
                </li>
                <li class="active">
                    <a href="transferlist.php">
                        <i class="pe-7s-note2"></i>
                        <p>Transferlist</p>
                    </a>
                </li>
                 <li>
                    <a href="reqmanager.php">
                        <i class="pe-7s-note2"></i>
                        <p>Transferrequest</p>
                    </a>
                </li><li>
                    <a href="acceptreq.php">
                        <i class="pe-7s-note2"></i>
                        <p>Transferconfirmation</p>
                    </a>
                </li>
                <li>
                     <a href="viewclubplayer.php"> 
                        <i class="pe-7s-note"></i>
                        <p>Player Details</p>
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
               <h4 class="box-title">&nbsp&nbsp Player Details 
               </h4>
               
            </div>
            <div class="card-body--">
               <div class="table-stats order-table ov-h">
                 <table class="table ">
                   <thead>
                     <tr>
                        <th class="serial"></th>
                        <th>C_id</th>
                        <th>P_id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>DOB</th>
                        <th>Contact</th>
                        <th>Housename</th>
                        <th>Street</th>
                        <th>Pincode</th>
                        <th>Position</th>
                        <th>Matches</th>
                        <th>goals</th>
                        <th>fee</th>
                        <th>Club</th>
                        
                     </tr>
                   </thead>
                   <tbody>
                     
                     <tr>
                        <?php
                         if(mysqli_num_rows($result) > 0)
           {
    $i=1; 
    while($row=mysqli_fetch_array($result))
    {

     ?>                 
       <td class="serial"></td>
                        

      <td><?php echo $row['c_id']." "; ?></td>    
      <td><?php echo $row['p_id']." "; ?></td> 
      <td><?php echo $row['firstname']." "; ?></td> 
      <td><?php echo $row['lastname']." "; ?></td> 
      <td><?php echo $row['dob']." "; ?></td> 
      <td><?php echo $row['contact']." "; ?></td> 
      <td><?php echo $row['housename']." "; ?></td> 
      <td><?php echo $row['street']." "; ?></td> 
      <td><?php echo $row['pincode']." "; ?></td> 
       <td><?php echo $row['position']." "; ?></td> 
      <td><?php echo $row['matches']." "; ?></td> 
      <td><?php echo $row['goals']." "; ?></td> 
      <td><?php echo $row['fee']." "; ?></td> 
      <td><?php echo $row['c_name']." "; ?></td>
      <td> 

       <span class='badge badge-edit'><a href=trreq.php?m_id=<?php echo "{$row['m_id']},{$row['c_id']},{$_SESSION['m_id']},{$row['p_id']},{$ci}"; ?> >Transfer</a></span>&nbsp;


                       
                      <!-- <td> <a href="#" class="btn btn-info ">
          <span class="glyphicon glyphicon-edit"></span> Request</td> --></td>
        </a>
                  
                    </tr>

  <?php
                    $i++;

                    
                    }
                    } else
            {
                  
            

 ?> 

                    <tr><td> NO  RECORD </td></tr>
 <?php
                     }
                     }
                         }

 ?>
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

 