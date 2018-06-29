<?php
session_start();
include("dbconnection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobile=$_POST['phone'];
	$gender=$_POST['gender'];
	$date=date('y-m-d');
  $psw = md5($password);
	$ut=0;
	$query=mysql_query("select email from user where email='$email'");
	$num=mysql_fetch_array($query);
	if($num>1)
	{
	$_SESSION['msg']="Email-id already register with us";	
	}
	else
	{
 mysql_query("insert into user(name,email,password,mobile,gender,user_type,posting_date) values('$name','$email','$psw','$mobile','$gender','$ut','$date')");
	$_SESSION['msg']="Successfully register with us";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Mobicom® CRM | Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
	  <script type="text/javascript">
function emailcheck1(str) 
    {
	    var at="@"
	    var dot="."
	    var lat=str.indexOf(at)
	    var lstr=str.length
	    var ldot=str.indexOf(dot)
	    if (str.indexOf(at)==-1)
	    {	   
	       return false;
	    }

	    if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
	    {	   
	       return false;
	    }

	    if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
	    {	    
	        return false;
	    }

        if (str.indexOf(at,(lat+1))!=-1)
        {	    
            return false;
        }

	    if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
	    {	    
	        return false;
	    }

	    if (str.indexOf(dot,(lat+2))==-1)
	    {	    
	        return false;
	    }
    	
	    if (str.indexOf(" ")!=-1)
	    {	    
	        return false;
	    }
	     return true;					
    }

	function validation12()
    {      
     var flag=0; 
		   if(document.getElementById('name').value=="")
            {
            document.getElementById('errname').innerHTML="*Name field is empty.";
            flag=1;
            document.getElementById('errname').style.display="block";
            }
            else
            {
            document.getElementById('errname').style.display="none";
            }   
			
			if(emailcheck1(document.getElementById('email').value)== false)
            {
             document.getElementById('vldt').innerHTML="*Enter Valid Email id.";
            flag=1;
            document.getElementById('vldt').style.display="block";
            }
            else
            {
            document.getElementById('vldt').style.display="none";
            } 
			
			 if(document.getElementById('password').value=="")
            {
            document.getElementById('pwd').innerHTML="*Password field empty.";
            flag=1;
            document.getElementById('pwd').style.display="block";
            }
            else
            {
            document.getElementById('pwd').style.display="none";
            } 
			 if(document.getElementById('cpassword').value=="")
            {
            document.getElementById('cpwd').innerHTML="*Confirm password field empty.";
            flag=1;
            document.getElementById('cpwd').style.display="block";
            }
            else
            {
            document.getElementById('cpwd').style.display="none";
            } 
			
			 if(document.getElementById('cpassword').value!=document.getElementById('password').value)
            {
            document.getElementById('mpwd').innerHTML="*Password or Cofirm Password doesnot match.";
            flag=1;
            document.getElementById('mpwd').style.display="block";
            }
            else
            {
            document.getElementById('mpwd').style.display="none";
            } 
			
			if(document.getElementById('phone').value.length<10)
            {
            document.getElementById('mb').innerHTML="*Enter 10 digit valid mobile number.";
            flag=1;
            document.getElementById('mb').style.display="block";
            }
            else
            {
            document.getElementById('mb').style.display="none";
            }
		
			  
        if(flag==1)
        {
            return false;
        }        
        return true;
    }  

	function numbersonly(e)
    {
     var unicode=e.charCode? e.charCode : e.keyCode
    if (unicode!=8){

    if(unicode<48||unicode>57)
    return false
    }
    }
	
</script>

</head>
<body class="error-body no-top">
<div class="container">
  <div class="row login-container column-seperation">  
        <div class="col-md-5 col-md-offset-1">
          <h2>Sign in to CRM</h2>
          <p>            <a href="index.php">Sign in Now!</a> for an account,It's free and always will be..</p>
          <br>

		  
        </div>
        <div class="col-md-5 "> <br>
        
		 <form id="validate"  class="login-form" action="" method="post">
		 <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Name</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="text" name="name" id="name" class="form-control">                                 
				</div>
                <span class="help-block"><div style="color:#F00;" id="errname"></div></span>
            </div>
          </div>
          </div>
           <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Email id</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="email" name="email" id="email" class="form-control">                                 
				</div>
                <span class="help-block"><div style="color:#F00;" id="vldt"></div></span>
            </div>
          </div>
          </div>
           <div class="row">
		 <div class="form-group col-md-10">
            <label class="form-label">Password</label>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="password" name="password" id="password" class="form-control" minlength="8" maxlength="16">                                 
				</div>
                <span class="help-block">     <div style="color:#F00;" id="pwd"></div>  	</span>
            </div>
          </div>
          </div>
		  <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Re-Password</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="password" name="cpassword" id="cpassword" class="form-control">                                 
				</div>
                <span class="help-block">  <div style="color:#F00;" id="cpwd"></div>
         <div style="color:#F00;" id="mpwd"></div></span>
            </div>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Contact no.</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="text" name="phone" id="txtpassword" class="form-control">                                 
				</div>
                
                                            <span class="help-block"> <div style="color:#F00;" id="mb"></div></span>
            </div>
          </div>
          </div>
          <div class="row">
          <div class="form-group col-md-10">
            <label class="form-label">Gender</label>
            <span class="help"></span>
            <div class="controls">
				<div class="input-with-icon  right">                                       
					<i class=""></i>
					<input type="radio" value="m" name="gender" checked > Male
                                              <input type="radio" value="f" name="gender" > Female
                                
				</div>
            </div>
          </div>
          </div>
         <div class="row">
            <div class="col-md-10">
              <input onClick="return validation12();"  class="btn btn-primary btn-cons pull-right" name="submit" value="Submit" type="submit" />
            </div>
          </div>
		  </form>
        </div>
     
    
  </div>
</div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/login.js" type="text/javascript"></script>
</body>
</html>