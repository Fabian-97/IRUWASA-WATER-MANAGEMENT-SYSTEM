<?php 
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/dbconnection.php');
if(strlen($_SESSION['login'])==0)
{ 
header('location:index.php');
}
else {
if(isset($_POST['submit']))
{
$resident=$_POST['resident'];
$street=$_POST['street'];
$ometer=$_POST['ometer'];
$landlord=$_POST['landlord'];
$address=$_POST['address'];
$hnumber=$_POST['hnumber'];
$employee=$_POST['employee'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$npipe=$_POST['npipe'];
$installation=$_POST['installation'];
$date=$_POST['date'];
$reason=$_POST['reason'];
$newmeter = mt_rand(999000000, 999999999);
  
$query=mysqli_query($con,"insert into  newmeter (NewMeter,Resident,Street,	OMeter,Landlord,Address,HNumber,Employee,Email,Mobile,PNumber,Installation,Date,Reason) value('$newmeter','$resident','$street','$ometer','$landlord','$address','$hnumber','$employee','$email','$mobile','$npipe','$installation','$date','$reason')");
if ($query) {
$ret=mysqli_query($con,"select NewMeter from newmeter where Email='$email' and  Mobile='$mobile'");
$result=mysqli_fetch_array($ret);
$_SESSION['newmeter']=$result['NewMeter'];
echo "<script>window.location.href='new_meter.php'</script>";	
}
else
{
$msg="Something Went Wrong. Please try again";
}  
}

?>

<!---html file --->

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
<meta name="description">
<meta name="msapplication-tap-highlight" content="no">
<head>

<title>IRINGA URBAN WATER SUPPLY AND SANITATION AUTHORITY</title>

<link rel="shortcut icon" href="img/2.png">	
<link rel="stylesheet" href="css/style.css"type="text/css">
<link href="css/main-css.css"rel="stylesheet">

<link rel="stylesheet" href="css/util-css.css"type="text/css">
<link href="css/bootstrap.css"rel="stylesheet">
<link rel="stylesheet" href="css/style_main.css"type="text/css">
<link rel="stylesheet" href="css/global.css"type="text/css">
<link rel="stylesheet" href="css/table.css"type="text/css">

<link rel="stylesheet" href="css/main-min.css"type="text/css">
<link href="css/font-awesome.min.css"rel="stylesheet"type="text/css">
<link href="css/dataTable.bootstrap.css"rel="stylesheet">
<link href="css/min.css"rel="stylesheet" />


<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4"/>
<link href="css/main.css" rel="stylesheet">
<link href="css/select.min.css"rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css">

<style>
.select2-dropdown {top: 22px !important; left: 8px !important;}
</style>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-31654751-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<script src="dashboard/js/select2.min.js"></script>
<head>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-31654751-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();




//<!--================FORM VALIDATION======================-->

 
</script>

</head>    
<style type="text/css">
.modal-backdrop{
z-index:0;
}
.modal-backdrop {
display:none;
}
.btn-basic{
border 2px solid #1e6641;
background-color: #1e6641;
width: 100%;
}
.app-footer-left{
display: block !important;
}
.btn-secondary {
color: white !important;
}
.header_banner {
border-bottom: 5px solid #42B3E5;
position: relative;
}
.app-page-title{
padding: 8px 30px 8px 30px;
margin: -8px -30px 8px;
position: relative;
}
.vertical-nav-menu a:hover{
background-color: #42B3E5 !important;
color:#fff;
}
</style>
</head>
<body id="style-6">

<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<div class="app-header header-shadow header_banner" style=" height: 80px;">
<div class="app-header__logo">
<div class="">
<img src="img/3.gif" style="width:100%;">
</div>

<div class="header__pane ml-auto">
<div>
<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
<!--REQUIRED PHP-->
</span>
</button>
</div>
</div>
</div>

<div class="app-header__mobile-menu">
<div>
<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
        
<div class="app-header__menu">
<span>
<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
<span class="btn-icon-wrapper">

</span>
</button>
</span>
</div>

<div class="app-header__content">
<div class="app-header-left" style="width: 100%; text-align: center;display: block;">

<h3 style="padding-bottom: 0px; margin-bottom: 0px; font-size:22px;color:blue;">IRINGA URBAN WATER SUPPLY AND SANITATION AUTHORITY</h3>
<span style="color:olive; font-size:16px;">Water Management Information System</span>
</div>
<div class="app-header-right">
<div class="header-btn-lg pr-0">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left">
<div class="btn-group">
<a aria-expanded="false"><img src="img/2.png" class="rounded-circle" width="60"></a>
</div>
</div>

</div>
</div>
</div>
</div></div>
</div>

<div class="ui-theme-settings">
</div><div class="app-main" id="style-6"><div class="app-sidebar sidebar-shadow">
<div class="app-header__logo">
<div class="logo-src"></div>
<div class="header__pane ml-auto">
<div><button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
</div>

<div class="app-header__mobile-menu">
<div>
<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
<div class="app-header__menu"><span>
<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
<span class="btn-icon-wrapper">
<i class="fa fa-dashboard"></i>
</span>
</button>
</span>
</div>

<div class="scrollbar-sidebar"style="background: #42B3E5;">
<div class="app-sidebar__inner">
<ul class="vertical-nav-menu">
<li style="margin-top: 25px;" >
<a href="dashboard.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/29.png" width="8%">
<span style="font-size:16px;padding:5px;">Dashboard</span>
</a>
</li>


<li style="margin-top: 5px;font-size: 12px;">
<a href="register_meter.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/22.png" width="8%">
<span style="font-size:16px;padding:5px;">Register Meter Number &nbsp;<span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="meter_detail.php" class="card " style="background-color: #E4E7EC">
<img src="fonts/6.jpg" width="8%">
</i><span style="font-size:16px;padding:5px;">Reigistered Meter Number<span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="change_meter.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/2.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Change Meter Number &nbsp;<span style="float: right"></span>
</a>
</li>
        
<li style="margin-top: 5px; font-size: 12px;">
<a href="new_meter_detail.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/10.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Changed Meter Number &nbsp;<span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px;font-size: 12px;">
<a href="forum.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/28.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Water Forum &nbsp;<span style="float: right"></span>
</a>
</li>
                            
<li style="margin-top: 5px;font-size: 12px;">
<a href="index.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/11.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Exit  System &nbsp;<span style="float: right"></span>
</a></li></ul></div>

</div>
</div>
<div class="app-main__outer">
<div class="app-main__inner">
<div class="main-content">
<style>
.app-page-title{
padding: 8px 30px 8px 30px;
margin: -8px -30px 8px;
position: relative;
}
#customers, .customers {
width: 100%;
border-collapse: collapse;
}
.form4 {
background-color: rgba(128, 179, 246, 0.31);
}
#customers td, #customers th, .customers td, .customers th {
border: 1px solid #3C8DBC;
padding: 3px 7px 2px 7px;
text-align: left;
}
td {
font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;vertical-align: top;cursor: default;
}p {margin: 0 0 10px; } p[Attributes Style] {
text-align: -webkit-center;
}
p {
display: block;margin-block-start: 1em;margin-block-end: 1em;
margin-inline-start: 0px;margin-inline-end: 0px;
}
a:visited {color: #CC6633;
}
a:link {color: #CC6633;
}a:visited {color: #CC6633;}a:link {color: #CC6633;
}
</style>
<div class="app-page-title">
<div class="page-title-wrapper">
<div class="page-title-heading">
<div>
<div class="page-title-subheading">
<h5 style="font-size:20px; color:blue;">Change Meter Number | P.o Box 570 | 
<script>
function show2(){
if (!document.all&&!document.getElementById)
return
thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
var Digital=new Date()
var hours=Digital.getHours()
var minutes=Digital.getMinutes()
var seconds=Digital.getSeconds()
var dn="PM"
if (hours<12)
dn="AM"
if (hours>12)
hours=hours-12
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
var ctime=hours+":"+minutes+":"+seconds+" "+dn
thelement.innerHTML=ctime
setTimeout("show2()",1000)
}
window.onload=show2
</script>
<?php
$date = new DateTime();
echo $date->format('l, F jS, Y');
?></h5>
</div>
</div>
</div>
<div class="page-title-actions">

