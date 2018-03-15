<?php 
 reqiure 'Connect.php';
 if(isset($_POST['SignIn'])) {
  $userID=$_POST['Userid'];
  $passwd=$_POST['Password'];
  $query1="SELECT Userid,Password FROM USER WHERE Userid='$userID' AND Password='$passwd'";
  $result=mysql_query($query1,$conn);
  if(mysql_num_rows($result) == 1) {
   $_SESSION['Userid']=$userID;
   echo("<script>window.open('SignedIn.php',_self)");
  } else {
   echo("<script>alert('Incorrect UserID or Password')</script>");
  }
?>
