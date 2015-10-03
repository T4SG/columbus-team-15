<?php if(!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Chat Simple online</title>
<meta name="description" content="Script for chat simple, online, made with php and javascript, ajax" />
<meta name="keywords" content="chat script, chat simple, chat online" />
<link rel="stylesheet" type="text/css" href="chatfiles/chatstyle.css" />
<style type="text/css">
	body {
    background-image: url("basketball.court-floor.jpg");
}
#homeButton {
	margin-left:auto;
	margin-right:auto;
	width:120px;
	text-align:center;
	background-color:clear;
	align-content:space-around
}
</style>
</head>
<body>
<div id="homeButton"><img src="Home.png" usemap="#map">Home</div>
<map name="map">
  <area shape="circle" coords="50,50,50" href="http://kevinyen.net/c4g/mainpage_team15.php" alt="Home">
</map>
<?php include('chat.php'); ?>

</body>
</html>