<?php 
session_start();
$name=$_POST['uname'];
$pass=$_POST['password'];
$conn=mysqli_connect('localhost','root','','userinfo');


$s="select * from logindesk where username='$name'&& password='$pass' ";

$result=mysqli_query($conn,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['user']=$name;
	header('location:home.php');
}
else{
	header('location:login.php');
}
mysqli_close($conn);
?>