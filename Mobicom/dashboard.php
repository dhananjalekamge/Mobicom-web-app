<?php
session_start();
include("checklogin.php");
check_login();
include("dbconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Mobicom® CRM | Dashboard </title>
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
<div class="page-container row-fluid">	
	<?php include("leftbar_dashboard.php");?>
	<div class="clearfix"></div>
  </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
   <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>		
	</div>
	<div class="pull-right">
	</div>
  </div>
  <div class="page-content"> 
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
			<p style="font-size:66px;">Dashboard</p>
            <div class="row 2col">
          <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
            <div class="tiles  added-margin">
              <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <?php $ret=mysql_query("select * from ticket where email_id='".$_SESSION['login']."'");
				$num=mysql_num_rows($ret);
				?>
                <div class="heading"> <span class="animate-number" data-value="<?php echo $num;?>" data-animation-duration="9999">0</span>| <a href="view-tickets.php" style="color:#FFF"> View Tickets </a></div>
                
                <div class="progress transparent progress-small no-radius">
                  <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="20%"></div>
                </div>
             
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
            <div class="tiles  added-margin">
              <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
               
                <div class="heading"> <span class="fa fa-ticket"></span>
                <a href="get-quote.php" style="color:#FFF">Get Quote</a>
                 </div>
                <div class="progress transparent progress-small no-radius">
                  <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="40%" ></div>
                </div>
               
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 spacing-bottom">
            <div class="tiles  added-margin">
              <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
             
                <div class="heading">  <span class="fa fa-user"></span>
                 <a href="profile.php" style="color:#FFF">My Profile</a>
                 </div>
                <div class="progress transparent progress-white progress-small no-radius">
                  <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="60%" ></div>
                </div>
               
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="tiles  added-margin">
              <div class="tiles-body">
                <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                
                <div class="row-fluid">
                  <div class="heading"> <span class="fa fa-ticket"></span>
                  <a href="create-ticket.php" style="color:#FFF">Create </a>
                   </div>
                  <div class="progress transparent progress-white progress-small no-radius">
                    <div class="progress-bar progress-bar-white animate-progress-bar" data-percentage="80%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            	
		</div>
    </div>
  </div>
  
  
  
  
<!-- BEGIN CHAT --> 
<div class="chat-window-wrapper">
	<div id="main-chat-wrapper" class="inner-content">
     
          
            <div class="side-widget fadeIn">
               <div class="side-widget-title">Chat Panel</div>
             <div><?php include("chat.php");?></div>
            </div>
        </div>

       
    </div>
</div>
 </div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 

</body>
</html>