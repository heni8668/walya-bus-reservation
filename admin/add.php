<?php
mysql_connect("localhost", "root", "root") or die (mysql_error());
			mysql_select_db("walya_last")or die (mysql_error());
	 /** calling of connection.php that has the connection code **/
			include('include/database.php');/** calling of connection.php that has the connection code **/
			
			if( isset( $_POST['Submit'] ) ): /** A trigger that execute after clicking the submit 	button **/
				
				/*** Putting all the data from text into variables **/
			//$date=$_POST['date'];
				$username = $_POST['username'];
				$password = $_POST['password'];
	          $email=$_POST['email'];			
			$type = $_POST['type'];
				$phone = $_POST['phone'];
			
				mysql_query("INSERT INTO user(username,password,phone,type,email)  
							VALUES('$username','$password','$phone','$type','$email')")
							or die(mysql_error()); /*** execute the insert sql code **/
			echo "<div class='alert alert-info'> Successfully Saved. </div>"; /** success message **/
				
			endif;
		?>