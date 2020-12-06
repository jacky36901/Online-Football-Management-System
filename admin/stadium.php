<?php
include("Connection.php");
include('function.php');
if(isset($_POST['btnsave']))
{
	$st_name=$_POST['st_name'];
	$city=$_POST['city'];
	$ins="insert into tbl_stadium (st_name,city) values ('$st_name','$city')";
	//echo $ins;
	mysqli_query($con,$ins);
}
if(isset($_GET['type']) && $_GET['type']!=''){
$type=get_safe_value($con,$_GET['type']);
if($type=='delete'){
    $st_id=get_safe_value($con,$_GET['st_id']);
    $delete_sql="delete from tbl_stadium where st_id='$st_id'";
    mysqli_query($con,$delete_sql);
  }
}
if(!$con)
{
die("this is due to connection error".mysqli_connect_error($con));
}
else
{
 $selectquery="select * from tbl_stadium";
      
       $result=mysqli_query($con,$selectquery);
       if(!$result)
      {
            die("invalid query".mysqli_error($con));
       }
      else
     {

?>
<html>
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
  <h2>Add Stadium</h2>

        <div class="panel panel-default">
          <div class="panel panel-default"><div class="panel-body">
            <form role="form1" action="#" method="POST">
            <fieldset>
            <div class="row">
                  
                </div>


<table>
              <tr><td>
             <strong>Stadium Name:</strong> <input name="st_name" type="text" id="st_name" class="form-control" placeholder="Stadium Name" required autofocus>
                </td></tr>
               <tr><td>
             <strong>Location:</strong> <input name="city" type="text" id="city" class="form-control" placeholder="Location" required autofocus>
              </td></tr>
              <tr><td>
                 <br>
       
              <button name="btnsave" class="btn btn-lg btn-primary btn-block" id="btnsave" type="submit">Add Stadium</button>
</td></tr></table></fieldset>
</form>
<table class="table ">
                   <thead>
                     <tr>
                        <th class="serial"></th>
                         
                        <th>Stadium Name</th>
                        <th>Location</th>
                        
                         
                        
                     </tr>
                   </thead>
                   <tbody>
                    <?php
                         if(mysqli_num_rows($result) > 0)
           {
    $i=1; 
    while($row=mysqli_fetch_array($result))
    {

     ?>                 
       <td class="serial"></td>
                        

     <td><?php echo $row['st_name']." "; ?></td> 
        <td><?php echo $row['city']." "; ?></td>  
      
      <td> 
      <?php
      echo "<span class='badge badge-edit'><a href='editstadium.php?st_id=".$row['st_id']."'>Edit</a></span>&nbsp;";
     echo "<span class='badge badge-delete'><a href='?type=delete&st_id=".$row['st_id']."'>Delete</a></span>";
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
                         
}
                    ?>
                   </tbody>
                 </table>
</body>
</html>
