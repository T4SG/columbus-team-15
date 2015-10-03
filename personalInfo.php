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
	background-color:LightBlue;	
}
#background {
	background-color:Beige;
	height:400px;
	width:66%;
	border-radius: 30px;
	margin-left:auto;
	margin-right:auto;
	margin-top: 10%;
	padding: 10px;
	text-align:center;
}
#content {
	padding:10px;
	margin-left:auto;
	margin-right:auto;
	width:80%;	
}
#zip {
	width:50px;	
}
#state {
	width:50px;	
} 
#formText {
	width:90%;
}
#addressText {
	width:66%;	
}
</style>
</head>

<body>
<div id="background">
Enter in your personal information: 
<div id="content">
<form action="update.php" method="post">
	<h4>Name</h4>
	First Name: <input id="firstName" type="text" name="firstName" value="<?php echo $_SESSION['FN'];?>">
    Last Name: <input id="lastName" type="text" name="lastName" value="<?php echo $_SESSION['LN'];?>"><br>
    <h4>Personal Address</h4>
    Enter in your address as one line:<br>
    Address: <input id="AddressLine" type="text" name="AddressLine" value="<?php echo $_SESSION['AD'];?>"> 
    <br>
<h4>Hobbies and Extracurriculars</h4>
Please enter in your hobbies in the following categories, each seperated by a comma. 
(Sports, Theatre, Music, Clubs, Volunteering, Other):

	<input id="hobbies"type="text" name="hobbies" value="<?php echo $_SESSION['HO'];?>"><br>
	</br><input type="submit" value="Submit">
</form> 
</div>
</div>

</body>
</html>
