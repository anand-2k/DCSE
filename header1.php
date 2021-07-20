<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
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
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

</style>
</head>
<body>
<div style="height:150px; width:100%; background-color:lightblue;" >
<img src="CEG_main_logo.png" align="left" width="150px" height="150px" style="margin-left:25px;  ">
<h1 align="center" style="padding-top:40px; color:red;" ><b><i>DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</i></b></h1>


</div>
<div style="height:30px; width:100%; background-color:linen;">
<ul>
<li><a href="index.php" id="d1" style="color:red;" onmouseover="document.getElementById('d1').style.color='black'" onmouseout="document.getElementById('d1').style.color='red'" >HOME</a> 
<a href="" id="d2" style="color:red;  padding-left:40px;" onmouseover="document.getElementById('d2').style.color='black'" onmouseout="document.getElementById('d2').style.color='red'">RESEARCH</a>     
<a href="" id="d3" style="color:red;padding-left:40px;"onmouseover="document.getElementById('d3').style.color='black'" onmouseout="document.getElementById('d3').style.color='red'" >ACHIEVEMENTS</a>    
<div class="dropdown">
  <button class="dropbtn">LOGIN</button>
  <div class="dropdown-content">
    <a href="#">STAFF</a>
    <a href="#">STUDENT</a>
  </div>
</div>

</div>
</body>