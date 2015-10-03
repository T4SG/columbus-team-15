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

.grow img {
  height: 100px;
  width: 100px;
 
  -webkit-transition: all 1s ease;
     -moz-transition: all 1s ease;
       -o-transition: all 1s ease;
      -ms-transition: all 1s ease;
          transition: all 1s ease;
}
 
.grow img:hover {
  width: 120px;
  height: 120px;
}

.button {
    position: absolute;
    top: 50%;
}
</style>
<meta charset="UTF-8">
</head>

<body>
	<div id="banner">
    	<img src="LJFF-logo.png" style="width:150px;height:150px;">
    </div></br>
	<div id="Hi">
		<h2><?php echo "Hi, ". $_SESSION['user_name']."!"; ?></h2> </br>
	</div>
    <div class="grow">
    </br>	
        
<a href="chat/index.php"><img src="Lockers.png" width="100" height="100" border="0"></a>
        
        <a href="tracking.html"><img src="Graph.png" width="100" height="100" border="0"></a>
        
        <a href="logging.html"><img src="Book.png" width="100" height="100"></a>
        
        <a href="edit.php"><img src="PlayerCard.png" alt="portrait"></a>
        
        <a href="calendar.html"><img src="Calendar.png" width="100" height="100" border="0"></a></div>
        
    </div>



	
</body>
</html>
