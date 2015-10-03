<?php 
session_start();

$username = $_SESSION['user_name'];
// $password2 = $_SESSION['pass'];
$FN = $_POST['firstName'];
$LN = $_POST['lastName'];
$AD = $_POST['AddressLine'];
$HO = $_POST['hobbies'];

$mysql_db_hostname = "kevinyen.net";
$mysql_db_user = "LBFF";
$mysql_db_password = "LBFF";
$mysql_db_database = "LBFF";
$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password)
or die("Could not connect database");
mysql_select_db($mysql_db_database, $con)or die("Could not select database");

$query = "UPDATE Person SET FirstName = '$FN', LastName ='$LN', Address='$AD', Hobbies='$HO' WHERE FirstName ='$username' " ;
echo $query;
$result = mysql_query($query)or die(mysql_error());
$_SESSION['user_name'] = $_POST['firstName'];
header("location: mainpage_team15.php");

?>