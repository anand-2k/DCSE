<html>
<head>
<style type="text/css">
.form1{
	align:center;
	width:50%;
	height:400px;;
	margin-left:350px;
	margin-top:20px;
	border: 5px solid red;
	background-color:#f1f1f1;
	padding:50px;
	background-image: url("annauniv.png");
	background-position: center;
	background-size: 150px 150px;
	background-repeat :no-repeat;
	}
.input1 {
	width:40%;
	padding:5px;
	
	
}
.input2 {
	width:20%;
    color:white;
}
</style>
</head>
<body>
<?php 
session_start(); 
include("header.php");
 ?>
<font face="comic sans ms">
<div style="background-color:lightgreen;margin-top:0px;width:100%;height:100%;  "><br><br><br>

<div class="form1">
<h1>LOG IN </h1><br><br>

<form action="validation.php" method="POST" >
USERNAME:<br>
<input type="text" name="uname" class="input1" required=""><br><br>
PASSWORD:<br>
<input type="password" name="password" class="input1" required=""><br><br>
 
 <input type="button" name="signup" value="SIGN UP" onClick="location.href='form.php'" style="background-color:red;font-family:comic sans ms; height:50px;" class="input2">
  <input type="submit" name="signin" value="SIGN IN" onClick="location.href='validation.php'" style="background-color:green;font-family:comic sans ms; height:50px;" class="input2">

</form>
</div>
</div>
<?php
include("footer.php");
?>
</body>