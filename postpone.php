<?php
session_start();
include("../Common/connection.php");
if(isset($_POST['Change'])) {
	$datee = date('Y-m-d H:i:s', strtotime("".$_POST['RESERVATION_DATE']." ".$_POST['time'].""));
	mysql_query("update reservation set RESERVATION_DATE='".$datee."' where RESERVATION_ID = ".$_POST['RESERVATION_ID']); 

	$sql = "insert into notifcation values('', ".$_POST['RESERVATION_ID'].", 'postponed', '".date("Y-m-d H:i:sa")."')";
	mysql_query($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table {
			border: 1px black solid;
			border-collapse: collapse;
			color: black;
			background: white;
		}
		th { 	
			background: rgba(230, 230, 230, 1);
			color: rgb(0, 0, 0);
			font-weight: bold;
			font-style: italic;
		}
		th, td {
			border-bottom: 1px black solid;
			border-left: 1px black solid;
			padding: 8px 4px;
			text-align: center;
		}
		div {
			color: white;
			margin-top: 30px;
		}
	</style>
</head>
<body>
<?php
$result2 = mysql_query("select *from reservation");
if(mysql_num_rows($result2) == 0) {
	echo "No data is available !!";
} else {
?>
<div align="center">
<label style="color: white">Reservation List </label>
<table>
	<tr>
		<th>No</th>
		<th>Reserved BY</th>
		<th>From</th>
		<th>To</th>
		<th>Departure</th>
		<th>Arrival</th>
		<th>Seat No</th>
        <th>Plate No</th>
		<th>Resered Date</th>
		<th>Cancel</th>
	</tr>
<?php
	$no = 1;
	while ($row3 = mysql_fetch_array($result2,MYSQL_ASSOC)) {
		$result4 = mysql_query("select *from journy where journy_id = ".$row3['JOURNY_ID']);
		$row4 = mysql_fetch_array($result4,MYSQL_ASSOC);

		$result5 = mysql_query("select *from seat where SEAT_ID = ".$row3['SEAT_NO']);
		$row5 = mysql_fetch_array($result5, MYSQL_ASSOC);

		$result6 = mysql_query("select *from user where user_id = ".$row3['RESERVE_BY']);
		$row6 = mysql_fetch_array($result6,MYSQL_ASSOC);
        
        $result7 = mysql_query("select *from bus where BUS_ID = ".$row5['BUS_ID']);
		$row7 = mysql_fetch_array($result7, MYSQL_ASSOC);

		echo "<form action='?' method='post'><input type='text' name='RESERVATION_ID' value='".$row3['RESERVATION_ID']."' hidden=''>
		<input type='text' name='time' value='".date('H:i:s' ,strtotime($row3['RESERVATION_DATE']))."' hidden=''>
		<tr><td>".$no."</td><td>".$row6['first_name'].' '.$row6['last_name']."</td><td>".$row4['FROM']."</td>
		<td>".$row4['TO']."</td><td>".$row4['DEPARTURE_TIME']."</td><td>".$row4['ARRIVAL_TIME']."</td><td>".$row5['SEAT_NO']."</td>
		<td>".$row7['PLATE_NUMBER']."</td>
		<td><input type='date' value='".date('Y-m-d' ,strtotime($row3['RESERVATION_DATE']))."' name='RESERVATION_DATE' onchange='javascript: activate(".$row3['RESERVATION_ID'].")'></td><td><input id='btn".$row3['RESERVATION_ID']."' type='submit' name='Change' value='Change' disabled=true></td></tr></form>";
		$no++;
	}
?>	
</table>
</div>
<?php	
}
?>
<script type="text/javascript">
	function activate(name) {
		document.getElementById('btn'+name).disabled = false;
	}
</script>
</body>
</html>