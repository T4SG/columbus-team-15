<?php 
session_start();
// print_r($_SESSION);
?>
<!doctype html>
<html>
<head>
<style>
body {
    background-image: url("basketball.court-floor.jpg");
	color:#F9F9F9;
}
#centerInfo {
	align-content:center;
	margin-left:auto;
	margin-right:auto;
	background-color: #E67E22;
	width:50%;
	height:170px;
	border-radius:30px;
	padding-top:2%;
	text-align:center;
}

#Hi {
	text-align: center;
}

.wrapper {
    text-align: center;
}

.button {
    position: absolute;
    top: 50%;
}
</style>
<meta charset="UTF-8">
</head>

<body>

	<div id="Hi">
		<?php echo "Hi, ". $_SESSION['user_name']."!"; ?> </br>
	</div>
	<div class="jumbotron">
		<div id="centerInfo">
			<a href="chat/index.php">Forum</a>
			<!-- <button type="ForumButton" formaction="forum">Forum</button> -->
			<button type="LoggingButton" formaction="logging">Logging</button>
			<a href="edit.php">Personal Information</a>
			<!-- <button type="PersonalInfoButton" formaction="personalinfo">Personal Information</button> -->
			<button type="ProgressTrackerButton" formaction="progresstracker">Progress Tracker</button>
	    	</div>
    	</div>
	
</body>
</html>
