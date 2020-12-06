<?php
include("../Connection/Connection.php");
session_start();
$sel="select * from tbl_shop  where shop_id='".$_SESSION['sid']."'";
//echo $sel;
$data=mysql_query($sel);
$row=mysql_fetch_array($data);
if(isset($_POST["btnupdate"]))
{
	$update="update tbl_shop set shop_name='".$_POST['txtname']."',shop_phone='".$_POST['txtcontact']."',shop_email='".$_POST['txtemail']."',shop_address='".$_POST['txtaddress']."' where shop_id='".$_SESSION['sid']."'";
	mysql_query($update);
	header("Location:ViewProfile.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="356" height="196" border="1">
    <tr>
      <td width="187">Name</td>
      <td width="153"><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname"  value="<?php  echo $row['shop_name']?>"/></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txtcontact"></label>
      <input type="text" name="txtcontact"  value="<?php  echo $row['shop_phone']?>" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txtemail"></label>
      <input type="text" name="txtemail"  value="<?php  echo $row['shop_email']?>" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="txtaddress"></label>
      <textarea name="txtaddress" id="txtaddress" cols="45" rows="5"><?php  echo $row['shop_address']?></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btnupdate" id="btnupdate" value="Update" />
      <input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>