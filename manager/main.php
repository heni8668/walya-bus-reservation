<?php
	include ('session.php');
	require("conection/connect.php");
	$tag="";
	if (isset($_GET['tag']))
	$tag=$_GET['tag'];
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Walya bus transport system</title>
<link rel="stylesheet" type="text/css" href="css/main_format.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/>
<link rel="stylesheet" href="css/w3css.css">
</head>
<body>
   <div id="top">
      <div id="user">
      <table border="0" width="100%" height="100%">
      <tr><td width="20%"><img width="100%" height="100%" /></td><td><h1 style="text-align:center ">WALYA BUS ONLINE TICKET RESERVATION SYSTEM</h1>	</td>
			<td>		
        <div class="w3-dropdown-click">
  <button onclick="myFunction()" class="w3-button w3-black"><b> <img align="center" width="50px" height="50px"  src="picture/admin.png"/>
<?php
								include('conection/connect.php');
								$user_query=mysql_query("select *  from user where u_id='$id_session'")or die(mysql_error());
								$row=mysql_fetch_array($user_query); {
							?>
							
								 <?php echo $row['username']; ?>&nbsp;&nbsp;<img align="center" src="picture/nav_bullet.jpg"/>
								
							
<?php } ?>
							
								

						</b></button>
  <div id="Demo" class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-zoom">
    
    <a href="logout.php"  style="background:linear-gradient(red,green,green,red);"  class="w3-bar-item w3-button"><img align="center" width="25px" height="20px" src="picture/logout.png"/><b> Log Out</b></a>
  </div>
</div>
</td></tr>
</table>    
      </div>   
</div>
<div id="admin">
	<div id="lmain">
                <div id="leftmanu">
                	<div >
                        <a href="?tag=home" title="home">&nbsp;HOME</a><br />
                	</div>
                    <div>
                    	<a href="main.php?tag=printing" class="customer" title="print report">&nbsp;Print Report</a>
                    </div>
                    
                    <div>
                    	<a href="main.php?tag=chpass" class="customer" title="change pass">&nbsp;change password</a>
                    </div>   
					<div>
                    	<a href="main.php?tag=notice" class="customer" title="notice">&nbsp;Notice</a>
                    </div> 
                </div><!-- end of leftmanu -->
        </div><!--end of lmaim -->
        <div>   
        </div>
    <div id="rmain">
    	<div id="pic_manu">
    	<table border="0" width="100%" height="47px" >
    	<tr>
    	<td width="100px">
		<a href="main.php?tag=user_entry" class="sales" title="Add User"><img src="picture/admin.png" height="60px"  hspace="30px" /> </a>
		</td>
		<td>
		<h3 align="left" style="color:black">WELCOME TO MANAGER SITE</h3>
		</td>
		</tr>
		</table>
             </div><!--end of pic_manu -->
        
         <div id="menu2">
                
                <div style="width:4px; height:37px; padding:0px; margin:0px; float:left;"></div>
                
				<li id="li_menu"><a href="#">Routes</a>
                    
                    <ul>
                        <li id="li_submenu">
                        <a href="main.php?tag=route_entry" class="order">Route Entry</a></li>
                        <li id="li_submenu"><a href="main.php?tag=view_route" class="stocks">View Routes</a></li>
                    </ul>
                   </li>
				   <li id="li_menu"><a href="#">Bus</a>
                    <ul>
                        <li id="li_submenu">
                        <a href="main.php?tag=bus_entry" class="sales">Bus Entry</a></li>
                        <li id="li_submenu"><a href="main.php?tag=view_bus" class="stocks">View Buses</a></li>
                    </ul>
                </li>
               				
                <li id="li_menu"><a href="#">Comment</a>
                    <ul>
                        <li id="li_submenu">
                        <a href="main.php?tag=view_comment" class="sales">View Comment</a></li>
                       
                    </ul>
                </li>
              
                <li id="li_menu"><a href="#">Report</a>
                    <ul>
                        <li id="li_submenu">
                        <a href="main.php?tag=printing" class="sales">Reservation</a></li>
                        <li id="li_submenu">
                        <a href="main.php?tag=seats" class="sales">Booked Seats</a></li>
                        <li id="li_submenu">
                        <!--a href="main.php?tag=passenger" class="sales">Passengers</a></li-->
                        <li id="li_submenu">
                        <a href="main.php?tag=view_man" class="sales">user</a></li>
						<li id="li_submenu">
                        <!--a href="main.php?tag=clerk" class="sales">Clerk</a></li-->
                        <li id="li_submenu">
                        <a href="main.php?tag=bus" class="sales">Buses</a></li>
                        
                    </ul>
                </li>
                <li id="li_menu"><a href="#">Reservation</a>
                    <ul>
                        <li id="li_submenu">
                        <a href="main.php?tag=view_reservation" class="sales">View Reservation</a></li>
                        
                    </ul>
                </li>
				        
						
			
                </li>
      </div><!--end of menu2--> 
            
			
			
            
            <div id="contents">
            
            	<div id="informations">
                	<div id="in_informations">
				<?php
   						if($tag=="home" or $tag=="")
							include("home.php");
						
                            elseif($tag=="clerk_entry")
                            include("clerk_entry.php");
							
							elseif($tag=="clerk_entry")
                            include("clerk_reg.php");
							
							elseif($tag=="view_clerk")
                            include("view_clerk.php");
							
                            elseif($tag=="account_entry")
                            include("account_entry.php");
							
							elseif($tag=="managercc")
                            include("managercc.php");
							
							elseif($tag=="reg")
                            include("reg.php");
                
							 elseif($tag=="view_route")
                            include("view_route.php");
							
                            elseif($tag=="route_entry")
                            include("route_entry.php");
                            
                            elseif($tag=="bus_entry")
                            include("bus_entry.php");
                            
                            
                            elseif($tag=="view_bus")
                            include("view_bus.php");
                            
                             elseif($tag=="view_comment")
                            include("view_comment.php");
                            
                             elseif($tag=="view_reservation")
                            include("view_reservation.php");
                            
                             elseif($tag=="check_account")
                            include("check_account.php");
                               elseif($tag=="notice")
                            include("send_notice.php");
                            
							elseif($tag=="view_man")
                            include("view_man.php");

                            elseif($tag=="printing")
                            include("Print.php");
							
						   elseif($tag=="view_account")
                            include("view_account.php");
                            
                            
                            elseif($tag=="seats")
                            include("seats.php");
                            
                            elseif($tag=="passenger")
                            include("passenger.php");
                            
                            elseif($tag=="clerk")
                            include("clerk.php");
                            
                            elseif($tag=="bus")
                            include("bus.php");
							
							elseif($tag=="chpass")
                            include("changepass.php");
							
							elseif($tag=="download")
                            include("../download.php");
                        	/*$tag= $_REQUEST['tag'];
							
							if(empty($tag)){
								include ("Customer_Entryphp");
							}
							else{
								include $tag;
							}*/
									
                        ?>
                    </div><!--end of in_informations -->
                </div><!--end of informations -->
    		</div><!--end of contens --> 
    		
     </div><!--end of rmain -->
     
    	 
    </div><!--end of admin -->
    <div id="footer">
     	<h3 align="center" ><b> &copy; Copyright-<?php echo date("Y");?> Walya Bus | All Rights Reserved</b></h3><br />
     </div> 
<script>
function myFunction() {
    var x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
</body>
</html>