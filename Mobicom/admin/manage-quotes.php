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
<title>Mobicom® CRM | Manage Quotes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
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
        <p style="font-size:66px;">Manage Quotes</p>
      </div>
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Manage Tickets</h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
              <table class="table table-hover table-condensed" id="example">
                <thead>
                  <tr>
                    <th style="width:1%">#</th>
                    <th style="width:10%">Name</th>
                    <th style="width:10%" data-hide="phone,tablet">Email</th>
                    <th style="width:10%">Contact no</th>
                    <th style="width:20%" data-hide="phone,tablet">Services Required</th>
                    <th style="width:10%">Action </th>
                  </tr>
                </thead>
                <tbody>
                <?php $ret=mysql_query("select * from prequest order by id desc");
				$cnt=1;
				while($row=mysql_fetch_array($ret))
				{?>
                  <tr >
                    <td class="v-align-middle"><?php echo $cnt;?></td>
                    <td class="v-align-middle"><?php echo $row['name'];?></td>
                    <td class="v-align-middle"><span class="muted"><?php echo $row['email'];?></span></td>
                    <td><span class="muted"><?php echo $row['contactno'];?></span></td>
                    <td class="v-align-middle"><?php echo $row['wdd'];?>
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
                    </td>
                      <td><a href="quote-details.php?id=<?php echo $row['id'];?>"><button class="btn-danger-dark">View</button></a></td>
                  </tr>
                 <?php $cnt=$cnt+1; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     </div>
      
    <div class="addNewRow"></div>
  </div>
   
</div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>    
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
<script src="assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<script src="assets/js/datatables.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script>
<script src="assets/js/demo.js" type="text/javascript"></script>
</body>
</html>
