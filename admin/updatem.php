<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
    include("connection.php");
$r=$_SESSION['m_id'];
$f=$_SESSION['firstname'];
$l=$_SESSION['lastname'];
$e=$_SESSION['email'];
$c=$_SESSION['contact'];
$d=$_SESSION['dob'];
$h=$_SESSION['housename'];
$s=$_SESSION['street'];
$p=$_SESSION['pincode'];
$st=$_SESSION['state'];
$pass=$_SESSION['password'];


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
                <li class="active">
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
                <li>
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
                        <i class="pe-7s-news-paper"></i>
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



  <!-- head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=""> -->


    <!-- <title>Signin </title> -->

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



 <!--  </head> -->
    <?php
    $msg="";
    $firstname="";            
    $lastname="";
    $email="";
    $dob="";
    $housename= "";
    $m_id="";
            $street = "";
            $state= "";
            $pincode = "";
            $password = "";
            $cpassword = "";



        if(isset($_POST['signup'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $dob = $_POST['dob'];
            $housename = $_POST['housename'];
            $street = $_POST['street'];
            $state = $_POST['state'];
            $pincode = $_POST['pincode'];
            $password = $_POST['password'];
           
          

          
    // if(mysqli_num_rows(mysqli_query($con,$query))>0){
  
    //  }
    //  else{
     if($m_id==''){
  
            //echo $query = "update tbl_manager set firstname='$firstname',lastname='$lastname',email='$email',contact='$contact',dob='$dob', housename='$housename',street='$street',pincode='$pincode', password='$password' where m_id='$r'";
            
            $query = "update tbl_manager set firstname='$firstname',lastname='$lastname',email='$email',contact='$contact',dob='$dob', housename='$housename',street='$street',state='$state',pincode='$pincode', password='$password' where m_id='$r'";
            if(performQuery($query)){
                echo "<script>alert('Your details are updated')</script>";
            }else{
                echo "<script>alert('Unknown error occured.')</script>";
            }
        }}
    
    ?>
  <body class="text-center">
      <div class="container">
            <form method="post" class="form-signin" name="signup" onsubmit="return check();">
             
              <h1 class="h3 mb-3 font-weight-normal">UPDATE</h1>
              <center><table>
              Your id: <input type="number" name="m_id" required value="<?php echo $_SESSION['m_id'] ;?>"readonly>

              <tr><td style="width:300px;">
              Firstname:<input name="firstname" type="text" pattern="[A-Za-z]{1,32}" id="firstname" class="form-control" placeholder="Firstname" required Firstname value="<?php echo $f?>">
                </td>
                <td style="width:300px;padding-left: 50px">
            Lastname:<input name="lastname" type="text" pattern="[A-Za-z]{1,32}" id="lastname" class="form-control" placeholder="Lastname" required value="<?php echo $l?>">
              </td></tr>
              <tr><td style="width:300px;">
              Email:<input name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email" class="form-control" placeholder="Email address" required value="<?php echo $e?>">
              </td></tr>
                <tr><td style="width:300px;">
              Contact:<input name="contact" type="text" pattern="[6-9]{1}[0-9]{9}"  id="contact" class="form-control" placeholder="Phone No" required  value="<?php echo $c?>">
              </td>
                <td style="width:300px;padding-left: 50px">
              Date of birth:<input name="dob" type="date"  max="1985-01-01" id="dob" class="form-control" placeholder="Date of birth" required value="<?php echo $d?>">
              </td></tr>
                <tr><td style="width:300px;">
              House No/Name:<input name="housename" type="housename" id="housename" class="form-control" placeholder="House No/Name" required value="<?php echo $h?>">
              </td>
                <td style="width:300px;padding-left: 50px">
              Street:<input name="street" type="street" id="street" class="form-control" placeholder="Street name" required value="<?php echo $s?>">
              </td></tr>
               <tr><td style="width:300px;">
              State:<input name="state" type="state" id="state" class="form-control" placeholder="State" required value="<?php echo $st?>">
              </td></tr>
            <tr><td style="width:300px;">
              Pincode:<input name="pincode" type="text" id="pincode" pattern="[4-7]{1}[0-9]{5}" class="form-control" placeholder="Enter pincode" required value="<?php echo $p?>">
              </td></tr>

              <tr><td style="width:300px;">
              Password:<input name="password" type="password" id="password" class="form-control" placeholder="Password" required value="<?php echo $pass?>">
              </td>
              
            
              <tr><td style="width:300px;">
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
