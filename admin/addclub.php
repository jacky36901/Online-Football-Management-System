<?php
include("Connection.php");
include("function.php");
session_start();

$msg="";
$c_name="";            
$city="";
$m_id="";
$c_id="";

// if(isset($_GET['c_id']) && $_GET['c_id']>0){
//     $c_id = get_safe_value($_GET['c_id']);
//     $row = mysqli_fetch_assoc(mysqli_query($con,"select * from tbl_club where c_id='$c_id'"));
//     $c_name = $row['c_name'];
//     $city = $row['city'];
// }


if(isset($_POST['signup'])){
    $m_id=get_safe_value($con,$_POST['m_id']);
    $c_name=get_safe_value($con,$_POST['c_name']);
    $city=get_safe_value($con,$_POST['city']);

    if($c_id==''){
        $sql="select * from tbl_club where c_name='$c_name'";
    }else{
         $sql="select * from tbl_club where c_name='$c_name' and c_id!='$c_id'";
    }    
    if(mysqli_num_rows(mysqli_query($con,$sql))>0){
   $msg="CLUB already added";
     }
     else{
     if($c_id==''){
            
            $sql = "insert into tbl_club(m_id,c_name,city) values ('$m_id','$c_name','$city')";
            mysqli_query($con, $sql) or die(mysqli_error($con));            
        }
        }}
        // else{
        //     mysqli_query($con,"update tbl_subcategory set cat_id='$cat_id',scat_name='$scat_name' where scat_id='$scat_id'");
        // }
        // redirect('subcat.php');
    




// if(isset($_POST['btnsave']))
// {
// $m_id=get_safe_value($con,$_GET['$m_id']);
// $c_name=$_POST['c_name'];
// $city=$_POST['city'];

// echo "insert into tbl_club(m_id,c_name,city) values ('$m_id','$c_name','$city')";
//   $ins="insert into tbl_club(m_id,c_name,city) values ('$m_id','$c_name','$city')";
//   mysqli_query($con,$ins) or die(mysqli_error($con)); 

  
// }


?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title></title>

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
                   
                </a>
            </div>

           <ul class="nav">
                <li>
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
                <li class="active">
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
  <h2>Add Club</h2>

        <div class="panel panel-default">
          <div class="panel panel-default"><div class="panel-body">
            <form role="form1" action="#" method="POST">
            <fieldset>
            <div class="row">
                  
                </div>


<table>
              <tr><td>
             <strong>Club Name:</strong> <input name="c_name" type="text" id="c_name" class="form-control" placeholder="Club Name" required autofocus>
                </td></tr>
               <tr><td>
             <strong>Location:</strong> <input name="city" type="text" id="location" class="form-control" placeholder="Location" required autofocus>
              </td></tr>
              <tr><td>
             <strong>M_id:</strong> <input name="m_id" type="number" id="m_id" class="form-control" placeholder="m_id" required value="<?php echo $_SESSION['m_id'] ;?>"readonly><td>
              </td></tr>
              <tr><td>
                 <br>
       
              <button name="signup" class="btn btn-lg btn-primary btn-block" type="submit">Add Club</button>
              <?php echo $msg ?>
</td></tr></table></fieldset>
</form>
</body>
</html>
