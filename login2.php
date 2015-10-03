<?php 
session_start();

$username = $_POST['Username'];
$password = md5($_POST['Password']);
$mysql_db_hostname = "kevinyen.net";
$mysql_db_user = "LBFF";
$mysql_db_password = "LBFF";
$mysql_db_database = "LBFF";
$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password)
or die("Could not connect database");
mysql_select_db($mysql_db_database, $con)or die("Could not select database");

$query = "SELECT * FROM Person WHERE id='$username' AND Password='$password'" ;
$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
$row=mysql_fetch_array($result);
if( $num_row >=1 ) { 
echo 'true';
$_SESSION['user_name']=$row["FirstName"];
header("location: mainpage_team15.php");
 // echo $_SESSION['user_name'];
}
else{
$_SESSION['msg']="wrong password!";
header("location: login.php");
}
?>