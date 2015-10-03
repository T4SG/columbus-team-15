<?php 
session_start();
 // print_r($_SESSION);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Personal Information</title>
<style>
body {
	background-image: url("basketball.court-floor.jpg");
}
#background {
	background-color:#E67E22;
	height:500px;
	width:66%;
	border-radius: 30px;
	margin-left:auto;
	margin-right:auto;
	margin-top: 2%;
	padding: 10px;

}
#content {
	margin-left:auto;
	margin-right:auto;
	width:80%;	
	height:470px;
}
#hobbies {
	width:100%;
	/*height:200px;*/
}
#AddressLine {
	width:60%;	
	  display: inline-block;
  float: left;
}
#homeButton {
	margin-left:auto;
	margin-right:auto;
	width:120px;
	text-align:center;
	background-color:clear;
	align-content:space-around
}
#firstName {
	width: auto;	
	  display: inline-block;
  float: left;
}
#lastName {
	width: auto;	
	  display: inline-block;
  float: left;
}
#phoneText {
  display: inline-block;
  float: left;	
}
label{
    display: inline-block;
    float: left;
    clear: left;
    width: 100px;
    text-align: right;
}
input {
  display: inline-block;
  float: left;
}
</style>
</head>

<body>

<div id="homeButton"><img src="Home.png" usemap="#map">Home</div>
<map name="map">
  <area shape="circle" coords="50,50,50" href="mainpage_team15.php" alt="Home">
</map>
<div id="background">
<form action="edit2.php" method="post">
	<h4>Name</h4>
	<label>Name: </label><input id="firstName" type="text" name="Name" value="<?php echo $_SESSION['user_name'] ;?>" readonly><br>
        <label>Date: </label><input id="lastName" type="text" name="Date" value="<?php echo date("m-d-Y");?>" readonly><br><br>
<h4>Diary</h4>

	<!-- <input id="hobbies"type="text" name="log" > -->
	<textarea id="hobbies" type="text" name="Log" rows="20" cols="100">

</textarea><br>
	</br><br><input type="submit" value="Submit"><br>
</form> 
</div>
</div>

</body>
</html>
