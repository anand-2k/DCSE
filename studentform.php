<html>
<head>
<style type="text/css">
.form1{
	align:center;
	width:50%;
	height:50%;
	margin-left:350px;
	margin-top:100px;
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
<body style="background-color:lightsalmon;">
<?php  
session_start();
include("header.php");


 ?>
<font face="comic sans ms">
<div class="form1">
<h1>SIGN UP</h1><br><br>

<form action="studentregistration.php" method="POST" >
Roll No:<br>
<input type="text" name="rollno" class="input1" required><br><br>
Name:<br>
<input type="text" name="name" class="input1" required><br><br>
 
 <input type="button" name="cancel" value="CANCEL" onClick="location.href='studentlogin.php'" style="background-color:red;font-family:comic sans ms;" class="input2">
 <input type="submit" name="register" value="REGISTER"  onClick="location.href='studentregistration.php'" style="background-color:green;font-family:comic sans ms;" class="input2">

 
</form>

</div>
<?php
include("footer.php");
?>
</body>