</div></div>
</div>

<div class="mb-3 card card-shadow-info">
<div class="card-header">
</div>
<div class="card-body">
<div class="tab-content">
<div class="tab-pane active" role="tabpanel">
<table class="table">
<tr class="form4">
<td colspan="3"align="center"style="font-size:20px;">Change Meter Number</td>
</tr>
</table>

<!----------############################################################------------->
<form action="" method="post">
<div class="row">
<div class="col-md-8">
<span style="font-size:16px;color:blue;">Parmanent Resident </span><span style="color:red">*</span>
<select name="resident" class="form-control text-box single-line" style="height:35px;font-size:16px;"required>
<option disabled selected>Select</option>
<?php $query=mysqli_query($con,"select * from resident");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['ResidentName'];?>"><?php echo $row['ResidentName'];?></option>
<?php } ?> 
</select>
</div>
</div>

<!----------############################################################------------->

<div class="row" style="padding-top: 5px">
<div class="col-md-8">
<span style="font-size:16px;color:blue;">Street Name </span><span style="color:red">*</span>
<select name="street" class="form-control text-box single-line" style="height:35px;font-size:16px;"required>
<option disabled selected>Select</option>
<?php $query=mysqli_query($con,"select * from tblappointment");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['Email'];?>"><?php echo $row['Email'];?></option>
<?php } ?> 
</select>
</div></div>

<!----------############################################################------------->



<div class="row" style="padding-top:5px">
<div class="col-md-8">
<span style="font-size:16px;color:blue;">Old Meter Number </span><span style="color:red">*</span>

<select name="ometer" class="form-control text-box single-line" style="height:35px;font-size:16px;" required="true">
<option disabled selected>Select</option>
<?php $query=mysqli_query($con,"select * from tbmeter");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['INumber'];?>"><?php echo $row['INumber'];?></option>
<?php } ?> 
</select>
</div></div>

