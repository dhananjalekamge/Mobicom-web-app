<?php
session_start();
//echo $_SESSION['id'];
//$_SESSION['msg'];
include("dbconnection.php");
include("checklogin.php");
check_login();
if(isset($_GET['del']))
		  {
		          mysql_query("update user set resume='' where id = '".$_GET['del']."'");
                  $_SESSION['del']="Data deleted !!";
		  }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Mobicom® CRM  | Career</title>
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
  <script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+400+',height='+400+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
<script>
            function scroll_to_bottom(){
                var objDiv = document.getElementById("divExample");
                objDiv.scrollTop = objDiv.scrollHeight;
            }
        </script>
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row-fluid">

     <?php include("leftbar_career.php");?>
 
      <div class="clearfix"></div>
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
  <p style="font-size:66px;">Career</p>  
      </div>
     
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
              <h4>Your Career Section </h4>
            </div>
            <div class="grid-body ">
              <table class="table table-striped"  >
                <thead>
                  <tr>
                    <th width="5%">Sno. </th>
                    <th width="16%">Name</th>
                    <th width="11%">Status </th>
                    <th width="10%">Resume </th>
                    <th width="16%">Posting Date </th>
                    <th width="348%">Reamrk</th>
                    <th width="8%">Action</th>
                  </tr>
                </thead>
                
                <tbody> <?php $rt=mysql_query("select * from user where email='".$_SESSION['login']."'");
													while($row=mysql_fetch_array($rt))
													{
													?> 
                
               <tr>
                                                    <td class="text-center">1</td>
                                                    <td><strong><?=$row['name'];?></strong>   </td>
                                                    <td><span class="label label-success"><?=$row['resume_status'];?></span></td>
                                                    <td>
													
													<?php $r=$row['resume'];
													if($r==NULL)
													{
													
													echo "File no available";  ?>
													<?php } else { ?>
												
													
													<?php echo $row['resume'];?>|<a href="resumes/<?=$row['resume']; ?>"> | Preview
													<?php } ?></td>
                                                    <td><?=$row['r_posting_date'];?></td>
                                                 
													<td><?=$row['resume_remark'];?></td>
                                                       <td>
                                                        <a   href="javascript:void(0);"  onClick="popUpWindow('http://www.nsbm.lk/')" class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></a>
       <a href="career.php?del=<?=$row['id'];?>" class="btn btn-danger btn-rounded btn-sm" onClick="return confirm("Are you sure");"><span class="fa fa-times"></span></a>
                                                    </td>
                                                </tr>
                                              <?php } ?>
                
                 
                
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
