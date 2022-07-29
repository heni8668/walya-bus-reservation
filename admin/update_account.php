<script type='text/javascript'>
function check()
{

         var clerk_id = document.getElementById('clerk_id');
        var fname = document.getElementById('fname');
      var lname = document.getElementById('lname');
	  var age = document.getElementById('age');
	  var sex = document.getElementById('sex');
	  var adress = document.getElementById('adress');
	  var phone=document.getElementById('phone')
	   var username = document.getElementById('username');
	   var password = document.getElementById('password');
	    var email = document.getElementById('email');
		
		if(isAlphabet(fname,"please fill First name")){
		 if(lengthRestriction(fname, 2, 10,"for your first name")){
if(isAlphabet(lname,"please fill middle name")){
		 if(lengthRestriction(lname, 2, 10,"for your middle name")){	
if(isAlphabet(age,"please fill last name")){
	if(lengthRestriction(lname, 2, 10,"for your last name")){
		if(Email(email, "Please enter email with @ and .  or not empty")){
 if( isAlphanumeric( sex, "Please fill user name")){
		 if(lengthRestriction(sex, 2, 30,"for user name")){
if( isAlphanumeric( age, "Please fill password")){
		 if(lengthRestriction(age, 4, 32,"for password")){
if( isAlphanumeric( addr, "Please fill confirmPassword")){
		 if(lengthRestriction(adress, 4, 32,"for confirmPassword")){
if( isAlphanumeric( addr, "Please fill confirmPassword")){
		 if(lengthRestriction(adress, 4, 32,"for confirmPassword")){
if( isAlphanumeric( phone, "Please fill confirmPassword")){
		 if(lengthRestriction(phone, 4, 32,"for confirmPassword")){
if( isAlphanumeric( ausername, "Please fill confirmPassword")){
		 if(lengthRestriction(username, 4, 32,"for confirmPassword")){
if( isAlphanumeric( email, "Please fill confirmPassword")){
		 if(lengthRestriction(password, 4, 32,"for confirmPassword")){
if( isAlphanumeric( email, "Please fill confirmPassword")){
		 
		 return true;
		}}}}  }}}} }}}}}}}}}}}}}}
	return false;
	
}
	
  
 </script> 
<?php
error_reporting(0);
$id="";
$opr="";
if(isset($_GET['opr']))
	$opr=$_GET['opr'];
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
//--------------Add data-----------------
function formatDate($val)
   {
        $arr = explode('-', $val);
        return date('d M Y', mktime(0,0,0, $arr[1], $arr[2], $arr[0]));
    }	
