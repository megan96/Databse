<?php
 require 'Connect.php';
 if(isset($_POST['SignIn'])) {
  $userID=$_POST['Userid'];
  $passwd=$_POST['Password'];
  $query0="SELECT Userid,Password FROM USER WHERE Userid='$userID' AND Password='$passwd'";
  $result0=mysqli_query($conn,$insert);
  if($result0) {
   echo("<script>window.open('SignedIn.php');</script>");
 }
}
?>
