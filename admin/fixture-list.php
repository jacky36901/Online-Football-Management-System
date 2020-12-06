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
                                            <li class="active"><a href="fixture-list.php">Fixtures</a>
                                                
                                            </li>
                                            <li><a href="playerlist.php">Players</a>
                                                
                                            </li>
                                            <li><a href="login.php">Login</a>
                                                
                                            </li>
                                           <!--  <li><a href="#">Gallery</a>
                                                
                                            </li> -->
                                            
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
                        <h1>Fixture List</h1>
                        
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader //-->

        <!--// Content //-->
        <?php
include('connection.php');
include('function.php');
if(isset($_GET['type']) && $_GET['type']!=''){
$type=get_safe_value($con,$_GET['type']);
if($type=='delete'){
    $fix_id=get_safe_value($con,$_GET['fix_id']);
    $delete_sql="delete from tbl_fixturemaster where fix_id='$fix_id'";
    mysqli_query($con,$delete_sql);
  }
}
if(!$con)
{
die("this is due to connection error".mysqli_connect_error($con));
}
else
{
      
      $selectquery="select * from tbl_fixturemaster";
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

            <div class="card-body--">
               <div class="table-stats order-table ov-h">
                 <table class="table ">
                   <thead>
                     <tr>
                        <th class="serial"></th>
                         
                        <th>Hometeam</th>
                        <th>Awayteam</th>
                        <th>Stadium Name</th>
                        <th>Time</th>
                        <th>Date</th>
                        
                         
                        
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
                        

     
        <td><?php echo $row['hometeam']." "; ?></td> 
      <td><?php echo $row['awayteam']." "; ?></td> 
      <td><?php echo $row['st_name']." "; ?></td> 
      <td><?php echo $row['time']." "; ?></td> 
      <td><?php echo $row['date']." "; ?></td> 
      
      
                  
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