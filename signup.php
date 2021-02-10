<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['signup']))
{    
$count_my_page = ("iruwasa.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp); 
$UserId= $hits[0];   
$fname=$_POST['fullanme'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email']; 
$password=md5($_POST['password']); 
$status=1;
$sql="INSERT INTO  user(UserId,FullName,MobileNumber,EmailId,Password,Status) VALUES(:UserId,:fname,:mobileno,:email,:password,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':UserId',$UserId,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg = "<center><p class='alert alert-success alert-dismissible fade show'style='font-size:14px;'> signup successfull, is your id $UserId</p></center>";
}
else 
{
$msg = "<center><p class='alert alert-warning alert-dismissible fade show'style='font-size:14px;'>Something went wrong. Please try again</p></center>";
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
<title>Sign Up - IRUWASA</title>
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

<script>

/* -- ##-- */
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}


window.DOM = { get: function(id) { return document.getElementById(id) } };
</script>
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
<p>SIGN UP | IRUWASA</p><?php echo"$msg";?>
</div>

<div id="login-sub">
<div id="clickthrough_form" style="visibility:hidden">
</div>

<div id="forms">
<form name="signup" method="post" onSubmit="return valid();" id="login_form" target="_top" style="visibility:">

<div class="input-req-login"><label for="user">Full name</label></div>
<div class="input-field-login icon username-container"><img src="img/icon-username.png">
<input name="fullanme" id="fullanme" autofocus="autofocus" value="" placeholder="Enter your full name." class="std_textbox" type="text"  tabindex="1">
</div>

<div class="input-req-login login-password-field-label"><label for="pass">Mobile number</label></div>
<div class="input-field-login icon password-container"><img src="img/icon-mobile.png" width="7%">
<input name="mobileno" id="mobileno" placeholder="Enter your mobile number." class="std_textbox" type="text" tabindex="2" >
</div>

<div class="input-req-login login-password-field-label"><label for="pass">Email</label></div>
<div class="input-field-login icon password-container"><img src="img/icon-email.png" width="7%">
<input name="email"id="emailid" onBlur="checkAvailability()" placeholder="Enter your email." class="std_textbox" type="email" tabindex="2" >
</div>
<span style="font-size:12px;" id="user-availability-status"></span>


<div class="input-req-login login-password-field-label"><label for="pass">Password</label></div>
<div class="input-field-login icon password-container"><img src="img/icon-password.png">
<input name="password" id="password" placeholder="Enter your password." class="std_textbox" type="password" tabindex="2" >
</div>

<div class="controls">
<div class="login-btn">
<button name="signup" type="submit" id="submit" tabindex="3">Sign Up</button>
<ul class="login-more p-t-10">
<li><span class="txt1">Login?
</span>
<a href="index.php" class="txt2"style="color: blue;">
Click here
</a>
</li>

<!-- ## -->
<li class="m-b-8"><span class="txt1">Forgot</span>
<a href="reset.php" class="txt2" style="color: blue;">
Mobile number / Password?</a></li>
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

if( document.signup.fullanme.value == "" ) {
alert( "Please provide your name." );
document.signup.fullanme.focus() ;
return false;
}
      
if( document.signup.mobileno.value == "" || isNaN(document.signup.mobileno.value) || 
document.signup.mobileno.value.length != 10 ) {
alert( "Please provide mobile number with 10 digits." );
document.signup.mobileno.focus() ;
return false;
}


if( document.signup.email.value == "" ) {
alert( "Please provide your email." );
document.signup.email.focus() ;
return false;
}


if( document.signup.password.value == "" ) {
alert( "Please provide your password." );
document.signup.password.focus() ;
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
