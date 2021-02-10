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
?>

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
<title>IRINGA WATER SUPPLY AND SANITATION AUTHORITY</title>
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

<link href="css/float-chart.css" rel="stylesheet">
<link href="css/style.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>


<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4"/>
<link href="css/main.css" rel="stylesheet">
<link href="css/select.min.css"rel="stylesheet">
<script src="css/jquery.min.js"></script>

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
<script src="js/select2.min.js"></script>
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
<!--REQUIRED PHP-->
</span>
</button>
</span>
</div>

<div class="app-header__content">
<div class="app-header-left" style="width: 100%; text-align: center;display: block;">

<h3 style="padding-bottom: 0px; margin-bottom: 0px; font-size:22px;color:blue;">IRINGA URBAN WATER SUPPLY AND SANITATION AUTHORITY</h3>
<span style="color:olive; font-size:16px;">Water Application Management System</span>
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
<a href="table_service.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/15.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Service &nbsp;<span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="reference_page.php" class="card " style="background-color: #E4E7EC">
<img src="fonts/28.jpg" width="8%">
</i><span style="font-size:16px;padding:5px;">Create Reference<span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="search_reference.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/27.png" width="8%">
<span style="font-size:16px;padding:5px;">Search Reference &nbsp;<span style="float: right"></span>
</a>
</li>
        
<li style="margin-top: 5px; font-size: 12px;">
<a href="request_invoice.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/10.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Request Invoice &nbsp;<span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="search_invoice.php"class="card" style="background-color: #E4E7EC">
<img src="fonts/27.png" width="8%">
<span style="font-size:16px;padding:5px;">Search Invoice &nbsp;<span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px;font-size: 12px;">
<a href="mobile_payment.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/13.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Mobile Payment &nbsp;<span style="float: right"></span>
</a>
</li>


<li style="margin-top: 5px;font-size: 12px;">
<a href="bank_payment.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/6.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Bank Payment &nbsp;<span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px;font-size: 12px;">
<a href="gepg_payment.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/31.png" width="8%">
<span style="font-size:16px;padding:5px;">GEPG Payment &nbsp;<span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="water_application.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/22.png" width="8%">
<span style="font-size:16px;padding:5px;">Water Supply &nbsp;<span style="float: right"><img src="" class=""></span>
</a>
</li>

<li style="margin-top: 5px;font-size: 12px;">
<a href="reconnection.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/26.png" width="8%">
<span style="font-size:16px;padding:5px;">Water Reconnection &nbsp;<span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px;font-size: 12px;">
<a href="sewage.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/19.png" width="8%">
<span style="font-size:16px;padding:5px;">Sewerage Service &nbsp;<span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px;font-size: 12px;">
<a href="search_meter.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/27.png" width="8%">
<span style="font-size:16px;padding:5px;">Search Meter Number &nbsp;<span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px;font-size: 12px;">
<a href="contact.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/33.png" width="8%">
<span style="font-size:16px;padding:5px;">Complaint &nbsp;<span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px;font-size: 12px;">
<a href="forum.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/23.png" width="8%">
<span style="font-size:16px;padding:5px;">Water Forum &nbsp;<span style="float: right"></span>
</a>
</li>
                            
<li style="margin-top: 5px;font-size: 12px;">
<a href="index.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/11.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Exit  System &nbsp;<span style="float: right"></span>
</a></li></ul></div></div></div>

<!--=============================================================--->
<div class="app-main__outer">
<div class="app-main__inner">
<div class="main-content">
<div class="col-md-12 " style="background-color:skyblue; margin-left:0px; padding-top:5px; padding-bottom: 5px;">
<h2 align="center" style="color:#4RDFS"><font color="blue"><strong> IRUWASA | P.o Box 570 | Iringa Municipal</strong></font></h2>

<style>
#contact_shake{
animation: .8s shake infinite alternate;
}
@keyframes shake {
0% { transform: skewX(-15deg); }
5% { transform: skewX(15deg); }
10% { transform: skewX(-15deg); }
15% { transform: skewX(15deg); }
20% { transform: skewX(0deg); }
100% { transform: skewX(0deg); }
}
</style>
<hr style="border: 2px solid #fff">
<div style="margin-bottom: -20px;">


</div>
<style>
.label {
display: inline;
padding: .2em .6em .3em;
font-size: 75%;
font-weight: bold;
line-height: 1;
color: #fff;
text-align: center;
white-space: nowrap;
vertical-align: baseline;
border-radius: .25em;
}
.label-warning{
background-color: #f39c12 !important;
}
fieldset {
display: block;
margin-inline-start: 2px;
margin-inline-end: 2px;
padding-block-start: 0.35em;
padding-inline-start: 0.75em;
padding-inline-end: 0.75em;
padding-block-end: 0.625em;
min-inline-size: min-content;
border-width: 1px;
border-style: groove;
border-color: threedface;
border-image: initial;
height: 100%;
}
legend {
display: block;
width: 100%;
padding: 0;
margin-bottom: 20px;
padding-top: 20px;
line-height: inherit;
color: #333;
border: 0;
padding-inline-start: 10px;
padding-inline-end: 10px;
border-bottom: 1px solid #e5e5e5;
}
a:visited {
color: #CC6633;
}
a:link {
color: #CC6633;
}
a:visited {
color: #CC6633;
}
a:link {
color: #CC6633;
}
.formInfo a, .formInfo a:active, formInfo a:visited {
background-color: #FF0000;
font-weight: bold;
padding: 1px 2px;
margin-left: 5px;
color: #FFFFFF;
text-decoration: none;
}
fieldset a{
font-size: 12px;
}
</style>

