<html><html>
<head> <style>
.form1{
	align:center;
	width:50%;
	height:500px;
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
	
.table1{
	color:blue;
	width:100%;
	height:100%;
	border: 3px solid red;
	background-color: ;

	
}
td{
	padding:15px;
}
	
	</style>
	</head>
	<body style="background-color:lightgreen;">
<?php
require("studentlogout.php");

session_start();
$rollno=$_SESSION['rollno'];
$conn=mysqli_connect('localhost','root','','userinfo');

$s="select * from assess2 where rollno='$rollno'";
$result=mysqli_query($conn,$s);
if(mysqli_num_rows($result)>0) {
while($row=mysqli_fetch_assoc($result)){
$a1=$row["name"];
$a2=$row["adp"];
$a3=$row["dm"];
$a4=$row["ec"];
$a5=$row["te"];
$a6=$row["eg"];
}
}

?>
<font face="comic sans ms">
<?php  include('header.php') ?>
<div class="form1">
<table class="table1" border="2"> 
<form>
<tr><td>
Name<br><br></td>
<td><?php echo $a1; ?><br><br>
<tr><td>A.D.P<br><br>
<td><?php echo $a2; ?><br><br>
<tr><td>Discrete Mathematics<br><br>
<td><?php echo $a3; ?><br><br>
<tr><td>Engineering Chemistry<br><br>
<td><?php echo $a4; ?><br><br>
<tr><td>Technical English<br><br>
<td><?php echo $a5; ?><br><br>
<tr><td>Engineering Graphics<br><br>
<td><?php echo $a6; ?><br><br>

</form>
</table>
</div>
<?php  include('footer.php') ?>

</html>