<!----------############################################################------------->



<div class="row" style="padding-top: 5px">
<div class="col-md-4">
<span style="font-size:16px;color:blue;">Landlord Owner </span><span style="color:red">*</span>
<select name="landlord" class="form-control text-box single-line" style="height:35px;font-size:16px;" required="true">
<option disabled selected>Select</option>
<?php $query=mysqli_query($con,"select * from tbmeter");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['Landlord'];?>"><?php echo $row['Landlord'];?></option>
<?php } ?> 
</select>
</div>

<div class="col-md-4">
<span style="font-size:16px;color:blue;">Home Address </span><span style="color:red">*</span>
<select name="address" class="form-control text-box single-line" style="height:35px;font-size:16px;" required="true">
<option disabled selected>Select</option>
<?php $query=mysqli_query($con,"select * from tbmeter");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['Address'];?>"><?php echo $row['Address'];?></option>
<?php } ?> 
</select>
</div>

<div class="col-md-4">
<span style="font-size:16px;color:blue;">House Number </span><span style="color:red">*</span>
<select name="hnumber" class="form-control text-box single-line" style="height:35px;font-size:16px;" required="true">
<option disabled selected>Select</option>
<?php $query=mysqli_query($con,"select * from tbmeter");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['HNumber'];?>"><?php echo $row['HNumber'];?></option>
<?php } ?> 
</select>
</div>
</div>

<div class="row" style="padding-top: 5px">
<div class="col-md-4">
<span style="font-size:16px;color:blue;">Employee Name </span><span style="color:red">*</span>
<input type="text" name="employee" class="form-control text-box single-line" style="height:35px;font-size:16px;"required>
</div>

<div class="col-md-4">
<span style="font-size:16px;color:blue;">Email Address </span><span style="color:red">*</span>
<input class="form-control text-box single-line"type="email" name="email" style="height:35px;font-size:16px;"required/>
</div>

<div class="col-md-4">
<span style="font-size:16px;color:blue;">Mobile Number </span><span style="color:red">*</span>
<input class="form-control text-box single-line"type="number" name="mobile" style="height:35px;font-size:16px;"required  maxlength="10" pattern="[0-9]+"/>
</div>
</div>

<div class="row" style="padding-top: 5px">
<div class="col-md-4">
<span style="font-size:16px;color:blue;">Pipe Number </span><span style="color:red">*</span>
<select name="npipe" class="form-control text-box single-line" style="height:35px;font-size:16px;" required="true">
<option disabled selected>Select</option>
<?php $query=mysqli_query($con,"select * from tbmeter");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['NPipe'];?>"><?php echo $row['NPipe'];?></option>
<?php } ?> 
</select>
</div>


<div class="col-md-4">
<span style="font-size:16px;color:blue;">Installation Status </span><span style="color:red">*</span>
<select name="installation" class="form-control text-box single-line" style="height:35px;font-size:16px;" required="true">
<option disabled selected>Select</option>
<?php $query=mysqli_query($con,"select * from tbmeter");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['Installation'];?>"><?php echo $row['Installation'];?></option>
<?php } ?> 
</select>
</div>

<div class="col-md-4">
<span style="font-size:16px;color:blue;">Date of Issue </span><span style="color:red">*</span>
<input class="form-control text-box single-line"type="date" name="date" style="height:35px;font-size:16px;"required/>
</div>
</div>

<div class="row" style="padding-top: 5px">
<div class="col-md-8">
<span style="font-size:16px;color:blue;">Reason </span><span style="color:red">*</span>
<textarea class="form-control text-box single-line" placeholder="For incomplete installation provide a reason" style="height:70px;font-size:16px;" name="reason"></textarea>
</div></div>

<div class="row" style="padding-top: 20px">
<div class="col-md-offset-4 col-md-4">
<button type="submit" name="submit" class="btn btn-primary btn-block btn-flat" style="height:35px;font-size:16px;">Submit</button>
</div>
</div>
</div>
</form></div>
</div>
</div>
</div></div>

<!--#################################################################--->

<div class="app-wrapper-footer" style="border-top: 6px solid #42B3E5; margin-top: 15px;">
<div class="app-footer">
<div class="app-footer__inner">
<div class="app-footer-left"style="font-size:13px;">
© Copyright (c) 2020 <a href=""style="color:blue;">IRINGA URBAN WATER SUPPLY AND SANITATION AUTHORITY.</a> All Rights Reserved. <a href=""style="color:olive;"> Designed by: MADATA DESIGN SOLUTION</a>
</div>
</div>
</div>
</div>
</div>
<script>
$('#zero_config').DataTable();
</script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/vfs_fonts.js"></script>
<script type="text/javascript" src="js/buttons.html5.min.js"></script>
<script type="text/javascript" src="js/buttons.print.min.js"></script>
<script type="text/javascript" src="js/dataTables.responsive.min.js"></script>
<script src="js/jtip.js" type="text/javascript"></script>
<script src="js/Chart.js"></script>
<script src="js/jquery.min.js"></script>
</script> 
</body>
</html>
<?php } ?>