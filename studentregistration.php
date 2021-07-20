<html>
<head>
<style type="text/css">
.input2 {
	width:20%;
    color:white;
}
</style>
</head>
<body>

<?php 
session_start();
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$conn=mysqli_connect('localhost','root','','userinfo');


$s="select * from studentlogindesk where rollno='$rollno'";

$result=mysqli_query($conn,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
	echo "USER ALREDY EXISTS ";
}
else{
	$reg="insert into studentlogindesk(rollno,user) values('$rollno','$name')";
	mysqli_query($conn,$reg);
	echo "REGISTRATION SUCCESSFULL";
}
mysqli_close($conn);
?>

 <input type="button" name="login" value="LOGIN" onClick="location.href='studentlogin.php'" style="background-color:GREEN;font-family:comic sans ms;" class="input2">

</div>
