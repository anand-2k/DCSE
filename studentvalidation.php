<?php 
session_start();
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$conn=mysqli_connect('localhost','root','','userinfo');


$s="select * from studentlogindesk where rollno='$rollno' && user='$name'";

$result=mysqli_query($conn,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['name']=$name;
	$_SESSION['rollno']=$rollno;
	header('location:studenthome.php');
}
else{
	header('location:studentlogin.php');
}
mysqli_close($conn);
?>