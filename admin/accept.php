<?php
    include('functions.php');
    $id = $_GET['id'];
    $query = "select * from requests where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $contact = $row['contact'];
            $dob = $row['dob'];
            $housename = $row['housename'];
            $street = $row['street'];
            $state=$row['state'];
            $pincode = $row['pincode'];
            $password = $row['password'];
            
            $query = "INSERT INTO `tbl_login` (`id`, `firstname`, `lastname`, `email`, `type`, `password`) VALUES (NULL, '$firstname', '$lastname', '$email', 'user', '$password');";

            $query1= "INSERT INTO `tbl_manager` ( `m_id`,`firstname`, `lastname`, `email`, `contact`,`dob`,`housename`,`street`,`state`,`pincode`, `password`) VALUES ( NULL, '$firstname', '$lastname', '$email', '$contact', '$dob','$housename','$street','$state','$pincode', '$password');";

        }
        $query .= "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";

       
        if(performQuery($query)){
            echo "Account has been accepted";
        }else{
            echo "Unknown error occured. Please try again.";
        }
         if(performQuery($query1)){
             echo ".";
         }else{
             echo "Unknown error occured. Please try again.";
         }
    }
    
?>
<br/><br/>
<a href="home.php">Back</a>