<?php 
session_start();

$rollno=$_POST['rollno'];
$name=$_POST['name'];
$adp=$_POST['adp'];
$dm=$_POST['dm'];
$ec=$_POST['ec'];
$te=$_POST['te'];
$eg=$_POST['eg'];

$conn=mysqli_connect('localhost','root','','userinfo');


$s="select * from assess1 where rollno='$rollno'";

$result=mysqli_query($conn,$s);

$num=mysqli_num_rows($result);

if($num==1)
{
	echo "Mark already updated ";
}
else{
	$reg="insert into assess1(rollno,name,adp,dm,ec,te,eg) values('$rollno','$name','$adp','$dm','$ec','$te','$eg')";
	mysqli_query($conn,$reg);
	echo "mark entered successfully";
}
mysqli_close($conn);
?>
