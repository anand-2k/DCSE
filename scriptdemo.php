<html>
<head>
<title>
Oracle demo</title></head>
<body>
<?php
$conn=oci_connect("username","password","localhost/service_name");
if(!conn)
	echo 'Failed to connect Oracle';
else
	echo 'Successsfully connected with Oracle DB';
	
oci_close($conn);
?>
</body>
</html>