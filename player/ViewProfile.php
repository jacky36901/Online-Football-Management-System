<?php
include("../Connection/Connection.php");
session_start();
$sel="select * from tbl_shop where shop_id='".$_SESSION['sid']."'";
//echo $sel;
$data=mysql_query($sel);
$row=mysql_fetch_array($data);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="364" height="188" border="1">
    <tr>
      <th width="172">Name</th>
      <td width="176"><?php  echo $row['shop_name']?></td>
    </tr>
    <tr>
      <th>Contact</th>
      <td><?php  echo $row['shop_phone']?></td>
    </tr>
    <tr>
      <th>Email</th>
      <td><?php  echo $row['shop_email']?></td>
    </tr>
    <tr>
      <th>Address</th>
      <td><?php  echo $row['shop_address']?></td>
    </tr>
  </table>
</form>
</body>
</html>