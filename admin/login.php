<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
    include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Signin </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
  body{
  background-image: url(assets/img/img3.jpg);
    background-size:cover;
    background-repeat: no-repeat;

            width: 100%;
            height: 100%;
}

</style>
  </head>

  <body class="text-center">
      <?php
      
        if(isset($_POST['signin'])){
            $password = $_POST['password'];
            $email = $_POST['email'];
            
            $query = "SELECT * from `tbl_login`;";
            if(count(fetchAll($query)) > 0){ //this is to catch unknown error.
                  foreach(fetchAll($query) as $row){
                    if($row['email']==$email&&$row['password']==$password&&$row['type']=='admin'){
                        $_SESSION['login'] = true;
                        $_SESSION['type'] = $row['type'];
                        header('location:dashboard.php');
                    }
                   else if($row['email']==$email&&$row['password']==$password&&$row['type']=='user'){
                        

                        $_SESSION['login'] = true;
                        $_SESSION['type'] = $row['type'];
                           $sql="select * from tbl_manager where email='$email' ";
                            $res=mysqli_query($con,$sql);
                            $total=mysqli_num_rows($res);
                            while($row=mysqli_fetch_assoc($res))
                              
                        
                        {
                                $_SESSION['m_id'] = $row['m_id'];
                                $_SESSION['email'] = $email;  
                                $_SESSION['firstname'] = $row['firstname'];
                                $_SESSION['lastname'] = $row['lastname'];
                                $_SESSION['contact'] = $row['contact'];
                                $_SESSION['dob'] = $row['dob'];
                                $_SESSION['housename'] = $row['housename'];
                                $_SESSION['street'] = $row['street'];
                                $_SESSION['pincode'] = $row['pincode'];
                                $_SESSION['state'] = $row['state'];
                                $_SESSION['password'] = $row['password'];
                          header('location:managerindex.php');
                        }
                        }
                else if($row['email']==$email&&$row['password']==$password&&$row['type']=='player')
                {
                        $_SESSION['login'] = true;
                        $_SESSION['type'] = $row['type'];
                        $sql="select * from tbl_player where email='$email' ";
                            $res=mysqli_query($con,$sql);
                            $total=mysqli_num_rows($res);
                            while($row=mysqli_fetch_assoc($res))
                              
                        
                        {
                                $_SESSION['p_id'] = $row['p_id'];
                                $_SESSION['email'] = $email;  
                                $_SESSION['firstname'] = $row['firstname'];
                                $_SESSION['lastname'] = $row['lastname'];
                                $_SESSION['contact'] = $row['contact'];
                                $_SESSION['dob'] = $row['dob'];
                                $_SESSION['housename'] = $row['housename'];
                                $_SESSION['street'] = $row['street'];
                                $_SESSION['state'] = $row['state'];
                                $_SESSION['pincode'] = $row['pincode'];
                                $_SESSION['position'] = $row['position'];

                               
                        header('location:playerindex.php');}
                    
                }
                    else{
                        echo "<script>alert('Wrong login details.')</script>";
                        

                    }
                }
            }else{
                echo "<script>alert('Error.')</script>";
            }

        }
      
      ?>
      <div class="container">
            <form method="post" class="form-signin">
             <!--  <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
             <center><table>
              <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                
                <center><table>
              <tr><td>
              <label for="inputEmail" class="sr-only">Email address</label>
              <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><br>
              <label for="inputPassword" class="sr-only">Password</label>
              <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
             <br>
              <button name="signin" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
              <br>
              <a href="signup.php" class="btn btn-sm btn-secondary">REGISTER AS MANAGER</a> &nbsp;  
              <a href="index.php" class="btn btn-sm btn-secondary">BACK</a>
            </td></tr>
              </table></center></form>
          </div>
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
