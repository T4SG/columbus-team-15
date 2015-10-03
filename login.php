<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<style>
body {
	background-color: LightBlue;
}
#centerLogin {
	align-content:center;
	margin-left:auto;
	margin-right:auto;
	background-color:beige;
	width:50%;
	height:170px;
	border-radius:30px;
	padding-top:2%;
	text-align:center;
	margin-top:10%;
}
#form {
	background-color:clear;
	width: 50%;
	height: 66%;
	margin-left:auto;
	margin-right:auto;
}
#formText {
	width:90%;
	padding:7px;
	margin-left:auto;
	margin-right:auto;
	text-align:center;
	border-radius:5px;
}
h4 {
	font: Myriad Pro;
}
#submitButton {
	margin-top:10px;
}

</style>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<div id = "centerLogin">
	<h4>Log In To Your Dashboard</h4>
	<div id ="loginInfo" class="center">
		<form id="form" action="login2.php" method="post">
		<?php echo $_SESSION['msg']; $_SESSION['msg']=""?></br>
        	<input id="Username" type="Username" name="Username" placeholder="ID"><br>
            <input id="Password" type="Password" name="Password" placeholder="Password"><br>
            <input type="submit" value="Submit">
        </form>
	</div>
<div>

<script >
	
</script>

</body>
</html>
