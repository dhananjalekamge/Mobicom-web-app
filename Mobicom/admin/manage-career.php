<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
if(isset($_POST['Update'])=="update")
{
echo "update user set resume_remark='".$_POST['rremark'].", resume_status='".$_POST['rstatus']."' where id=" . $_POST['frm_id'] . "";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Mobicom® CRM | Manage Career</title>
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
  
      <?php include("leftbar_mcareer.php");?>
    
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
        <p style="font-size:66px;">Manage Career</p>
      </div>
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Manage  <span class="semi-bold">Career Section</span></h4>
              <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
            </div>
            <div class="grid-body ">
         <form name="adminr" action="manage-career.php?update=yes&amp;id=<?php echo $_POST['id'];?>" method="post" enctype="multipart/form-data">
              <table class="table table-hover table-condensed" id="example">
                <thead>
                  <tr>
                    <th style="width:1%">#</th>
                    <th style="width:10%">Name | Email</th>
                    <th style="width:7%" data-hide="phone,tablet">Contact</th>
                    <th style="width:10%">Resume</th>
                     <th style="width:8%">Status</th>
                    <th style="width:20%" data-hide="phone,tablet">Admin remark</th>
                    <th style="width:10%">Action </th>
                  </tr>
                </thead>
                <tbody>
                
                <?php $ret=mysql_query("select * from user order by id desc");
				$cnt=1;
				while($row=mysql_fetch_array($ret))
				{?>
                     
                  <tr >
                    <td class="v-align-middle"><?php echo $cnt;?></td>
                    <td class="v-align-middle"><?php echo $row['name'];?> | <?php echo $row['email'];?></td>
                    <td><span class="muted"><?php echo $row['mobile'];?></span></td>
                    <td class="v-align-middle"><span class="muted"><?php $r=$row['resume'];
					if($r==NULL)
					{
						echo "Resume NA";
					}
					else
					{
					?>
                    <a href="../resumes/<?php echo $row['resume']; ?>">View Resume</a></span>
                    
                    <?php } ?></td>
                   
                    <td class="v-align-middle">
					<select name="rstatus" style="width:150px;">
                    <option value="<?php echo $row['resume_status'];?>"><?php echo $row['resume_status'];?></option>
					<option value="Not Selected">Not Selected</option>
                    	<option value="Under Review">Under Review</option>
                        	<option value="Shortlist for Interview">Shortlist for Interview </option>
                
                    </td>
                   
                    <td class="v-align-middle"><textarea name="rremark" cols="30" rows="4"><?php echo $row['resume_remark'];?></textarea>
                
                    </td>
                   
                      <td><input name="Update" type="submit"  class="txtbox1" id="Update" value="update" size="40" />
 <input name="frm_id" type="hidden" id="frm_id" value="<?php echo $row['id'];?>" /></td>
 
                  </tr>
                   </form>
                 <?php $cnt=$cnt+1; } ?>
                </tbody>
              </table>
             
            </div>
          </div>
        </div>
      </div>
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