if(isset($_POST['btn_sub'])){
	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$age=$_POST['age'];
	$Sex=$_POST['sex'];
	$officename=$_POST['officename'];
	$address=$_POST['addr'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];	
	$email=$_POST['email'];
	$type=$_POST['type'];  
$sql_ins=mysql_query("INSERT INTO  user 
						VALUES(
							NULL,
							'$f_name',
							'$l_name' ,
							'$age',
							'$Sex',
							'$officename',
							'$address',
							'$username',
							'$password',
							'$phone',
							'$email',
							'$type',
			                 NOW()
							)
					");
					if($sql_ins==true)
if($sql_ins==true){
	echo "<fz>User Added successfully</fz>";
	echo'<meta content="5;main.php?account_entry.php" http-equiv="refresh" />';
}
else
	$msg="<ft>Not inserted try again</ft>";
	
}
//------------------update data----------
if(isset($_POST['btn_upd'])){
	$f_name=$_POST['fname'];
	$l_name=$_POST['lname'];
	$age=$_POST['age'];
	$Sex=$_POST['sex'];
	$officename=$_POST['officename'];
	$address=$_POST['addr'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];	
	$email=$_POST['email'];
	$type=$_POST['type'];  
	$sql_update=mysql_query("UPDATE user SET
	                        
						   fname='$f_name',
							lname='$l_name' ,
							age='$age',
							sex='$Sex',
							officename='$officename',
							adress='$address',
							username='$username',
							password='$password',
							phone='$phone',
							email='$email',
						      date =NOW()
						        WHERE
							u_id='$id'								
							");
	if($sql_update==true){
		echo "<fz>user has been Updated Successfully</fz>";
	echo'<meta content="5;main.php?account_entry.php" http-equiv="refresh" />';
	}
	else
		echo "<ft>Update Failed</ft>";
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />

<title>Walya bus transport system</title>
</head>
<body>

<style>
ft{
	color: red;
	font-size: 20px;
}
fz{
	color: green;
	font-size: 20px;
}
</style>

<?php

if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM  user WHERE u_id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
	list($y,$m,$d)=explode('-',$rs_upd['dob']);
?>
<?php	
}
else
{
?>
<!-- for form Upadte-->

<div id="top_style">
        <div id="top_style_text">
       <b> User Update Form </b> </div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<!--a href="?tag=view_clerk"><input type="button" name="btn_view" title="View employee" value="Back" id="button_view" style="width:70px;"  /></a-->
              <a href="?tag=view_man"><input type="button" name="btn_view" title="View employee" value="View" id="button_view" style="width:70px;"  /></a>
             </form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

 
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
		
        	<tr>
            	<td style="color: blue;"><b>Id:</b></td>
            	<td>
                	<input type="text" name="id" id="textbox" value="<?php echo $rs_upd['u_id'];?>"/>
                </td>
            </tr>
			
			
			
			
			
			
			
			<tr>
            	<td style="color: blue;"><b>First Name:</b></td>
            	<td>
                	<input type="text" name="fname" id="textbox" value="<?php echo $rs_upd['fname'];?>"/>
                </td>
            </tr>
			
			
			
			
            
            <tr>
            <td style="color: blue;"><b>Last Name:</b></td>
            	<td>
                	<input type="text" name="lname" id="textbox" value="<?php echo $rs_upd['lname'];?>"/>
                </td>
            </tr>
            <tr>
            	<td style="color: blue;"><b>Age:</b></td>
            	<td>
                	<input type="text" name="age" id="textbox" value="<?php echo $rs_upd['age'];?>"/>
                </td>
            </tr>
			<tr>
            	<td style="color: blue;">sex:</td>
            	<td>
                	<input type="text" name="sex" id="textbox" value="<?php echo $rs_upd['sex'];?>"/>
                </td>
            </tr>
			            <tr>
            <td style="color: blue;"><b>Office Name:</b></td>
                <td>
                	<input type="text" name="officename" id="textbox" value="<?php echo $rs_upd['officename'];?>"/>
                </td>
            </tr>
        
			
			<tr>
            		<td style="color: blue;"><b>Address:</b></td>
            	<td>
                	<textarea name="addr" cols="22" rows="3"> <?php echo $rs_upd['adress'];?></textarea>
    			</td>
        	</tr>
          
			<!--tr>
            	<td>Position:</td>
            	<td>
                	<input type="text" name="position" id="textbox" value="<!--?php echo $rs_upd['position'];?>"/-->
                </td-->
            </tr-->

            
            <tr>
                <td colspan="2">
                	<input type="reset" value="Cancel" id="button-in"/>
                	<input type="submit" name="btn_upd" value="Update" id="button-in"  />
                </td>
            </tr>
			
		</table>
   </div>
 
	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	            <tr>
            <td style="color: blue"><b>User Name:</b></td>
                <td>
                	<input type="text" name="username"  id="textbox" value="<?php echo $rs_upd['username'];?> "/>
                </td>
            </tr>
            
            <tr>
            <td style="color: blue"><b>Password:</b></td>
                <td>
                	<input type="password" name="password" id="textbox" value="<?php echo $rs_upd['password'];?> "/>
                </td>
            </tr>  
            <tr>
            	<td style="color: blue"><b>Phone:</b></td>
            	<td>
                	<input type="text" name="phone" id="textbox" value="<?php echo $rs_upd['phone'];?>" />
                </td>
            </tr>
            <tr>
            	<td style="color: blue"><b>Email:</b></td>
            	<td>
                	<input type="text" style="color: blue" name="email"  id="textbox" value="<?php echo $rs_upd['email'];?> "/>
    			</td>
        	</tr>
    	</table>
  </div>
    </form>

</div><!-- end of style_informatios -->


<!-- for form Register-->
	


<?php
}
?>
</body>
</html>