<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> Walya Bus Reservation And Management System</title>
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
<body>
<table id="t"   align="center" >
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
<div id="welcome2">
<div style="font-size:20pt;font-family:Verdana;font-weight:bold;text-align:center">
<script>
 // YOUR TEXT
var text="WELCOME TO Walya bus "
var speed=50 // SPEED OF FADE

if (document.all||document.getElementById){
document.write('<span id="highlight">' + text + '</span>')
var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight
}
else
document.write(text)
var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")
var r=1
var g=1
var b=1
var seq=1
function changetext(){
rainbow="#"+hex[r]+hex[g]+hex[b]
storetext.style.color=rainbow
}
function change(){
if (seq==6){
b--
if (b==0)
seq=1
}
if (seq==5){
r++
if (r==12)
seq=6
}
if (seq==4){
g--
if (g==0)
seq=5
}
if (seq==3){
b++
if (b==12)
seq=4
}
if (seq==2){
r--
if (r==0)
seq=3
}
if (seq==1){
g++
if (g==12)
seq=2
}
changetext()
}
function starteffect(){
if (document.all||document.getElementById)
flash=setInterval("change()",speed)
}
starteffect()
</script></div>
	<h2 align="center" style="padding-top:5px;">Welcome to Walya bus</h2>
</div>

<div id="iner" >
<img src="image/FB_IMG_16081003183158013.jpg" width="500" height="300"/>	

</div>
<div id="text">
<p style="padding:10;color:black; "><i>Hurry; Limited offer for fast and comfortable travel within Ethiopia. Do not miss walya bus transport, the airplane of the land in Ethiopia pleased to announce its highly reduced special promotional round trip ticket fares, if you travel in group to all our destinations (Gonder,Bahirdar,Mekelle,woldia ) for limited days.</i></p>	
</div>
	
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
