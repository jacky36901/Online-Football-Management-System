<?php
include('connection.php');
include('function.php');

      
      $selectquery="select * from tbl_transfermaster";
       //$selectquery="select  tbl_fixturemaster.*,tbl_stadium.st_name where tbl_fixturemaster.st_id=tbl_stadium.st_id";
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
<script>
        function printDiv(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;

        }
    </script>
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
                <li class="active">
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
                  <li >
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
            <div id='printMe'> 
  
            <div class="card-body">
               <h4 class="box-title">&nbsp&nbspTransfer Report 
                              </h4>
               
            </div>

            <div class="card-body--">
               <div class="table-stats order-table ov-h">
                 <table class="table ">
                   <thead>
                     <tr>
                        <th class="serial"></th>
                         <th>TransferID</th>
                        <th>PlayerID</th>
                        <th>Player Name</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Date</th>
                        <th>Price</th>
                        
                         
                        
                     </tr>
                   </thead>
                   <tbody>
                     
                     <tr>
                        <?php
                        // $p="";
                         if(mysqli_num_rows($result) > 0)
           {
    $i=1; 
    while($row=mysqli_fetch_array($result))
    {
        $p=$row['p_id'];
        $c_id1=$row['fromid'];
        $c_id2=$row['toid'];
        $sltqry="select firstname,lastname,fee from tbl_player where p_id=$p";
        $res=mysqli_query($con,$sltqry);
         if(mysqli_num_rows($res) > 0)
           { while($ro=mysqli_fetch_array($res)){
        $sltqry1="select c_name from tbl_club where c_id=$c_id1";
        $res1=mysqli_query($con,$sltqry1);
         if(mysqli_num_rows($res1) > 0)
           { while($ro1=mysqli_fetch_array($res1)){
        $sltqry2="select c_name from tbl_club where c_id=$c_id2";
        $res2=mysqli_query($con,$sltqry2);
         if(mysqli_num_rows($res2) > 0)
           { while($ro2=mysqli_fetch_array($res2)){

            



     ?>                 
       <td class="serial"></td>
                        

     <td><?php echo $row['ta_id']." "; ?></td> 
        <td><?php echo $p." "; ?></td> 
        <td><?php echo $ro['firstname']." ".$ro['lastname']; ?></td>  
       <td><?php echo $ro1['c_name']." "; ?></td>  
      <td><?php echo $ro2['c_name']." "; ?></td> 
      <td><?php echo $row['date']." "; ?></td> 
       <td><?php echo $ro['fee']." "; ?></td>
       
       
      
                  
                    </tr>
              <?php
                    $i++;
}}
}}
                    }}
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
            </div>
          </div>
        </div>
      </div><button class="btn btn-sm btn-secondary" onclick="printDiv('printMe')">Print </button>
   </div>
</div>
</div>

        <!-- <input type="button" class="btn btn-sm btn-secondary " onClick="window.print()" value="Print The Report"/> -->
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
