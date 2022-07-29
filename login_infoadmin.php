<?php
include('include/database.php');

if (isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];
$password=sha1($_POST['password']);
$user=$_POST['usertype'];
$login_query=mysql_query("select * from user where username='$username' and password='$password' and type='$user'");
$count=mysql_num_rows($login_query);
$row=mysql_fetch_array($login_query);
$username=$row['username'];
$password=$row['password'];

$usert=$row['type'];
if ($count > 0){
	if($usert=="admin"){
session_start();
$_SESSION['id']=$row['u_id'];

echo "<script>window.location='admin/main.php'</script>";
}
else if($usert=="manager"){
session_start();
$_SESSION['id']=$row['u_id'];

echo "<script> window.location='manager/main.php'</script>";
}
else if($usert=="clerk"){
session_start();
$_SESSION['id']=$row['u_id'];

echo "<script> window.location='clerk/main.php'</script>";
}}


else if($usert=="passenger"){
session_start();
$_SESSION['id']=$row['u_id'];

echo "<script> window.location='manager/main.php";
}}

else{
	echo "<script>alert('Invalid Username and Password! Try again.');window.location='adminlogin.php'</script>";
}
  

?>