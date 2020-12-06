<?php
include("Connection.php");
include("functions.php");
include("function.php");

if(isset($_GET['type']) && $_GET['type']!=''){
$type=get_safe_value($con,$_GET['type']);
if($type=='delete'){
    $fix_id=get_safe_value($con,$_GET['fix_id']);
    $delete_sql="delete from tbl_fixturemaster where fix_id='$fix_id'";
    mysqli_query($con,$delete_sql);
  }
}

$fix_id="";
$date="";
$time="";
$hometeam="";         
$awayteam="";
$st_name="";
$msg="";


if(isset($_POST['signup']))
{
$date=$_POST['date'];
$time=$_POST['time'];
$hometeam=$_POST['hometeam'];           
$awayteam=$_POST['awayteam'];
$st_name=$_POST['st_name'];
//echo "insert into tbl_player(p_name,age,p_email,p_phno,fee) values ('$p_name','$age','$p_email','$p_phno','$fee')";
//echo "insert into tbl_fixturemaster(date,time,hometeam,awayteam,st_name) VALUES ('$date','$time','$hometeam','$awayteam','$st_name')";

           if($fix_id==''){
        $query="select * from tbl_fixturemaster where date='$date'";
    }else{
         $query="select * from tbl_fixturemaster where date='$date' and fix_id!='$fix_id'";
    }    
    if(mysqli_num_rows(mysqli_query($con,$query))>0){
   $msg="FIXTURE EXISTS";
     }
     else{
     if($fix_id==''){
	$ins="insert into tbl_fixturemaster(date,time,hometeam,awayteam,st_name) VALUES ('$date','$time','$hometeam','$awayteam','$st_name')";
	mysqli_query($con,$ins) or die(mysqli_error($con)); 

	}}
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

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
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
  <h2>Add Fixture</h2>

        <div class="panel panel-default">
          <div class="panel panel-default"><div class="panel-body">
            <form role="form" action="#" method="POST">
            <fieldset>
            <div class="row">
                  
                </div>
 
             <strong>Date:</strong> <input name="date" type="date" min='2020-11-23' id="date" class="form-control" placeholder="Date" required autofocus>
             
              
             <strong>Time:</strong> <input name="time" type="Time" id="time" class="form-control" placeholder="Time" required autofocus>
             <br>
        <strong>Team 1:</strong><select class="form-control" name="hometeam">
                              <option>Select Team 1</option>
                              <?php
                                        $res=mysqli_query($con,"select c_id,c_name from tbl_club order by c_name asc");
                                        while($row=mysqli_fetch_assoc($res)){
                                            
                                          
                                                echo "<option value=".$row['c_name'].">".$row['c_name']."</option>";
                                            
                                            
                                        }
                                        ?>
                            </select>
             

             <strong>Team 2:</strong><select class="form-control" name="awayteam">
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
         
             <strong>Stadium:</strong><select class="form-control" name="st_name">
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
               <?php echo $msg ?>

  
            </div>
                </div>
              </fieldset>
            </form>
            <?php
              $selectquery="select * from tbl_fixturemaster";
      
          $result1=mysqli_query($con,$selectquery);
          if(!$result1)
         {
            die("invalid query".mysqli_error($con));
           }
         else
        {
            ?>
            <table class="table ">
                   <thead>
                     <tr>
                        <th class="serial"></th>
                         <th>ID</th>
                        <th>Hometeam</th>
                        <th>Awayteam</th>
                        <th>st_name</th>
                        <th>Time</th>
                        <th>Date</th>
                        
                         
                        
                     </tr>
                   </thead>
                   <tbody>
                     
                     <tr>
                        <?php
                         if(mysqli_num_rows($result1) > 0)
           {
    $i=1; 
    while($row1=mysqli_fetch_array($result1))
    {

     ?>                 
       <td class="serial"></td>
                        

     <td><?php echo $row1['fix_id']." "; ?></td> 
        <td><?php echo $row1['hometeam']." "; ?></td> 
      <td><?php echo $row1['awayteam']." "; ?></td> 
      <td><?php echo $row1['st_name']." "; ?></td> 
      <td><?php echo $row1['time']." "; ?></td> 
      <td><?php echo $row1['date']." "; ?></td> 
      
      <td> 
      <?php
      echo "<span class='badge badge-edit'><a href='editfixture.php?fix_id=".$row1['fix_id']."'>Edit</a></span>&nbsp;";
     echo "<span class='badge badge-delete'><a href='?type=delete&fix_id=".$row1['fix_id']."'>Delete</a></span>";
     ?>
   </td>
                  
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
                         

                    ?>
                   </tbody> 
                 </table>
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
