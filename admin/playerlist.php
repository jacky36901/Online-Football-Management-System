<!doctype html>
<html lang="zxx">


<!--  36:22-->
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets1/css/bootstrap.css">
    <link rel="stylesheet" href="assets1/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets1/css/slick-slider.css">
    <link rel="stylesheet" href="assets1/css/fancybox.css">
    <link rel="stylesheet" href="assets1/css/smartmenus.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets1/css/color.css">
    <link rel="stylesheet" href="assets1/css/responsive.css">

</head>

<body class="home">
    
    <div class="ritekhela-wrapper">

       
        <header id="ritekhela-header" class="ritekhela-header-one">
            
           
            <div class="ritekhela-main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="ritekhela-right-section">
                                <div class="ritekhela-navigation">
                                    <span class="ritekhela-menu-link">
                                        <span class="menu-bar"></span>
                                        <span class="menu-bar"></span>
                                        <span class="menu-bar"></span>
                                    </span>
                                    <nav id="main-nav">
                                        <ul id="main-menu" class="sm sm-blue">
                                            <li ><a href="index.php">Home</a></li>
                                            <li class="megamenu-wrap"><a href="fixture-list.php">Fixtures</a>
                                                
                                            </li>
                                            <li class="active"><a href="playerlist.php">Players</a>
                                                
                                            </li>
                                            <li><a href="login.php">Login</a>
                                                
                                            </li>
                                            
                                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           

        </header>
       
        <div class="ritekhela-subheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Player List</h1>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
include('connection.php');
include('function.php');
if(isset($_GET['type']) && $_GET['type']!=''){
$type=get_safe_value($con,$_GET['type']);
if($type=='delete'){
    $p_id=get_safe_value($con,$_GET['p_id']);
    $delete_sql="delete from tbl_player where p_id='$p_id'";
    mysqli_query($con,$delete_sql);
  }
}

if(!$con)
{
die("this is due to connection error".mysqli_connect_error($con));
}
else
{
      
      $selectquery="select tbl_player.*,tbl_club.c_name from tbl_player,tbl_club where tbl_player.c_id=tbl_club.c_id";
      // $selectquery="select * from tbl_player";
       $result=mysqli_query($con,$selectquery);
       if(!$result)
      {
            die("invalid query".mysqli_error($con));
       }
      else
     {
           
    ?>
<div class="content pb-0">
   <div class="orders">
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              
               
            </div>
            <div class="card-body--">
               <div class="table-stats order-table ov-h">
                 <table class="table ">
                   <thead>
                     <tr>
                        <th class="serial"></th>
                       
                        
                        <th>Firstname</th>
                        <th>Lastname</th>
                        
                        <th>DOB</th>
                       
                        <th>Position</th>
                        <th>Matches</th>
                          <th>goals</th>
                           <th>Price</th>
                           <th>Club</th>
                        
                     </tr>
                   </thead>
                   <tbody>
                     
                     <tr>
                        <?php
                         if(mysqli_num_rows($result) > 0)
           {
    $i=1; 
    while($row=mysqli_fetch_array($result))
    {

     ?>                 
       <td class="serial"></td>
                        

     
        
        <td><?php echo $row['firstname']." "; ?></td> 
      <td><?php echo $row['lastname']." "; ?></td> 
     
      <td><?php echo $row['dob']." "; ?></td> 
      
      <td><?php echo $row['position']." "; ?></td> 
      <td><?php echo $row['matches']." "; ?></td> 
      <td><?php echo $row['goals']." "; ?></td> 
     <td><?php echo $row['fee']." "; ?></td> 
     <td><?php echo $row['c_name']." "; ?></td>
     
                       
                  
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
               </div>
            </div>
          </div>
        </div>
      </div>
   </div>
</div>

       </body>
        <!--// Content //-->

        <!--// Footer //-->
        <footer id="ritekhela-footer" class="ritekhela-footer-one">

            <!--// Footer Widget //-->
            <div class="ritekhela-footer-widget">
                <div class="container">
                    <div class="row">
                       
                        <aside class="widget col-md-4 widget_twitter_feeds">
                            <div class="footer_widget_title">  </div>
                            <ul>
                                
                               
                            </ul>
                        </aside>
                        
                </div>
            </div>
            <!--// Footer Widget //-->

            <!--// Footer CopyRight //-->
            <div class="ritekhela-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           
                            <a href="#" class="ritekhela-back-top"><i class="fa fa-angle-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Footer CopyRight //-->

        </footer>
        <!--// Footer //-->

    </div>


    <!--// Login ModalBox //-->
    

    <!-- jQuery -->
    <script src="assets1/script/jquery.js"></script>
    <script src="assets1/script/popper.min.js"></script>
    <script src="assets1/script/bootstrap.min.js"></script>
    <script src="assets1/script/slick.slider.min.js"></script>
    <script src="assets1/script/fancybox.min.js"></script>
    <script src="assets1/script/isotope.min.js"></script>
    <script src="assets1/script/smartmenus.min.js"></script>
    <script src="assets1/script/progressbar.js"></script>
    <script src="assets1/script/jquery.countdown.min.js"></script>
    <script src="assets1/script/functions.js"></script>
</body>


<!-- fixture-list40:26-->
</html>