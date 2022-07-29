<?php
include("include/see1.php");

require("conection/connect.php");

session_start();
$connection = mysql_connect("localhost","root","");

if (!$connection)

{

die ("Could not connect to the database: <br />". mysql_error());

}

mysql_select_db('goldenbus');


// check for form submission - if it doesn't exist then send back to contact form

function createRandomPassword()
{
	
srand((double)microtime()*1000000);
	
$i = 0;
	
$pass = '' ;
	
while ($i <= 7) 
{
		
$num = rand() % 33;
		
$tmp = substr($num, 1);
		
$pass = $pass . $tmp;
		
$i++;
	
}

	
return $pass;

}

$confirmation = createRandomPassword();
$depcity = $_POST['depcity'];
$descity =  $_POST['descity'] ;

$doj =  $_POST['date'] ;


$fare = $_POST['fare'] ;

$fname = $_POST['fname'] ;

$lname= $_POST['lname'] ;

$telephone =$_POST['telephone'] ;

$age = $_POST['age'] ;

$busid =$_POST['busid'] ;

$total =$_POST['total'] ;



// Success
$query = "INSERT INTO reservation (fname, lname, telephone,age,depcity,descity,date,fare,transaction_no, busid, total) VALUES ('" . $fname . "','" . $lname . "','" . $telephone . "','" . $age . "','" . $depcity . "','" . $descity . "','" . $doj . "','" . $fare . "','" . $confirmation ."','" . $busid ."','" . $total."')";


//$insert = mysql_real_escape_string($query);


$results = mysql_query($query);


if (!$results)
{
	die ("Could not insert to the reservation: <br />". mysql_error());

}


$seatNumber = NULL;


for($i=1;$i<50; $i++)

{
	
$chparam = "ch" . strval($i);
	
$calcPNR = $doj . "-" . strval($i);
	
if( !empty($_POST[$chparam]) )
	
{

$query = "INSERT INTO seat1(transaction_no,number, PNR, date, depcity, descity, fare, busid) VALUES ('". $confirmation ."', '" . intval($i) . "', '". $calcPNR ."', '". $doj ."','". $depcity ."','". $descity ."','". $fare ."','". $busid ."')";

//$results = mysql_real_escape_string($query);
		
$results = mysql_query($query);
		
if (!$results)
		
{
			
die ("Could not update seat: <br />". mysql_error());
		
}
		
$seatNumber = $seatNumber .", ". "$i";
	
}
}


if(!empty($message))

{
	
$message = "A new user '". $name ."' has booked seat number: '". $seatNumber ."'." . "His message is as below." . $message;	

}

else

{
	
$message = "A new user '". $name ."' has booked seat number: '". $seatNumber;	

}

		

// write the email content


$messageUser = "Your ticket is booked. The seat number is: " . $seatNumber;


// send the email to admin
//Please replace below email to email of your website admin, so that admin will receive email on every seat book.
mail ("openingknots@gmail.com", "New ticket booked", $email_content);


//send email to user
mail ($email, "Ticket booked", $messageUser);


mysql_close($connection);	

// send the user back to the form

header("location: print.php?id=$confirmation&date=$doj");




 

mysql_close($conn1);

mysql_close($conn2);



?>
