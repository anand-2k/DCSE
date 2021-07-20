<?php 
session_start();
?>
<html>
<head>
<style>
.form1{
	align:center;
	
	height:600px;
	background-color:#f1f1f1;
	padding:50px;
	background-image: url("annauniv.png");
	background-position: center;
	background-size: 350px 350px;
	background-repeat :no-repeat;
	}
	.button1 {
	color:green;
	background-color:orange; 
	border:2px solid black;
	width:200px;
	height:40px; 
	font-family:comic sans ms; 
	font-size: 20px;
	}		
	
	
	</style>
</head>
<body>
<?php require("header.php");
require ("stafflogout.php");

 ?>
 <font face="comic sans ms">
<div style=" height: 600px;" class="form1"> 
<h1> WELCOME TO UR OFFICIAL DCSE PAGE.....      
<?php 
echo  $_SESSION['user'] ;
 ?> 
 <br><br>Select any one of the below 
</h1>
<br><br>
<div style="align=center;">
<input type="button" name="assess1"  onClick="location.href='assess1.php'" value="Assessment 1 " class="button1"><br><br>
<input type="button" name="assess2" onClick="location.href='assess2.php'" value="Assessment 2" class="button1" ><br><br>
<input type="button" name="sem" onClick="location.href='sem.php'" value="Semester 1" class="button1"><br>
</div>
</div>

<?php require("footer.php"); ?>
</body>