<?php 
session_start();

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
	height:70px;
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
	width: 60%;	
	  display: inline-block;
  float: left;
}
#lastName {
	width: 60%;	
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
<h4>Your Player Card</h4>
This is your player card. All your information on this page should be as accurate as possible to keep the player card valuable. 
<div id="content">
<form action="update.php" method="post">
	<h4>Name</h4>
	<label>First Name: </label><input id="firstName" type="text" name="firstName" value="<?php echo $_SESSION['FN'];?>"><br>
        <label>Last Name: </label><input id="lastName" type="text" name="lastName" value="<?php echo $_SESSION['LN'];?>"><br><br>
    <h4>Personal Address</h4>
    <label>Address: </label> <input id="AddressLine" type="text" name="AddressLine" value="<?php echo $_SESSION['AD'];?>"> <br>
    <label>Phone #: </label><input id-"phoneText" type="text" name="phoneText" value="<?php echo $_SESSION['PN'];?>">
    <br><br>
<h4>Hobbies and Extracurriculars</h4>
Please enter in your hobbies in the following categories, each seperated by a comma. 
(Sports, Theatre, Music, Clubs, Volunteering, Other):

	<input id="hobbies"type="text" name="hobbies" value="<?php echo $_SESSION['HO'];?>"><br>
	</br><br><input type="submit" value="Submit"><br>
</form> 
</div>
</div>

</body>
</html>
