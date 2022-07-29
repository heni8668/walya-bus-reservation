<?php session_start();?>
<?php
if(isset($_POST['post'])) {
	include("../Common/connection.php");
	$result4 = mysql_query("select user_id from account where username='".$_SESSION['username']."'");
$row4 = mysql_fetch_array($result4,MYSQL_ASSOC);
$user_id = $row4['user_id'];

echo "data Inserted Successfully Posted";
	mysql_query("insert into notice values('', '".$_POST['postnotice']."',  ".$user_id.")");
}
?>
<html>
<head>
<link href="formmapt.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">  

</script> 
</head>  
<body>
<center>
<div style ="width:450px;height:300px;margin-left:60px;">
	 <h2> Post Notice</h2>	 
<form name="f1" action="?" method="post" onsubmit="return validatee();" style=" border: 1px solid black; padding-top: 30px; padding-bottom: 30px;">  
<table  border = "0 "style="color:black" margin-left: 0px>
<tr><td style="vertical-align: top"> Notice Text : </td><td><textarea id="postnotice"  name="postnotice" style="height:150px;width:300px;"></textarea> 
<span id="NoticeTlocation" style="color:red"></span></td></tr>
<tr style="height: 20px;"></tr>
<tr><td colspan="2"><center><input type="submit" value="Post" name="post" />
<input type="reset" value="Cancel" name="Cancel"id="b2"/></div>
 </center> </td></tr>
 
 <tr><label id="postnotice_error" style='color: red; display: none'>Please Fill Post Text !!!</label></tr>
</table>
</form>
</div>       

<script>
function validatee() {
	if(document.getElementById('postnotice').value == '') {
		document.getElementById('postnotice_error').style.display = "block";
		return false;
	} else {
		return true;
		document.getElementById('postnotice_error').style.display = "none";
	}
}
</script>
</body>  
</html>
						