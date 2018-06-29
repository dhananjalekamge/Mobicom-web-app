
   <?php $ret=mysql_query("select * from user");
	  while($row=mysql_fetch_array($ret))
	  {
	  $ut=$row['user_type'];
	  }?> <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu" >
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper" style="background-color: rgb(27,30,36);">
      <div class="user-info-wrapper" style="background-color: rgb(27,30,36);">
        
        <div class="user-info">
          <div class="greeting" style="font-size:24px; ">Welcome</div>
          <div class="username" style="font-size:12px;"><?php echo $_SESSION['name'];?></div>
          <div class="status" style="font-size:10px;"><?php if($ut==0)
{
echo "Normal User";	
}
if($ut==1)
{
echo "Intern";	
}
if($ut==2)
{
echo "Clients";	
}
if($ut==3)
{
echo "Employee";	
}
	?><a href="#">
            <div class="status-icon green"></div>
            Online</a></div>
        </div>
      </div>
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      
   
<?php if($ut==1)
{?>
    <ul style="margin-top: 50px">	
      <li class="start"> <a href="dashboard.php"> <span class="title" style="font-size: 24px">Dashboard</span> <span class="selected"></span>  </a> 
		    </li>
    
          <li class="start" ><a href="change-password.php" style="font-size: 24px"> Change Password</a></li>
                            <li><a href="profile.php" style="font-size: 24px"> Profile</a></li>
                         
                            
                              <li ><a href="get-quote.php" style="font-size: 24px; color: white"> Request a Quote</a></li>
							     <li class="start"><a href="create-ticket.php" style="font-size: 24px">Create Ticket</a></li>
                                <li ><a href="view-tickets.php" style="font-size: 24px">View Ticket</a></li>
							<li class="start"><a href="career.php" style="font-size: 24px">Career</a></li>
                           
    </ul>
    <?php } ?>
    <?php if($ut==3)
{?>
    <ul style="margin-top: 50px"> 
      <li class="start"> <a href="dashboard.php"> <span class="title" style="font-size: 24px">Dashboard</span> <span class="selected"></span>  </a> 
        </li>
    
          <li class="start" ><a href="change-password.php" style="font-size: 24px"> Change Password</a></li>
                            <li><a href="profile.php" style="font-size: 24px"> Profile</a></li>
                         
                            
                              <li ><a href="get-quote.php" style="font-size: 24px; color: white"> Request a Quote</a></li>
                   <li class="start"><a href="create-ticket.php" style="font-size: 24px">Create Ticket</a></li>
                                <li ><a href="view-tickets.php" style="font-size: 24px">View Ticket</a></li>
              <li class="start"><a href="career.php" style="font-size: 24px">Career</a></li>
                           
    </ul>
    <?php } ?>
    <?php if($ut==0)
{?>
    <ul style="margin-top: 50px"> 
      <li class="start"> <a href="dashboard.php"> <span class="title" style="font-size: 24px">Dashboard</span> <span class="selected"></span>  </a> 
        </li>
    
          <li class="start" ><a href="change-password.php" style="font-size: 24px"> Change Password</a></li>
                            <li><a href="profile.php" style="font-size: 24px"> Profile</a></li>
                         
                            
                              <li ><a href="get-quote.php" style="font-size: 24px; color: white"> Request a Quote</a></li>
                  
              <li class="start"><a href="career.php" style="font-size: 24px">Career</a></li>
                           
    </ul>
    <?php } ?>
    <?php if($ut==2)
{?>
    <ul style="margin-top: 50px"> 
      <li class="start"> <a href="dashboard.php"> <span class="title" style="font-size: 24px">Dashboard</span> <span class="selected"></span>  </a> 
        </li>
    
          <li class="start" ><a href="change-password.php" style="font-size: 24px"> Change Password</a></li>
                            <li><a href="profile.php" style="font-size: 24px"> Profile</a></li>
                         
                            
                              <li ><a href="get-quote.php" style="font-size: 24px; color: white"> Request a Quote</a></li>
                   
              <li class="start"><a href="career.php" style="font-size: 24px">Career</a></li>
                           
    </ul>
    <?php } ?>
	