<?php
         include("functions.php");
         include("connection.php");
         include("function.php");
$st_id='';
$st_name='';
$city='';

// $password='';


if(isset($_GET['st_id']) && $_GET['st_id']!=''){
 $st_id=$_GET['st_id'];

  $res=mysqli_query($con,"select * from tbl_stadium where st_id='$st_id'");
  $check=mysqli_num_rows($res);
  if($check>0){
      $row=mysqli_fetch_assoc($res);
      
$st_name=$row['st_name'];
$city=$row['city'];
$st_id=$row['st_id'];

// $password=$row['password'];

}
}
if(isset($_POST['signup']))
{
// $p_id=get_safe_value($con,$_POST['p_id']);
$st_name=get_safe_value($con,$_POST['st_name']);
$city=get_safe_value($con,$_POST['city']);

//$password=get_safe_value($con,$_POST['password']);


 if(isset($_GET['st_id']) && $_GET['st_id']!=''){
 $sql = "update tbl_stadium set st_name='$st_name',city='$city' where st_id='$st_id' ";

if(performQuery($sql)){
                echo "<script>alert('Stadium details are updated')</script>";
            }else{
                echo "<script>alert('Unknown error occured.')</script>";
            }
        }

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
    <style type="text/css">
        img {
  width: 200px;
  height: 400px;
  object-fit: cover;
}
    </style>

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

            <ul class="nav">
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
                <li class="active">
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
                <li>
                    <a href="viewfixture.php">
                        <i class="pe-7s-user"></i>
                        <p>View Fixture </p>
                    </a>
                </li> 
                <li >
                    <a href="viewtransfer.php">
                        <i class="pe-7s-user"></i>
                        <p>View Transfers </p>
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
                    <a class="navbar-brand">Hi,Admin</a>
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






    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



 
<body class="text-center">
      <div class="container">
            <form method="post" class="form-signin" name="signup" onsubmit="return check();">
             
              <h1 class="h3 mb-3 font-weight-normal">UPDATE <?php echo $st_id ?> </h1>

              <center><table>
              Stadium id: <input type="number" name="st_id" required value="<?php echo $st_id?>" readonly>

              <tr><td>
             Stadium Name:<input name="st_name" type="text"  id="st_name" class="form-control" placeholder="St_name" required  value="<?php echo $st_name;?>" >
                </td>
                <td>
            Location:<input name="city" type="text"  id="city" class="form-control" placeholder="Location" required value="<?php echo $city;?>" >
              </td></tr>
             
            
              <tr><td>
              <br>
       
              <button name="signup" class="btn btn-lg btn-primary btn-block" type="submit">UPDATE</button>
             
             
              </td></tr>
              </table></center>
            </form>
          </div>
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

