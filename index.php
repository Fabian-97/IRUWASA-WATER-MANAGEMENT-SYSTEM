<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['login']!=''){
$_SESSION['login']='';
}
if(isset($_POST['login']))
{
$mobileno=$_POST['mobileno'];
$password=md5($_POST['password']);
$sql ="SELECT MobileNumber,Password,UserId,Status FROM user WHERE MobileNumber=:mobileno and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['userid']=$result->UserId;
if($result->Status==1)
{
$_SESSION['login']=$_POST['mobileno'];
echo "<script type='text/javascript'> document.location ='dashboard.php';</script>"; 
} else {
$msg = "<center><p class='alert alert-warning alert-dismissible fade show'style='font-size:14px;'>your account has been blocked. Please contact admin</p></center>";

}
}
} 

else{
$msg = "<center><p class='alert alert-warning alert-dismissible fade show'style='font-size:14px;'>wrong mobile number or password</p></center>";
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
<title>Log In - IRUWASA</title>
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
</div>  <hr class="hr"> 
</div>
</header>
<?php $curdate=date("d/m/Y");?>
 
<div id="content-container">
<div id="login-container">
<div id="login-sub-container">
<div id="login-sub-header">
<p style="color: red; font-size: 14px;"><?php echo  $curdate; ?></p>
<p>LOG IN | IRUWASA</p><?php echo"$msg";?>
</div>

<div id="login-sub">
<div id="clickthrough_form" style="visibility:hidden">
</div>

<div id="forms">
<form name = "myForm" onsubmit = "return(validate());" id="login_form" role="form" method="post" target="_top" style="visibility:">

<div class="input-req-login"><label for="user">Mobile Number</label></div>
<div class="input-field-login icon username-container"><img src="img/icon-username.png">
<input name="mobileno" id="mobileno" autofocus="autofocus" value="" placeholder="Enter your mobile number." class="std_textbox" type="text"  tabindex="1">
</div>

<div class="input-req-login login-password-field-label"><label for="pass">Password</label></div>
<div class="input-field-login icon password-container"><img src="img/icon-password.png">
<input name="password" id="password" placeholder="Enter your account password." class="std_textbox" type="password" tabindex="2" >
</div>

<div class="controls">
<div class="login-btn">
<button name="login" type="submit" id="login_submit" tabindex="3">Log In</button>
</div>
</div>
<div class="clear" id="push"></div>
</form>
<!--CLOSE forms -->
</div>
<!--CLOSE login-sub -->
</div>
<ul class="login-more p-t-10">
<li><span class="txt1">Don’t have an account?
</span>
<a href="signup.php" class="txt2"style="color: blue;">
Sign up
</a>
</li>

<!-- ## -->
<li class="m-b-8"><span class="txt1">Forgot</span>
<a href="reset.php" class="txt2" style="color: blue;">
Mobile number / Password?</a></li>
</ul>
                    
<!--CLOSE wrapper -->
</div>
<!--CLOSE login-sub-container -->
</div>
<!--CLOSE login-container -->
</div>
</div>

<!--Close login-wrapper -->
</div>

<hr class="hr">
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
<div class="text-center"><span style="font-size: 14px;">Copyright ©</span><span id="copyrightDate"style="font-size:14px;"></span>
<a href="#" style="color: black;">IRUWASA </a> <span style="font-size: 14px;">All Rights Reserved.
<br>
Imesanifiwa, Imetengenezwa na</span> <a href="" target="_blank"style="color:blue;">MADATA DESIGN SOLUTIONS
</a>
</div>



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
function validate() {
      
if( document.myForm.mobileno.value == "" || isNaN(document.myForm.mobileno.value) || 
document.myForm.mobileno.value.length != 10 ) {
alert( "Please provide mobile number with 10 digits" );
document.myForm.mobileno.focus() ;
return false;
}
if( document.myForm.password.value == "" ) {
alert( "Please provide your password" );
document.myForm.password.focus() ;
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
