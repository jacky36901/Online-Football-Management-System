<?php
         include("functions.php");
         include("connection.php");
         include("function.php");
$m_id='';
$firstname='';
$lastname='';
$email='';
$contact='';
$dob='';
$housename='';
$street='';
$state='';
$pincode='';
$password='';


if(isset($_GET['m_id']) && $_GET['m_id']!=''){
 $m_id=$_GET['m_id'];

  $res=mysqli_query($con,"select * from tbl_manager where m_id='$m_id'");
  $check=mysqli_num_rows($res);
  if($check>0){
      $row=mysqli_fetch_assoc($res);
      
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$email=$row['email'];
$contact=$row['contact'];
$dob=$row['dob'];
$housename=$row['housename'];
$street=$row['street'];
$state=$row['state'];
$pincode=$row['pincode'];
$password=$row['password'];

}
}
if(isset($_POST['signup']))
{
$m_id=get_safe_value($con,$_POST['m_id']);
$firstname=get_safe_value($con,$_POST['firstname']);
$lastname=get_safe_value($con,$_POST['lastname']);
$email=get_safe_value($con,$_POST['email']);
$contact=get_safe_value($con,$_POST['contact']);
$dob=get_safe_value($con,$_POST['dob']);
$housename=get_safe_value($con,$_POST['housename']);
$street=get_safe_value($con,$_POST['street']);
$state=get_safe_value($con,$_POST['state']);
$pincode=get_safe_value($con,$_POST['pincode']);
$password=get_safe_value($con,$_POST['password']);


 if(isset($_GET['m_id']) && $_GET['m_id']!=''){
 $sql = "update tbl_manager set firstname='$firstname',lastname='$lastname',contact='$contact',dob='$dob', housename='$housename',street='$street',state='$state',pincode='$pincode' where m_id='$m_id' ";

if(performQuery($sql)){
                echo "<script>alert('Manager details are updated')</script>";
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
                <li>
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
                  <li class="active"> 
                    <a href="viewmanager.php">
                        <i class="pe-7s-user"></i>
                        <p>Manager Details </p>
                    </a>
                </li> 
                <li >
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

<script type="text/javascript">
  function check()
  {
    var v1=document.signup.firtname.value;
    var v2=document.signup.lastname.value;
    var v3=document.signup.email.value;
    var v4=document.signup.contact.value;
    var v5=document.signup.password.value;
    var v6=document.signup.cpassword.value;

    var pn1=/^[A-Z a-z]+$/;
    if(!(v1.match(pn1)))
    {
      alert("Invalid name in Firstname");
      return false;
    }
    else if(!(v2.match(pn1)))
    {
      alert("Invalid name in Lastname");
      return false;
    }
    var pn2=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!(v3.match(pn2)))
    {
      alert("Invalid Email");
      return false;
    }
    var pn3=/^\d{10}$/;
    if(!(v4.match(pn3)))
    {
      alert("Invalid Phone number");
      return false;
    }
    else if((v5.localecompare(v6)))
    {
      alert("Incorrect password");
      return false;
    }
  }
</script>


 
<body class="text-center">
      <div class="container">
            <form method="post" class="form-signin" name="signup" onsubmit="return check();">
             
              <h1 class="h3 mb-3 font-weight-normal">UPDATE <?php echo $m_id ?> </h1>

              <center><table style="margin-top: 30px;">
              Manager id: <input type="number" name="m_id" required value="<?php echo $m_id?>" readonly>

              <tr><td style="width:300px;">
              Firstname:<input name="firstname" type="text" pattern="[A-Za-z]{1,32}" id="firstname" class="form-control" placeholder="Firstname" required  value="<?php echo $firstname;?>" >
                </td>
                <td style="width:300px;padding-left: 50px;">
            Lastname:<input name="lastname" type="text" pattern="[A-Za-z]{1,32}" id="lastname" class="form-control" placeholder="Lastname" required value="<?php echo $lastname;?>" >
              </td></tr>
              <tr><td style="width:300px;">
              Email:<input name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="email" class="form-control" placeholder="Email address" required value="<?php echo $email;?>" readonly>
              </td></tr>
                <tr><td style="width:300px;">
              Contact:<input name="contact" type="text" pattern="[6-9]{1}[0-9]{9}" id="contact" class="form-control" placeholder="Phone No" required  value="<?php echo $contact;?>">
              </td>
                <td style="width:300px;padding-left: 50px;">
              Date of birth:<input name="dob"  max="1985-01-01" type="date" id="dob" class="form-control" placeholder="Date of birth" required value="<?php echo $dob?>">
              </td></tr>
                <tr><td style="width:300px;">
              House No/Name:<input name="housename" type="housename" id="housename" class="form-control" placeholder="House No/Name" required value="<?php echo $housename?>">
              </td>
                <td style="width:300px;padding-left: 50px;">
              Street:<input name="street" type="street" id="street" class="form-control" placeholder="Street name" required value="<?php echo $street?>">
              </td></tr>
               <tr><td style="width:300px;">
              State:<input name="state" type="state" id="state" class="form-control" placeholder="State" required value="<?php echo $state?>">
              </td></tr>

            <tr><td style="width:300px;">
              Pincode:<input name="pincode" type="text" pattern="[4-7]{1}[0-9]{5}" id="pincode" class="form-control" placeholder="Enter pincode" required value="<?php echo $pincode?>">
              </td></tr>

              <tr><td style="width:300px;">
              Password:<input name="password" type="password" id="password" class="form-control" placeholder="Password" required value="<?php echo $password?>" readonly>
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

