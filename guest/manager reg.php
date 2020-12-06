<?php
include("../Connection/Connection.php");

if(isset($_POST['btnsave']))
{
	$ins="insert into tbl_volunteer(place_id,volunteer_name,volunteer_phone,volunteer_email,volunteer_address,volunteer_username,volunteer_password,volunteer_status) values('".$_POST['txtslctplace']."','".$_POST['txtvolunteername']."','".$_POST['txtcontact']."','".$_POST['txtemail']."','".$_POST['txtaddress']."','".$_POST['txtusername']."','".$_POST['txtpassword']."',0)";
	echo $ins;
	mysql_query($ins);
}

?>
<html>
<head>
</head>

<body>

<form id="form1" name="form1" method="post" action="">
<table width="534" height="429" border="1" align="center">
  <tr>
    <td width="133"> Name</td>
    <td width="385">
      <label for="txtvolunteername"></label>
      <input type="text" name="txtvolunteername" id="txtvolunteername" />
    </td>
  </tr>
  <tr>
    <td>Phone</td>
    <td>
      <label for="txtcontact"></label>
      <input type="text" name="txtcontact" id="txtcontact" />
   </td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td>
      <label for="txtemail"></label>
      <input type="text" name="txtemail" id="txtemail" />
   </td>
  </tr>
  <tr>
    <td>Address</td>
    <td>
      <label for="txtaddress"></label>
      <textarea name="txtaddress" id="txtaddress" cols="45" rows="5"></textarea>
   </td>
  </tr>
  <tr>
    <td>Username</td>
    <td>
      <label for="txtusername"></label>
      <input type="text" name="txtusername" id="txtusername" />
      </td>
  </tr>
  <tr>
    <td>Password</td>
    <td>
      <label for="txtpassword"></label>
      <input type="password" name="txtpassword" id="txtpassword" />
   </td>
  </tr>
  <tr>
    <td height="59" colspan="2" align="center">
      <input type="submit" name="btnsave" id="btnsave" value="Save" />
   
     <input type="reset" name="btncancel" id="btncancel" value="Cancel" />
   </td>
  </tr>
</table>
</form>
</body>
</html>