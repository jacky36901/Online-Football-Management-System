<?php
include("functions.php");
include("Connection.php");
$firstname="";            
    $lastname="";
    $email="";
    $password = "";
    $dob="";
    $contact="";
    $housename= "";
    $street="";
    $state="";
    $pincode = "";
    $position="";
    $matches = "";
    $goals = "";
    $fee = "";
    $c_id="";
    $c_name="";
           

if(isset($_POST['signup']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob=$_POST['dob'];          
$contact=$_POST['contact'];
$housename=$_POST['housename'];
$street=$_POST['street'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$position=$_POST['position'];
$matches=$_POST['matches'];
$goals=$_POST['goals'];
$fee=$_POST['fee'];
$c_id=$_POST['c_id'];

//echo $ins1 = "INSERT INTO `tbl_login` (`id`, `firstname`, `lastname`, `email`, `type`, `password`) VALUES (NULL, '$firstname', '$lastname', '$email', 'player', '$password')";
$ins1 = "INSERT INTO `tbl_login` (`id`, `firstname`, `lastname`, `email`, `type`, `password`) VALUES (NULL, '$firstname', '$lastname', '$email', 'player', '$password')";

 

$ins="insert into tbl_player(firstname,lastname,email,c_id,dob,contact,housename,street,state,pincode,position,matches,goals,fee) values ('$firstname','$lastname','$email','$c_id','$dob','$contact','$housename','$street','$state','$pincode','$position','$matches','$goals','$fee')";
//echo $ins;

  mysqli_query($con,$ins1) or die(mysqli_error($con)); 
   mysqli_query($con,$ins) or die(mysqli_error($con)); 

  
}


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
    <link href="file:///C|/wamp64/www/Football Club/admin/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

   
      <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    WELCOME ADMIN
                </a>
            </div>
            <ul class="nav">
                <li >
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Home</p>
                    </a>
                </li>

            
                <li class="active">
                    <a href="#">
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



        <div class="content">
            <div class="container-fluid">
                <div class="row">
  <div class ="rightcolumn">
  <h2>Add Player</h2>

        <div class="panel panel-default">
          <div class="panel panel-default"><div class="panel-body">
            <form role="form" action="#" method="POST">
            <fieldset>
            <div class="row">
                  
                </div>

<table>
              <tr><td>
             <strong>Firstname:</strong> <input name="firstname" type="text" pattern="[A-Za-z]{1,32}" id="firstname" class="form-control" placeholder="Firstname" required autofocus>
                </td></tr>
                 <tr><td>
             <strong>Lastname:</strong> <input name="lastname" type="text" pattern="[A-Za-z]{1,32}" id="lastname" class="form-control" placeholder="Lastname" required autofocus>
                </td></tr>
               <tr><td>
                <tr><td>
             <strong>Username:</strong><input name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email" class="form-control" placeholder="Email" required autofocus>
              </td>
                <td>
             &nbsp;&nbsp;&nbsp;&nbsp; <strong>Password:</strong><input name="password" type="password" id="password" class="form-control" placeholder="Password" required autofocus>
              </td></tr>
              <tr><td>
              <select class="form-control" name="c_id">
                              <option>Select Club</option>
                              <?php
                                        $res=mysqli_query($con,"select c_id,c_name from tbl_club order by c_name asc");
                                        while($row=mysqli_fetch_assoc($res)){
                                            // if($row['c_id']==$c_id){
                                            //     echo "<option selected value=".$row['c_id'] .$row['c_name']."</option>";
                                            // }else
                                          
                                                echo "<option value=".$row['c_id'].">".$row['c_name']."</option>";
                                            
                                            
                                        }
                                        ?>
                            </select>
                          </td></tr>
                            <tr><td>
             <strong>Date of birth:</strong> <input name="dob" type="date"  max="2004-01-01" id="dob" class="form-control" placeholder="Date of birth" required autofocus>
              </td></tr>
                <tr><td>
              <strong>Contact:</strong><input name="contact" type="text" pattern="[6-9]{1}[0-9]{9}" id="contact" class="form-control" placeholder="Phone No" required autofocus>
              </td></tr>
              
              </td></tr>
                <tr><td>
             <strong>House No/Name:</strong><input name="housename" type="text" id="housename" class="form-control" placeholder="House No/Name" required autofocus>
              </td>
                <td>
             &nbsp;&nbsp;&nbsp;&nbsp; <strong>Street:</strong><input name="street" type="text" id="street" class="form-control" placeholder="Street name" required autofocus>
              </td></tr>
              <tr><td><strong>State:</strong><input name="state" type="text" id="state" class="form-control" placeholder="State" required autofocus>
              </td></tr>
                            <tr><td>
             <strong> Pincode:</strong><input name="pincode" type="text" pattern="[4-7]{1}[0-9]{5}" id="pincode" class="form-control" placeholder="Enter pincode" required autofocus>
              </td></tr>
               
                        
             <tr><td>
             <strong><label for="position">Position:</strong></label>
             <select name="position" id="position" class="form-control">
               <option value="Forward">Forward</option>
               <option value="Midfielder">Midfielder</option>
               <option value="Defender">Defender</option>
               <option value="Goalkeeper">Goalkeeper</option>
             </select>
              </td></tr>
              <tr><td>
              <strong>Matches:</strong><input name="matches" type="number" id="matches" class="form-control" placeholder="No of matches" required>
              </td>
              <td>
              &nbsp;&nbsp;&nbsp;&nbsp; <strong> Goals:</strong><input name="goals" type="number" id="goals" class="form-control" placeholder="No of Goals" required></td></tr>
              <tr><td>
                  <tr><td>
             <strong> Fee:</strong><input name="fee" type="number" id="fee" class="form-control" placeholder="Enter Fees" required autofocus>
              
               <br>
       
              <button name="signup" class="btn btn-lg btn-primary btn-block" type="submit">Add Player</button>
 </td></tr>
  
            </div>
                </div>
              </fieldset>
            </form>
          </div>



                <div class="row"></div>
            </div>
        </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="C:\wamp64\www\Football Club\admin\assets\js\jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="C:\wamp64\www\Football Club\admin\assets\js\bootstrap.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="C:\wamp64\www\Football Club\admin\assets\js\chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="C:\wamp64\www\Football Club\admin\assets\js\bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="C:\wamp64\www\Football Club\admin\assets\js\light-bootstrap-dashboard.js?v=1.4.0"></script>

  <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
  <script src="C:\wamp64\www\Football Club\admin\assets\js\demo.js"></script>

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
