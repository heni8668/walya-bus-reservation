	    <!-- Button to trigger modal -->
    
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Registration</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="add.php"  enctype="multipart/form-data">
					<table class="table1">

						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">User Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="username" placeholder="User Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Password</label></td>
							<td width="30"></td>
							<td><input type="text" name="password" placeholder="Password" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Email</label></td>
							<td width="30"></td>
							<td><input type="email" name="email" placeholder="Email" required /></td>
						</tr>
						
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Phone</label></td>
							<td width="30"></td>
							<td><input type="text" name="phone" placeholder="+251" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">User Type</label></td>
							<td width="30"></td>
	
							<td><select  name="type" placeholder="" name="type" id ="user" required>
                                        <option>select...</option>
										<option>admin</option>
										<option>manager</option>	
										<option>Clerk</option>
								                                    </select></td>
						</tr>
						
						
					</table>
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			