<?php 
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Mobicom® CRM | Manage Clients</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row"> 
  
      <?php include("leftbar_clients.php");?>
    
      <div class="clearfix"></div>
    </div>
  </div>
    <div class="page-content">
            <div id="portlet-config" class="modal hide">
                <div class="modal-header">
                    <button data-dismiss="modal" class="close" type="button"></button>
                     <h3>Widget Settings</h3>

                </div>
                <div class="modal-body">Widget settings form goes here</div>
            </div>
            <div class="clearfix"></div>
            <div class="content">
                
                <div class="page-title">	

                    	<p style="font-size:66px;">Manage Clients</p>	
                </div>
             
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="grid simple ">
                                    <div class="grid-title no-border">
                                        	<h4>All Client Details</h4>
                                        <div class="tools">	<a href="javascript:;" class="collapse"></a>
											<a href="#grid-config" data-toggle="modal" class="config"></a>
											<a href="javascript:;" class="reload"></a>
											<a href="javascript:;" class="remove"></a>
                                        </div>
                                    </div>
                                    <div class="grid-body">
                              
                                            <table class="table table-hover table-condensed" id="example">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Full Name</th>
                                                        <th>Email ID </th>
                                                        <th>Contact No</th>
                                                        <th>Registration Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php $ret=mysql_query("select * from user where user_type='2'");
												$cnt=1;
												while($row=mysql_fetch_array($ret))
												{
													$_SESSION['uid']=$row['email'];
												?>
                                                    <tr>
                                                        <td><?php echo $cnt;?></td>
                                                        <td><?php echo $row['name'];?></td>
                                                        <td><?php echo $row['email'];?></td>
                                                         <td><?php echo $row['mobile'];?></td>
                                                          <td><?php echo $row['posting_date'];?></td>
                                                          <td> 
                                 <a href="edit-user.php?id=<?php echo $row['id'];?>" class="btn btn-primary btn-xs btn-mini">View n Edit</a>
                                                           <button type="button" class="btn btn-danger btn-xs btn-mini">Delete </button>
                                                          </td>
                                                    </tr>
                                                    <?php $cnt=$cnt+1; } ?>
                                                </tbody>
                                            </table>
                                   <?php
                         
						 
						 {?>            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header"><b>Users's Details</b>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <br>
                        </div>
                       
                        <div class="modal-body">
                       
                        <form name="muser" method="post" action="" enctype="multipart/form-data">
                        
                     <table width="100%" border="0">
  <tr>
    <td height="42">Name</td>
    <td><input type="text" name="name" id="name" value="<?php echo $rw['name'];?>" class="form-control"></td>
  </tr>
  <tr>
    <td height="42">Email</td>
    <td><input type="text" name="email" id="email" value="<?php echo $rw['email'];?>" class="form-control"></td>
  </tr>
  <tr>
    <td height="42">Alt Email</td>
    <td><input type="text" name="altemail" id="altemail" value="<?php echo $rw['alt_email'];?>" class="form-control"></td>
  </tr>
  <tr>
    <td height="42">Contact no.</td>
    <td><input type="text" name="contact" id="contact" value="<?php echo $rw['mobile'];?>" class="form-control"></td>
  </tr>
  <tr>
    <td height="42">Gender</td>
    <td><select name="gender" class="form-control">
    <option value="<?php echo $rw['gender'];?>"><?php echo $rw['gender'];?></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
    </select>
    
    </td>
  </tr>
  <tr>
    <td height="42">User Image</td>
    <td><img src="../userimages/<?php echo $rw['user_image'];?>" width="120" height="80"  style="border:solid 1px #000000;" /></td>
  </tr>
  <tr>
    <td height="42">User Type</td>
    <td><select name="usert" class="form-control">
    <option value="<?php echo $rw['user_type'];?>"><?php  $ut=$rw['user_type'];
	if($ut==0)
	{ echo "Normal User";
	}
	if($ut==1)
	{ echo "Intern";
	}
	if($ut==2)
	{ echo "Client";
	}
	if($ut==3)
	{ echo "Employee";
	}
	
	?></option>
    <option value="0">Normal User</option>
    <option value="1">Intern</option>
    <option value="2">Client</option>
    <option value="3">Employee</option>
    </select></td>
  </tr>
  <tr>
    <td height="42">Address</td>
    <td><textarea name="address" cols="64" rows="4"><?php echo $rw['address'];?></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="42"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</form>


                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div><?php } ?>
                  <!-- /.modal -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
					</div>
                </div>
            </div>
            <!-- END PAGE -->
        </div>

 </div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK--> 
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<!-- END CORE JS FRAMEWORK --> 
<!-- BEGIN PAGE LEVEL JS --> 	
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-sparkline/jquery-sparkline.js"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS --> 	
<script>
	//Too Small for new file - Helps the to tick all options in the table 
	$('table .checkbox input').click( function() {			
		if($(this).is(':checked')){			
			$(this).parent().parent().parent().toggleClass('row_selected');					
		}
		else{	
		$(this).parent().parent().parent().toggleClass('row_selected');		
		}
	});
	// Demo charts - not required 
	$('.customer-sparkline').each(function () {	
		$(this).sparkline('html', { type:$(this).attr("data-sparkline-type"), barColor:$(this).attr("data-sparkline-color") , enableTagOptions: true  });	
	});
</script>
<!-- BEGIN CORE TEMPLATE JS --> 
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 
<!-- END CORE TEMPLATE JS --> 
</body>

</html>