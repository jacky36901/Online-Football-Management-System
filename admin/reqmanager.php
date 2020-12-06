<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
    include("function.php");
    include("connection.php");
    if($_SESSION['login']!==true){
        header('location:login.php');
    }
    if(isset($_GET['type']) && $_GET['type']!=''){
   $type=get_safe_value($con,$_GET['type']);
    if($type=='delete'){
      $p_id=get_safe_value($con,$_GET['p_id']);
      $delete_sql="delete from tbl_transfer where p_id='$p_id'";
      mysqli_query($con,$delete_sql);
      $delete_sql1="delete from tbl_transfermaster where p_id='$p_id'";
      mysqli_query($con,$delete_sql1);
   }}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pending Request </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>

  <body>

    <header>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            
          </a>
            <div class="pull-right">
                <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header('location:home.php');
                }
    
                ?>
                <form method="post">
                    <button name="logout" class="btn btn-danger my-2">Logout</button>
                </form>
            </div>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
            <?php
            
            $m_id="";
            $a_id="";
            $c_name="";
            $firstname="";
            $lastname="";
            $qry="select m_id from tbl_manager";
            mysqli_query($con,$qry);
            $r=$_SESSION['m_id'];
            
                $query = "select * from tbl_transfer ";

                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                      $a_id=$row['acceptid'];
                      $r_id=$row['requestid'];

                    $query1 = "select c_name from tbl_club where m_id='$r_id' ";

                if(count(fetchAll($query1))>0){
                    foreach(fetchAll($query1) as $row1){
                      $c_name=$row1['c_name'];
                     
                      
                          $query2 = "select firstname,lastname from tbl_manager where m_id='$r_id' ";

                if(count(fetchAll($query2))>0){
                    foreach(fetchAll($query2) as $row2){
                      $firstname=$row2['firstname'];
                      $lastname=$row2['lastname'];
                      if($r==$a_id)
                        {
                        ?>
                        
                
                    <h1 class="jumbotron-heading">PlayerID:<?php echo $row['p_id'] ?></h1>

                    <h2 class="jumbotron-heading">RequestedManagerID:<?php echo $row['requestid'] ?></h2>
                    <h2 class="jumbotron-heading">Manager:<?php echo $row2['firstname']."".$row2['lastname'] ?></h2>
                    <h2 class="jumbotron-heading">Club:<?php echo $row1['c_name'] ?></h2>
                    <tr>
                      <span class='badge badge-edit'><a href=tracc.php?m_id=<?php echo "{$row['p_id']},{$row['requestid']},{$row['c_id']}"; ?> >Accept</a></span>&nbsp;
                    <?php

                    
                    //echo "<span class='badge badge-edit'><a href='#?p_id=".$row['p_id']."'>Accept</a></span>&nbsp;";
                        
                        echo "<span class='badge badge-delete'><a href='?type=delete&p_id=".$row['p_id']."'>Reject</a></span>";
                    }}
                    }}
                                          }
                    }
                }else{
                    echo "No  Requests.";
                }
            ?>
          </tr>
        </div>
          
      </section>

    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
