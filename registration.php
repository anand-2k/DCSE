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
$name=$_POST['uname'];
$pass=$_POST['password'];
$conn=mysqli_connect('localhost','root','','userinfo');


$s="select * from logindesk where username='$name'";

$result=mysqli_query($conn,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
	echo "USERNAME ALREDY EXISTS ";
}
else{
	$reg="insert into logindesk(username,password) values('$name','$pass')";
	mysqli_query($conn,$reg);
	echo "REGISTRATION SUCCESSFULL";
}
mysqli_close($conn);
?>

 <input type="button" name="login" value="LOGIN" onClick="location.href='login.php'" style="background-color:GREEN;font-family:comic sans ms;" class="input2">

</div>
</body>
</html>