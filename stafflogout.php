<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border-width:2px;
}
li a {
  display: inline;
  width: 60px;
  text-decoration:none;
}
</style>
</head>
<body>
<div style="height:30px; width:100%; background-color:sandybrown;">
<ul>
<li><a href="" id="d1" style="color:red;" onmouseover="document.getElementById('d1').style.color='black'" onmouseout="document.getElementById('d1').style.color='red'" ><?php echo $_SESSION['user'] ?></a> 
<a href="logout.php" id="d7" style="color:red; position:absolute;right:35px; padding-left:40px;" onmouseover="document.getElementById('d7').style.color='black'" onmouseout="document.getElementById('d7').style.color='red'">LOGOUT</a>     
</ul>
</div>
</body>