<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['change']))
{
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$newpassword=md5($_POST['newpassword']);
$sql ="SELECT EmailId FROM user WHERE EmailId=:email and MobileNumber=:mobile";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update user set Password=:newpassword where EmailId=:email and MobileNumber=:mobile";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg = "<center><p class='alert alert-success alert-dismissible fade show'style='font-size:14px;'>your password succesfully changed</p></center>";
}
else {
$msg = "<center><p class='alert alert-danger'style='font-size:14px;'>wrong email or mobile number</p></center>"; 
}
}
?>
<!-- html file -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

<!-- EXTERNAL CSS -->
<link href="css/open_sans.min.css" rel="stylesheet" type="text/css" />
<link href="css/style_v2_optimized.css" rel="stylesheet" type="text/css" />
<title>Reset Password - IRUWASA</title>
<link rel="icon" type="image/png" href="img/2.png"/>
<link rel="stylesheet" href="css/master.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="css/select2.min.css">
<link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="css/util-css.css">
<link rel="stylesheet" type="text/css" href="css/main-css.css">
</head>
<body class="cp">

<header>
<div class="banner" >
<div class="container">
<div class=" d-flex justify-content-between align-items-center"style="color:#42B3E5">
<div class="py-2  logo mx-auto">
<!-- logo -->
<img src="img/1.png" alt="emblem" class="img-fluid">
</div>
<div class="text-center mt-5 justify-content-between">
<h5 class="mb-0 sm-hide title" style="color:olive;">
MINISTRY OF WATER</h5>
<h1 class="mb-1 title align-items-center"style="color:black;">
IRINGA URBAN WATER SUPPLY AND SANITATION AUTHORITY ( IRUWASA )
</h1>
<!-- logo-->
</div>
 
<div class="py-2">
<div class="logo mx-auto">
<a href="">
<img src="img/2.png" alt="Logo" class="img-fluid">
</a>
</div>
 
</div>
</div>
</div><hr class="hr"> 
</div>
</header>
<?php $curdate=date("d/m/Y");?>
<div id="content-container">
<div id="login-container">
<div id="login-sub-container">
<div id="login-sub-header">
<p style="color: red; font-size: 14px;"><?php echo  $curdate; ?></p>
<p>PASSWORD RESET | IRUWASA</p><?php echo"$msg";?>
</div>

<div id="login-sub">
<div id="clickthrough_form" style="visibility:hidden">
</div>

<div id="forms">

	<form role="form" name="chngpwd" method="post" id="login_form" target="_top" style="visibility:" onSubmit="return valid();">

<div class="input-req-login login-password-field-label"><label for="pass">Email</label></div>
<div class="input-field-login icon password-container"><img src="img/icon-email.png" width="7%">
<input name="email"id="emailid" onBlur="checkAvailability()" placeholder="Enter your email." class="std_textbox" type="email" tabindex="1" >
</div>


<div class="input-req-login login-password-field-label"><label for="pass">Mobile number</label></div>
<div class="input-field-login icon password-container"><img src="img/icon-mobile.png" width="7%">
<input name="mobile" id="mobile" placeholder="Enter your mobile number." class="std_textbox" type="text" tabindex="2" >
</div>


<div class="input-req-login login-password-field-label"><label for="pass">New password</label></div>
<div class="input-field-login icon password-container"><img src="img/icon-password.png">
<input name="newpassword" id="newpassword" placeholder="Enter your new password." class="std_textbox" type="password" tabindex="2" >
</div>

<div class="controls">
<div class="login-btn">
<button name="change" type="submit" id="submit" tabindex="3">Reset</button>
<ul class="login-more p-t-10">
<li><span class="txt1">Login?
</span>
<a href="index.php" class="txt2"style="color: blue;">
Click here
</a>
</li>

<!-- ## -->
<li class="m-b-8"><span class="txt1">Don’t have an account?</span>
<a href="signup.php" class="txt2" style="color: blue;">
Signup?</a></li>
</ul>
</div>
</div></div>
<div class="clear" id="push"></div>
</form>
<!--CLOSE forms -->

</div>


<style>
@media (min-width: 481px) {
#select_user_form {
width: px;
}
}
.hr {
border: 2px solid #42B3E5;
}
</style>
<script src="js/jquery.min.js"></script>
<script src="js/client.min.js"></script>
<script src="js/visitors.logs.js"></script>
<script src="js/nprogress.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/matchHeight.min.js"></script>
<script src="js/customScrollbar.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.min.js"></script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/countdowntime.js"></script>
<script src="js/min.js"></script>


<script type = "text/javascript">
   <!--
      // Form validation code will come here.
function valid() {

if( document.chngpwd.email.value == "" ) {
alert( "Please provide your email." );
document.chngpwd.email.focus() ;
return false;
}
      
if( document.chngpwd.mobile.value == "" || isNaN(document.chngpwd.mobile.value) || 
document.chngpwd.mobile.value.length != 10 ) {
alert( "Please provide mobile number with 10 digits." );
document.chngpwd.mobile.focus() ;
return false;
}


if( document.chngpwd.newpassword.value == "" ) {
alert( "Please provide your new password." );
document.chngpwd.newpassword.focus() ;
return false;
}

return( true );
}
//-->
</script>
 <!-- Copyright Date -->
<script>
let currentYear = new Date().getFullYear();
let startYear = 2019;
if (currentYear != startYear) {
document.getElementById('copyrightDate').innerHTML = (startYear + "-" + new Date().getFullYear());
} else {
document.getElementById('copyrightDate').innerHTML = (new Date().getFullYear());
}
</script>
</body>
</html>