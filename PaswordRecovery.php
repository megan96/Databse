<!DOCTYPE html>
<html>
<head>
 <title>Password Recovery</title>
 <style>
  .PasswordRecovery {
  	position: fixed; 
  	margin: 10% 25%;
  	width: 600px; 
  	height: 220px; 
  	background-color: #162347; 
  	border: 8px solid #537fbb;
  }
 </style>
</head>
<body style="background-color:#ffeeb0">
 <h1><center>PASSWORD RECOVERY</h1>
<form method="post">
 <div class="PasswordRecovery"> 
  <h2 style="color:white;font-weight:bold">Recover Password</h2>
  <label style="color:white;font-weight:bold">User_ID</label>
  <input type="text" placeholder="Enter User_ID" style="background-color:white;width:200px;margin:5px 5px 5px 50px" name="UserID"><br>
  <label style="color:white;font-weight:bold">E-mail</label>
  <input type="text" placeholder="Enter E-mail" style="background-color:white;width:200px;margin:5px 5px 5px 60px" name="Email"><br>
  <button type="submit" style="margin:0px 0 0 500px" name="Check">Submit</button>
 </div>
 <?php
 require 'Connect.php';
?>
</form>
</body>
</html>
