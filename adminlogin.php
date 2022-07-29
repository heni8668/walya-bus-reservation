<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> Walya bus transport system</title>
<meta name="robots" content="index, follow">
  <meta name="keywords" content="walyabus">
  <meta name="description" content="walyabus">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/header.css" type="text/css" />
<link href="themes/2/js-image-slider.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="css/new.css" rel="stylesheet" />
<script src="js/new.js" type="text/javascript"></script>
<script src="themes/2/js-image-slider.js" type="text/javascript"></script>
<link type="text/css" href="css/menu1.css" rel="stylesheet" />
<link type="text/css" href="css/dropdown_menu.css" rel="stylesheet" />
<style>
a:hover{
color:white;

text-decoration:none;
}

a:link{
color:#25ba29;
text-decoration:none;
}
</style>

</head>
<body style="background-color:silver">
<table id="t"  align="center" >
<tr>
	<td colspan="3">

<?php
	include("include/header.php");	
	
?>

</td>
</tr>
<tr valign="top">
<td >

<?php
	include("include/left.php");	
	
?>
</td>
<td width="500px">



<div id="adlog">
<div id="welcome">
<h2 align="center" style="padding-top:5px;">USER LOGIN PAGE</h2>	
</div>
<form action="login_infoadmin.php" method="post" name="login_form" class="contact_form">
	    <table id="ttp" align="center" border="0"cellpadding = "5" cellspacing = "10">
	    
             <tr><td colspan="2">  <img height="200" width="255px" src="image/admin.png"/>  </td>   </tr>   
			 <tr><td align="center" style="color:black"><label for="username"><b>Usertype:</b></font>&nbsp;&nbsp;</td><td><select class="input-xsmall" class="span2" name="usertype" id ="user" required>
                                        <option>Select Postion</option>
										<option>Admin</option>
										<option>Manager</option>	
										<option>Clerk</option>
										
										
                                    </select></td></tr>
	        <tr><td align="center" style="color:black"><label for="username"><b>User Name:</b></label></td>
			<td><input type="text" name="username" style="height:30px; border-radius: 5px; color: blue; font-size: 15px;" placeholder="" required /></td></tr>
			
            <tr><td align="center" style="color:black"><label for="Password"><b>Password:</b></label>
			<td><input  type="password" name="password" style="height:30px; border-radius: 5px; color: blue; font-size: 15px;" placeholder="" required /></td></tr>
            
                         <tr>
                         <td></td>
			<td align="left"><button id="button12"  type="submit" name="login"><b>LogIn</b></button>&nbsp;&nbsp;&nbsp;
			    <button id="button12"  class="submit" type="reset"><b>Cancel</b></button><br /></td>
              <td><center><a class="btn btn-success" button id="button12"  href="adminfoget.php"><font color='white' size='4'>Forget Password?</a></td></center></tr>              
			</tr>
            
                      <tr ><td></td></tr>
	    </table>
</form>
	

</div>




</td>


<td width="290px">
<?php
	include("include/right.php");	
	
?>

</td>
</tr>
<tr>
<td colspan="3">
	
	
<?php
	include("include/footer.php");	
	
?>	
	
</td>	
</tr>
</table>
</body>
</html>
