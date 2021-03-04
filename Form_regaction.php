<?php
include("connection.php");
//echo "hello";
if(isset($_POST['submit']))
{
  $email=$_POST["Email"];
  echo $email;
  $pass=$_POST["Password"];
  echo $pass;
  $sql="Insert into tb_reg(email,password) values('$email','$pass')";
  $obj=new db();
  $obj->execute($sql);
}
 ?>
