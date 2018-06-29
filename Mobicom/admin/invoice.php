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
<title>Invoice</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
<?php include("header.php");?>
<div class="page-container row"> 
  <?php include("leftbar.php");?>
      <div class="clearfix"></div>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>

  <!-- BEGIN PAGE CONTAINER-->
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
	 <div class="row">
      <div class="col-md-11">
        <div class="grid simple">
          <div class="grid-body no-border invoice-body"> <br>
            <div class="pull-left"> <img src="images/LOGO.JPEG" data-src="images/LOGO.JPEG" data-src-retina="images/LOGO.JPEG" width="222" height="61" class="invoice-logo" alt="">
              <address>
              <strong>PHPGURUKUL.</strong><br>
                          New Delhi-110001 India<br>
              <abbr title="Phone">P:</abbr> +91-1234567890
              </address>
            </div>
            <div class="pull-right">
              <h2>invoice</h2>
            </div>
            <div class="clearfix"></div>
            <br>
            <br>
            <br>
            <?php $ret=mysql_query("select * from invoice where id='".$_GET['id']."'");
			while($row=mysql_fetch_array($ret))
			{?>
            <div class="row">
              <div class="col-md-9">
                <h4 class="semi-bold">Daren forthway</h4>
                <address>
                <strong><?php echo $row['clientname'];?></strong><br>
               <?php echo $row['address'];?>
                <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
              </div>
              <div class="col-md-3"> <br>
                <div>
                  <div class="pull-left"> INVOICE NO : </div>
                  <div class="pull-right"> <?php echo $row['invoceno'];?> </div>
                  <div class="clearfix"></div>
                </div>
                <div>
                  <div class="pull-left"> INVOICE DATE : </div>
                  <div class="pull-right"> <?php echo $row['invoicedate'];?>  </div>
                  <div class="clearfix"></div>
                </div>
                <br>
                <div class="well well-small green">
                  <div class="pull-left"> Total Due : </div>
                  <div class="pull-right"> <?php echo $td=$row['pqty']*$row['amount'];?>  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th style="width:60px" class="unseen text-center">QTY</th>
                      <th style="width:60px" class="unseen text-center">PRODUCT</th>
                  <th class="text-left">DESCRIPTION</th>
                  <th style="width:140px" class="text-right">UNIT PRICE</th>
                  <th style="width:90px" class="text-right">TOTAL</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="unseen text-center"><?php echo $row['pqty'];?> </td>
                  <td class="unseen text-center"><?php echo $row['pname'];?> </td>
                  <td><?php echo $row['description'];?> </td>
                  <td class="unseen text-center"><?php echo $row['amount'];?> </td>
                 <td class="unseen text-center"><?php echo $ta=$row['pqty']*$row['amount'];;?> </td>
                </tr>
               
                <tr>
                  <td colspan="3" rowspan="4" ><h4 class="semi-bold">terms and conditions</h4>
                    <p>Thank you for your business. We do expect payment within 21 days, so please process this invoice within that time. There will be a 1.5% interest charge per month on late invoices.</p>
                    <h5 class="text-right semi-bold">Thank you for your business</h5></td>
                  <td class="text-right"><strong>Subtotal</strong></td>
                  <td class="text-right"><?php echo $ta;?></td>
                </tr>
               
                
                <tr>
                  <td class="text-right no-border"><div class="well well-small green"><strong>Total</strong></div></td>
                  <td class="text-right"><strong><?php echo $ta;?></strong></td>
                </tr>
              </tbody>
            </table>
            <br>
            <br>
            <h5 class="text-right text-black">Authorized Sign</h5>
            <h5 class="text-right semi-bold text-black">PHPGURUKUL </h5>
            <br>
            <br>
          </div>
        </div>
      </div>
      <?php } ?>
      <div class="col-md-1">
        <div class="invoice-button-action-set">
          <p>
            <button class="btn btn-primary" type="button"><i class="fa fa-print"></i></button>
          </p>
          <p>
            <button class="btn " type="button"><i class="fa fa-cloud-download"></i></button>
          </p>
        </div>
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
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script>
</body>
</html>