<div class="col-md-12" style="background-color:#42B3E5">
<strong> <span style="color:#fff;" class="label"></span>
<a href="#" style="text-decoration:none;color:white;" class="label label-warning pull-right"></a>
</strong>
</div>
<br><br>

<div class="col-md-12 card" style="margin-top: 10px;">
<div class="row">
<div class="col-md-3 " style="height: 330px; padding-bottom: 5px;">
<fieldset class="fieldset" style="">
<legend>1<sup>st</sup> MPESA</legend>

<div align="center" style="background-color:#E4E7EC; margin-bottom:5px" onmouseover="this.style.background='#C8D9ED'" onMouseOut="this.style.background='#E4E7EC'" >
<a href="" class="link"style="color:blue;font-size:16px;">Dial *150*00#</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Select [4]</a></div>
                
<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Select [1]</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Enter Number</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Enter Amount</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Enter Password</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Press [1] to Confirm</a></div>
</fieldset>
</div>

<div class="col-md-3 " style="height: 330px;padding-bottom: 5px;">
<fieldset class="fieldset" style="">
<legend>2<sup>nd</sup> TIGOPESA</legend>


<div align="center" style="background-color:#E4E7EC; margin-bottom:5px" onmouseover="this.style.background='#C8D9ED'" onMouseOut="this.style.background='#E4E7EC'" >
<a href="" class="link"style="color:blue;font-size:16px;">Dial *150*01#</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Select [4]</a></div>
                
<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Select [1]</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Enter Number</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Enter Amount</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Enter Password</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Press [1] to Confirm</a></div>
</fieldset>
</div>

<div class="col-md-3 " style="height: 330px;padding-bottom: 5px;">
<fieldset class="fieldset" style="">
<legend>3<sup>rd</sup> AIRTEL MONEY</legend>

<div align="center" style="background-color:#E4E7EC; margin-bottom:5px" onmouseover="this.style.background='#C8D9ED'" onMouseOut="this.style.background='#E4E7EC'" >
<a href="" class="link"style="color:blue;font-size:16px;">Dial *151*02#</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Select [4]</a></div>
                
<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Select [1]</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Enter Number</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Enter Amount</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Enter Password</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Press [1] to Confirm</a></div>
</fieldset>
</div>
 


<div class="col-md-3 " style="height: 330px;padding-bottom: 5px;">
<fieldset class="fieldset" style="">
<legend>4<sup>th</sup> HALOPESA</legend>

<div align="center" style="background-color:#E4E7EC; margin-bottom:5px" onmouseover="this.style.background='#C8D9ED'" onMouseOut="this.style.background='#E4E7EC'" >
<a href="" class="link"style="color:blue;font-size:16px;">Dial *149*00#</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Select [4]</a></div>
                
<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Select [1]</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Enter Number</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Enter Amount</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Enter Password</a></div>

<div align="center" style="background-color:#E4E7EC" onmouseover="this.style.background='#C8D9ED'"
onMouseOut="this.style.background='#E4E7EC'">
<p align="center">
<a href="" class="link"style="color:blue;font-size:16px;">Press [1] to Confirm</a></div>

</fieldset>
</div></div></div></div></div></div>

<!--===============================================================================-->

<div class="app-wrapper-footer" style="border-top: 6px solid #42B3E5; margin-top: 15px;">
<div class="app-footer">
<div class="app-footer__inner">
<div class="app-footer-left"style="font-size:13px;">
© Copyright (c) 2020 <a href=""style="color:blue;">IRINGA WATER SUPPLY AND SANITATION AUTHORITY.</a> All Rights Reserved. <a href=""style="color:olive;"> Designed by: MADATA DESIGN SOLUTION</a>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript" src="js/main.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css">
<script type="text/javascript" src="js/vfs_fonts.js"></script>
<script type="text/javascript" src="js/buttons.html5.min.js"></script>
<script type="text/javascript" src="js/buttons.print.min.js"></script>
<script type="text/javascript" src="js/dataTables.responsive.min.js"></script>
<script src="js/jtip.js" type="text/javascript"></script>
<script src="js/Chart.js"></script>
<script src="js/excanvas.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.flot.pie.js"></script>
<script src="js/jquery.flot.time.js"></script>
<script src="js/jquery.flot.stack.js"></script>
<script src="js/jquery.flot.crosshair.js"></script>
<script src="js/jquery.flot.tooltip.min.js"></script>
<script src="js/chart-page-init.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/perfect-scrollbar.jquery.min.js"></script>
<script src="js/sparkline.js"></script>
<script src="js/waves.js"></script>
<script src="js/sidebarmenu.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
$('#zero_config').DataTable();
</script>
</body>
</html>
<?php } ?>