<?php
include('include/database.php');

if (isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$login_query=mysql_query("select * from passenger where username='$username' and password='$password'");
$count=mysql_num_rows($login_query);
$row=mysql_fetch_array($login_query);
$username=$row['username'];
$password=$row['password'];

if ($count > 0){
session_start();
$_SESSION['id']=$row['id'];

echo "<script>alert('Successfully Login!'); window.location='passenger/reservation1.php'</script>";
}else{
	echo "<script>alert('Invalid Username and Password! Try again.'); window.location='passengerlogin1.php'</script>";
?>
<?php } 
}
?>