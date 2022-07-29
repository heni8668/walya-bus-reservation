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


</head>
<body style="background-color:silver">
<table id="t"  >
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





<div id="center">
<div id="welcome">
<h2 align="center" style="padding-top:5px;">PASSENGER REGISTRATION FORM</h2>	
</div>


<form  action="Registertphp.php" method="post"  name="contact_form" target="iframe1" onSubmit = "return validate()">
        <table id="tt" border = "0" align  ="center" cellpadding = "5" cellspacing = "10">
        <tr> <td colspan="2" align="center" >
        	<?php
	include("registertphp.php");	
	
?>
        </td></tr>
        <tr><td colspan="2" align="center" style="color: white;"><b>PLEASE FILL YOUR DETAIL HERE !!!</b></td></tr>
			<tr>
	        <td align=right style="color:white"><label for="name"><b>First Name:</b></label></td>
            <td align=left><input type="text" style="width:200px; height: 30px; border-radius: 5px; color: blue; font-size: 15px; border-color:#1ee1dc;" placeholder="Type Your first name" pattern="[A-z ]{3,}" title="Please enter a valid name." required name="fname"/></td>
			</tr>
			<tr>
			<td align=right style="color:white"><label for="name"><b>Last Name:</b></label></td>
            <td align=left><input type="text" style="width:200px; height: 30px; border-radius: 5px; color: blue; font-size: 15px; border-color:#1ee1dc;"  placeholder="Type Your last name" pattern="[A-z ]{3,}" title="Please enter a valid name." required name="lname" /></td>
			</tr>
		    <tr>
	        <td align=right style="color:white"><label for="name"><b>PhoneNo:</b></label></td>
            <td align=left><input type="text" style="width:200px; height: 30px; border-radius: 5px; color: blue; font-size: 15px; border-color:#1ee1dc;"  placeholder="10 digits only" pattern="[0-9]{10,}" title="Please enter 10 digit no." maxlength="10"  required name="phoneno" /></td>
			</tr>

<tr>
<td align=right style="color:white"><label for="name"><b>Age:</b></label></td>
<td align=left><input type="text" style="width:200px; height: 30px; border-radius: 5px; color: blue; font-size: 15px; border-color:#1ee1dc;" placeholder="Type Your Age" pattern="[0-9]{2,}" title="Please enter your age." maxlength="3" required name="age"/></td></tr>

            <tr>
	        <td align=right style="color:white"><label><b>City:</label></td>
            <td align=left><input type="text" style="width:200px; height: 30px; border-radius: 5px; color: blue; font-size: 15px; border-color:#1ee1dc;" placeholder="Type Your city" pattern="[A-z ]{3,}" title="Please enter a valid city name." required name="city"/></td></tr>
            
			</tr>
			<tr>
	        <td align=right style="color:white"><label><b>Username:</b></label></td>
            <td align=left><input name="username" type="text" style="width:200px; height: 30px; border-radius: 5px; color: blue; font-size: 15px; border-color:#1ee1dc;" placeholder="example21" pattern="[A-z0-9 ]{5,}" title="User name minimum 5 character" required />
            </td></tr>
		    <tr>
	        <td align=right style="color:white"><label for="name"><b>Password:</b></label></td>
            <td align=left><input type="password" style="width:200px; height: 30px; border-radius: 5px; color: blue; font-size: 15px; border-color:#1ee1dc;"  placeholder="Password minimum 6 character" pattern="[A-z0-9 ]{6,}" title="Password minimum 6 character" required name="password"/></td></tr>
			<tr>
	        <td align=right style="color:white"><label for="name"><b>Confirm password:</b></label></td>
            <td align=left><input type="password" style="width:200px; height: 30px; border-radius: 5px; color: blue; font-size: 15px; border-color:#1ee1dc;"  placeholder="Re-enter your Password" pattern="[A-z0-9 ]{6,}" title="Re-enter your Password" required name="verify" /></td>
			</tr>
            <tr><td></td>
			<td ><button id="button1"  type="submit" name="submit"><b>Create</b></button>&nbsp;&nbsp;&nbsp;
			    <button id="button1"  class="submit" type="reset"><b>Cancel</b></button><br />                   
                       </td>
			</tr>
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
