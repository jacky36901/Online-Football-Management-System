

<!DOCTYPE html>
<html>
<head>
	<title>pay</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/pay.css?v=<?php echo time();?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<style>
.address form table tr td{
	padding: 9px;
}
</style>
    

</head>
<body>
	
		<div class="pay-con ">
			<h1 class="hd">PAYMENT</h1>
<div class="con1">		
			
	
	 

</div>
<div class="con2">
	<div class="address">


	</div>
	<div class="item3">
     <div class="form">
     	<form method="post">
     <div class="inl">
 
          <br><br>
         &nbsp; &nbsp;<input type="radio" name="ty" value="debit" required> &nbsp;&nbsp;<label>Debit</label>
         
         <input type="radio" name="ty" value="credit">&nbsp;&nbsp;<label>Credit</label>
   
      </div>
       
        <br><br>

        <img src="image/card1.png" width="30px">
        <img src="image/card2.png" width="30px">
        <img src="image/card3.png" width="30px">

       
       
    <div class="grp">
      
     
        Name on Card<input type="text" class="input" placeholder="Name on card" name='name' value="<?php if(isset($gna))echo $gna; ?>"  required>
       
     
  
     
        Card Number
      <!--   <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="Card Number" name='number' required> --> 
         <input type="text" name="number" data-mask="0000 0000 0000 0000"  class="input" placeholder="Card Number" value="<?php if(isset($gno))echo $gno; ?>" required><br /><div style="color: red;font-size:14px;"><?php if(isset($g)){echo $g;}?></div>
  <!--   <img src="other.png" id="img" style="padding:5px;" /><br /> -->
      

        <?php 

?>
   

       <div class="cvv">
       
       <div class="cvv1">
            Expiry Date<input type="text"  class="input" data-mask="00/0000"  placeholder="00 / 0000" name='date' value="<?php if(isset($gda))echo $gda; ?>"  required>
              <div style="color: red;font-size:12px; "><?php if(isset($a)){ echo $a;}?>
                                          <?php if(isset($e1)){echo $e1;}?> </div> 
     <!--        <input type="month" id="start" name="date"
       min="2018-03" value="2018-05">  -->
        </div>  
      
        <div class="cvv1">  
            CVV<input type="password" class="input" data-mask="000" placeholder="000" name='cvv' required>
         </div>

       </div>
        </div>
         <div>
         	<!-- <input type="text" name="tot" value="<?PHP echo $rate?>" hidden> -->
          
       <button class="p-bt" type="submit" name="p-bt">Pay</button>
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