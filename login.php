<?php 
session_start();
?>
<!doctype html>
<html>
<head>
<style>
body {
	background-image: url("http://reddustheelers.com/core/wp-content/uploads/2014/05/basketball.court-floor.jpg");
}
#centerLogin {
	align-content:center;
	margin-left:auto;
	margin-right:auto;
	background-color:#E67E22;
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
	margin-left:auto;
	margin-right:auto;
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
        	<input id="formText" type="Username" name="Username" placeholder="ID"><br>
            <input id="formText" type="Password" name="Password" placeholder="Password"><br>
            <input type="submit" value="Submit">
        </form>
	</div>
<div>

<script >
	
</script>

</body>
</html>