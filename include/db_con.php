<?php
$conn=mysql_connect("localhost","root","root","walya_last");
if(!$conn)
{
die("Error in connection".mysql_error());
}
if(!$conn)
{
die("Error in db select".mysql_error());
}
?>