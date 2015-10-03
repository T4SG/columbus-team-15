<?php 
session_start();

// $username = $_SESSION['user_name'];
// $password2 = $_SESSION['pass'];
$Name = $_POST['Name'];
$Date = $_POST['Date'];
$Log = $_POST['Log'];
$id=$_SESSION['id'];
$mysql_db_hostname = "kevinyen.net";
$mysql_db_user = "LBFF";
$mysql_db_password = "LBFF";
$mysql_db_database = "LBFF";
$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password)
or die("Could not connect database");
mysql_select_db($mysql_db_database, $con)or die("Could not select database");

$query = "INSERT INTO `Log` ( `PersonID`, `Log`, `Date`) VALUES ( '$id', '$Log', '$Date');" ;
$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
$row=mysql_fetch_array($result);

header("location: mainpage_team15.php");

?>