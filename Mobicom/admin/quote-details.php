<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
if(isset($_POST['remark']))
{
	$msg=mysql_query("update prequest set remark='".$_POST['adminremark']."' where id='".$_GET['id']."'");
	if($msg)
	{
	echo "<script>alert('Remark Updated');</script>";	
	}
}
?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Admin | Quote Details</title>
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
  
      <?php include("leftbar_mquotes.php");?>
    
      <div class="clearfix"></div>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>

    <div class="clearfix"></div>
    <div class="content">                           
    
   	<div class="page-title">		
		
		<p style="font-size:66px;">Quote Details</p>	
	</div>
 	<?php
    $ret=mysql_query("select * from prequest where id='".$_GET['id']."'");
	while($row=mysql_fetch_array($ret))
	{
	
	?>
      			<div class="row">
					<div class="col-md-12">
						    <div class="grid simple vertical green">
							<div class="grid-title no-border">
								<h4><?php echo $row['name'];?>'s Quote <span class="semi-bold">Details</span></h4>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#grid-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="grid-body no-border">
								<div class="row-fluid ">
									    <address class="margin-bottom-20 margin-top-10">
											<strong>Name</strong>:
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['name'];?><br>
                                            <strong>Email</strong>:
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['email'];?><br>
                                            <strong>Contact no.</strong>:
											&nbsp;<?php echo $row['contactno'];?><br>
											<strong>Company</strong>:
											&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['company'];?><br>
										</address>	
                                        <address class="margin-bottom-20 margin-top-10">
											<strong>Required Services</strong><br>
											<?php echo $row['wdd'];?><br>
                    <?php echo $row['cms'];?>
                    <?php echo $row['seo'];?>
                    <?php echo $row['smo'];?>
                    <?php echo $row['swd'];?>
                    <?php echo $row['dwd'];?>
                    <?php echo $row['fwd'];?>
                    <?php echo $row['dr'];?>
					<?php echo $row['whs'];?>
                    <?php echo $row['wm'];?>
					<?php echo $row['ed'];?>
					<?php echo $row['wta'];?>
					<?php echo $row['opi'];?>
					<?php echo $row['ld'];?>
					<?php echo $row['da'];?>
                    	<?php echo $row['osc'];?>
                        	<?php echo $row['nd'];?>
                            	<?php echo $row['others'];?>
											
										</address>										 
										<address>
											<strong>Description</strong><br>
										<?php echo $row['query'];?>
										</address>
                                        <form name="remark" action="" method="post" enctype="multipart/form-data">
                                        <address>
											<strong>Remark</strong><br>
										<textarea name="adminremark" cols="70" rows="4"><?php echo $row['remark'];?></textarea><br /><br />
                                        <input type="submit" name="remark" value="Submit" />
										</address>
                                        </form>
								</div>
							</div>
						</div> 
					</div>
				</div>
      			<?php } ?>
				
			
				</div>					
			 </div>			
        </div>    	
	</div> 
  </div>  
  <!-- END PAGE --> 

</div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>	
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>   
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>  
</body>
</html>