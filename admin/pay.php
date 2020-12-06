<?php
include("functions.php");
include("function.php");
include("connection.php");

$arr=explode(',', $_GET['p_id']);
$pid=$arr[0];
$sql="select fee,p_id from tbl_player where p_id='$pid'";
//$sql="select tbl_transfermaster.*,tbl_player.fee from tbl_transfermaster,tbl_player where tbl_transfermaster.p_id=tbl_player.p_id ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0)
           {
  while($row=mysqli_fetch_array($result))
  {
$f=$row['fee'];
$p=$row['p_id'];
}}
$name="";
$number="";
$ty="";
$date="";
$cvv="";
  

?>
<!DOCTYPE html>
<html>
<head>
	<title>pay</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="C:\wamp64\www\Football Club\admin\assets\css\pay.css?v=<?php echo time();?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<style>
.address form table tr td{
	padding: 9px;
}
</style>
    

</head>
<body class="text-center">
	
		<div class="pay-con ">
			<h1 class="hd">PAYMENT</h1>
<div class="con1">		
			
	
	 

</div>
<div class="con2">
	<div class="address">


	</div>
	<div class="item3">
     <div class="form">
     	<form method="post" action=sucess.php?p_id=<?php echo "{$p}";?> >
     <div class="inl">
 
          <br><br>
         &nbsp; &nbsp;<input type="radio" name="ty" value="debit" required> &nbsp;&nbsp;<label>Debit</label>
         
         <input type="radio" name="ty" value="credit">&nbsp;&nbsp;<label>Credit</label>
   
      </div>
       
        <br><br>

        <img src="assets\img\card1.jpeg" width="50px">
        <img src="assets\img\card2.jpeg" width="30px">
        <img src="assets\img\card3.jpeg" width="30px">

       
       
    <div class="grp">
      <br>
      <tr>Amount<input type="number" class="input"  name='amount' value="<?php echo $f; ?>"  readonly ></tr>
     <br><br>
       <tr><td> Name on Card<input type="text" class="input" placeholder="Name on card" name='name'     required>
      </td> 
     </tr>
  <tr><td>
      
        Card Number
      
         <input type="text" name="number" data-mask="0000 0000 0000 0000"  class="input" placeholder="Card Number" value="<?php if(isset($gno))echo $gno; ?>" required><br /><div style="color: red;font-size:14px;"><?php if(isset($g)){echo $g;}?></div>
  <!--   <img src="other.png" id="img" style="padding:5px;" /><br /> -->
      
</td> 
     </tr>
          <br>  
   <tr>

       <div class="cvv">
       
       <div class="cvv1">
            Expiry Date<input type="text"  class="input" data-mask="00/0000"  placeholder="00 / 0000" name='date' value="<?php if(isset($gda))echo $gda; ?>"  required>
              <div style="color: red;font-size:12px; "><?php if(isset($a)){ echo $a;}?>
                                          <?php if(isset($e1)){echo $e1;}?> </div> 
     <!--        <input type="month" id="start" name="date"
       min="2018-03" value="2018-05">  -->
        </div>  </tr>
        &nbsp;
      
        <div class="cvv1">  
            CVV<input type="password" class="input" data-mask="000" placeholder="000" name='cvv' required>
         </div>

       </div>
        </div>
         <div>
         	&nbsp;
          <br>
          
       <button name=submit> PAY </button>
      </div>

  </form>
      </div>

         </div>
      </div> 
      
    </div>

	</div>
</div>
<div class="item3">

</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
	<?php



?>
</body>
</html>