<html>
<head><style>
.form1{
	align:center;
	width:50%;
	height:auto;
	margin-left:350px;
	margin-top:30px;
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
	width:40%;
    color:white;
	background-color:green;
	font-family:comic sans ms;
}
</style>
</head>
<font face="comic sans ms">
<body>
<?php  
session_start();
require("header.php") ;
require ("stafflogout.php");
?>
<div style="background-color:palegoldenrod;margin-top:0px;width:100%;height:1000px;  "><br><br><br><br>

<div class="form1">
<form action="assess2table.php" method="POST">
ROLL NO. <br>
<input type="text" name="rollno" class="input1" ><br><br>
NAME <br>
<input type="text" name="name" class="input1" ><br><br>
ADP <br>
<input type="text" name="adp" class="input1" ><br><br>
DISCRETE MATHEMATICS <br>
<input type="text" name="dm" class="input1" ><br><br>
ENGINEERING CHEMISTRY <br>
<input type="text" name="ec" class="input1" ><br><br>
TECHNICAL ENGLISH <br>
<input type="text" name="te" class="input1"><br><br>
ENGINEERING GRAPHICS <br>
<input type="text" name="eg" class="input1"><br><br>
<input type="submit" name="submit" value="SUBMIT" onClick="location.href='assess2table.php'" class="input2"><br><br>
</div>
</div>
<?php  require("footer.php") ;?>
</body>