<?php
         include("functions.php");
         include("connection.php");
         include("function.php");
$fix_id="";
$date="";
$time="";
$hometeam="";         
$awayteam="";
$st_name="";
$msg="";
if(isset($_GET['fix_id']) && $_GET['fix_id']!=''){
 $fix_id=$_GET['fix_id'];

  $res=mysqli_query($con,"select * from tbl_fixturemaster where fix_id='$fix_id'");
  $check=mysqli_num_rows($res);
  if($check>0){
      $row=mysqli_fetch_assoc($res);
      
$date=$row['date'];
$time=$row['time'];
$hometeam=$row['hometeam'];           
$awayteam=$row['awayteam'];
$st_name=$row['st_name'];
}
}

if(isset($_POST['signup']))
{
$fix_id=$_GET['fix_id'];
$date=get_safe_value($con,$_POST['date']);
$time=get_safe_value($con,$_POST['time']);
$hometeam=get_safe_value($con,$_POST['hometeam']);           
$awayteam=get_safe_value($con,$_POST['awayteam']);
$st_name=get_safe_value($con,$_POST['st_name']);
//echo "insert into tbl_player(p_name,age,p_email,p_phno,fee) values ('$p_name','$age','$p_email','$p_phno','$fee')";
//echo "insert into tbl_fixturemaster(date,time,hometeam,awayteam,st_name) VALUES ('$date','$time','$hometeam','$awayteam','$st_name')";

           
 if(isset($_GET['fix_id']) && $_GET['fix_id']!=''){
 $sql = "update tbl_fixturemaster set date='$date',time='$time',hometeam='$hometeam',awayteam='$awayteam', st_name='$st_name' where fix_id='$fix_id' ";

if(performQuery($sql)){
                echo "<script>alert('Fixture details are updated')</script>";
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
                
                <li class="active">
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
                <li >
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




    
 
<body class="text-center">
       <div class="content">
            <div class="container-fluid">
                <div class="row">
  <div class ="rightcolumn">
  <h2>Add Fixture</h2>

        <div class="panel panel-default">
          <div class="panel panel-default"><div class="panel-body">
            <form role="form" action="#" method="POST">
            <fieldset>
            <div class="row">
                  
                </div>
 
             <strong>Date:</strong> <input name="date" type="date" min='2020-11-21' id="date" class="form-control" placeholder="Date" required value="<?php echo $date;?>">
             
              
             <strong>Time:</strong> <input name="time" type="Time" id="time" class="form-control" placeholder="Time" required value="<?php echo $time;?>">
             <br>
        <strong>Team 1:</strong><select class="form-control" name="hometeam"  required value="<?php echo $hometeam;?>" >
                              <option>Select Team 1</option>
                              <?php
                                        $res=mysqli_query($con,"select c_id,c_name from tbl_club order by c_name asc");
                                        while($row=mysqli_fetch_assoc($res)){
                                            
                                          
                                                echo "<option value=".$row['c_name'].">".$row['c_name']."</option>";
                                            
                                            
                                        }
                                        ?>
                            </select>
             

             <strong>Team 2:</strong><select class="form-control" name="awayteam"  required value="<?php echo $awayteam;?>">
                              <option>Select Team 2</option>
                              <?php
                                        $res=mysqli_query($con,"select c_id,c_name from tbl_club order by c_name asc");
                                        while($row=mysqli_fetch_assoc($res)){
                                            // if($row['c_id']==$c_id){
                                            //     echo "<option selected value=".$row['c_id'] .$row['c_name']."</option>";
                                            // }else
                                          
                                                echo "<option value=".$row['c_name'].">".$row['c_name']."</option>";
                                            
                                            
                                        }
                                        ?>
                            </select>
         
             <strong>Stadium:</strong><select class="form-control" name="st_name"  required value="<?php echo $st_name;?>">
                              <option>Select Stadium</option>
                              <?php
                                        $res=mysqli_query($con,"select st_id,st_name from tbl_stadium order by st_name asc");
                                        while($row=mysqli_fetch_assoc($res)){
                                            
                                                echo "<option value=".$row['st_name'].">".$row['st_name']."</option>";
                                            
                                            
                                        }
                                        ?>
                            </select>
                            <br>
               
               <button name="signup" class="btn btn-lg btn-primary btn-block" type="submit">Add Fixture</button>
              

  
            </div>
                </div>
              </fieldset>
            </form>
          </div>



      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

