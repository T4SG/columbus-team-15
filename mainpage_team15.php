<?php 
session_start();
// print_r($_SESSION);
?>
<!doctype html>
<html>
<head>
<style>

#banner {
	align-content:center;
	margin-left:auto;
	margin-right:auto;
	background-color:#E67E22;
	width:100%;
	height:190px;
	border-radius:30px;
	padding-top:1%;
	padding-bottom:1%;
	text-align:center;
}
#buttons {
	align-content:center;
	margin-left:auto;
	margin-right:auto;
	border-spacing:inherit;
	padding-top:5%;
}

body {
	font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
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

.grow{
    text-align: center;
    letter-spacing: 80px;
  width: 100%;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.grow2{
    text-align: center;
/*    letter-spacing: 80px;*/
  width: 100%;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.grow img {
  height: 160px;
  width: 140px;
 
  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
}
 
.grow img:hover {
  width: 170px;
  height: 190px;
}

.button {
    position: absolute;
    top: 50%;
}

#id1{
	position: absolute;
	top:500px;
	left:500px;
}
</style>
<meta charset="UTF-8">
</head>

<body>
	<div id="banner">
    	<img src="LJFF-logo.png" style="width:150px;height:150px;">
    </div></br>
	<div id="Hi">
		<h2><b><?php echo "Hi, ". $_SESSION['user_name']."!"; ?></b></h2> </br>
	</div>
    <div class="grow">
    </br>	
        
<a href="chat/index.php"><img src="Lockers.png" ></a>
        
        <a href="tracking.html"><img src="Graph.png"  ></a>
        
        <a href="Log.php"><img src="Book.png" ></a>
        
        <a href="edit.php"><img src="PlayerCard.png" ></a>
        
        <a href="calendar.html"><img src="Calendar.png" ></a></div>
        
    </div>



	
</body>
</html>
