<?php


$connection = mysql_connect("localhost","root","root");
if (!$connection)
{
	die ("Could not connect to the database: <br />". mysql_error());
}
mysql_select_db('walya_last');
?>
<div class="modal-header">
		<center><font  class="" id="inde_admin_signup">Change Password</font></center>
    </div>
<div class="navbar-inner">


						<?php
  	
if (isset($_POST['change_password'])) 
  	{	
	
		$username = $_POST['username'];	
		$priv_password = $_POST['priv_password'];	
		$new_password = $_POST['new_password'];
		$compsswd = $_POST['compsswd'];
		
	$resulsasst = mysql_query("SELECT * FROM user WHERE username = '$username'  and   password='$priv_password' ");
	$counssst=mysql_num_rows($resulsasst);
		if($counssst == 0){
		echo '<div class="alert alert-dismissable alert-error"><strong>';
			echo "Opration Faild Please Insert Your Information Correctly ! ";
			echo'<meta content="5;main.php?tag=chpass.php" http-equiv="refresh" />';
			echo '</strong></div>';
		} else{
		
			$passw=$new_password;
	if(strlen($passw) <=4 || strlen($passw)>10){
	 echo '<div class="alert alert-dismissable alert-e">';
		die( '<strong>'."Password Must Be between 6 and 10 Characters !".'</strong>');
		echo'<meta content="5;main.php?tag=chpass.php" http-equiv="refresh" />';
		echo '</div>';}
	if (substr($new_password,0,5) == substr($username,0,5)){
	echo '<div class="alert alert-dismissable alert-error"><strong>';
		die("Your Password Must Have A Big Defferent From Your Your Username, Try Other Password !");
		echo'<meta content="5;main.php?tag=chpass" http-equiv="refresh" />';
		echo '</strong></div>';
	}
		
		if($new_password == $username){
	echo '<div class="alert alert-dismissable alert-error"><strong>';
		die("Your Pasword Must Not Be The Same With Your Username,Try Other Password");
	echo'<meta content="5;main.php?tag=chpass" http-equiv="refresh" />';
		echo '</strong></div>';
	}
		
		$chack = mysql_query("UPDATE user SET password='$new_password' WHERE username = '$username'    ");
		echo '<div class="alert alert-dismissable alert-success"><strong>';
		echo '<font color="red" size="3">'."Successfully Changed!&nbsp;&nbsp;".'<font style="background-color:#fff;" color="#000" size="3">'."&nbsp;".$new_password."&nbsp;".'</font>'."&nbsp;&nbsp;Is your new password".'<br>'.'</font>';
			echo'<meta content="5;main.php?tag=home" http-equiv="refresh" />';
		echo '</strong></div>';
		}
		
			
	}
		?>
		
<!--table border="0" cellpadding="10" cellspacing="0"-->
<head>
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />
</head>

	    
            
<div id="style_informations">			 
	<form method="POST" action="">
	   <div>
	  <table border="0" cellpadding="4" cellspacing="0">
	   <tr><td colspan="2">  <img height="150" width="400px" src="picture/admin.png"/>  </td>   </tr>  
	<tr>
			<td style="color: black;"><b>User Name</b></td>
			<td>
                	<input type="text" style="color: blue" name="username" pattern="[A-z ]{3,}" title="Please enter a valid name." id="textbox" required="required"/>
                </td>
            </tr>
			<tr>
			<td style="color: black;"><b>Current Password</b></td>
			<td>
                	<input type="password" style="color: blue" name="priv_password"  title="Please enter a valid name." id="textbox" required="required"/>
                </td>
            </tr>
			<tr>
			<td style="color: black;"><b>New Password</b></td>
			<td>
                	<input type="password" style="color: blue" name="new_password"  title="Please enter a valid name." id="textbox" required="required"/>
                </td>
            </tr>
			<tr>
			<td style="color: black;"><b>Confirm Password</b></td>
			<td>
                	<input type="password" style="color: blue" name="compsswd"  title="Please enter a valid name." id="textbox" required="required"/>
                </td>
            </tr>
<tr>
                <td colspan="2">
                	<input type="reset" value="Cancel" id="button-in"/>
                	<input type="submit" name="change_password" value="Change " id="button-in"  />
                </td>
            </tr>
			</table>
			</div>
</form>
</div>