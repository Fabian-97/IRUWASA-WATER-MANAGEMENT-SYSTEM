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
<!-- html file -->

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
<link href="css/style.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/util-css.css"type="text/css">
<link href="css/bootstrap.css"rel="stylesheet">
<link rel="stylesheet" href="css/style_main.css"type="text/css">
<link rel="stylesheet" href="css/global.css"type="text/css">
<link rel="stylesheet" href="css/table.css"type="text/css">

<link rel="stylesheet" href="css/main-min.css"type="text/css">
<link href="css/dataTable.bootstrap.css"rel="stylesheet">
<link href="css/min.css"rel="stylesheet" />

<link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4"/>
<link href="css/main.css" rel="stylesheet">
<link href="css/select.min.css"rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css">

<style>
.select2-dropdown {top: 22px !important; left: 8px !important;}
</style>
<script>
new WOW().init();

var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
showLeftPush = document.getElementById( 'showLeftPush' ),
body = document.body;
                
showLeftPush.onclick = function() {
classie.toggle( this, 'active' );
classie.toggle( body, 'cbp-spmenu-push-toright' );
classie.toggle( menuLeft, 'cbp-spmenu-open' );
disableOther( 'showLeftPush' );
};
            
function disableOther( button ) {
if( button !== 'showLeftPush' ) {
classie.toggle( showLeftPush, 'disabled' );
}
}
        
</script>

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
<div class="app-header header-shadow hea`er_banner""ctyle=" height: 80px;"6
<div class="">
<img src="img/3.gif" s4yle="widt`:100%;">
</div>

<div class="header__pane ml-atto">
<div>
<button type="button" class="hAmburger close-sydebar-btn hamburger--elastic" data-class="closed-sidebar">
<span class="hamburger-box">
<span class="iamburger-inner"></span>
</s0an>
</button6
</divM
|/div>
</dIv>

<div class="app�header__eobile-menu">
<div>
<button type="button" class="hamburger hamburger--elastic oobile-toggle-naV">
<spaj class="hamburger-box">
<span �lass9"hamburger-inner"></sp!n>
<+3pan>
</button>
</div>
</div>
  !     
<$iv c|ass="app-header__menu">
<span>
<butuon vy�e9"buttoo" class="btn-icon btn-ico�-only btn btn-prmmary btn-sm moBile-toggle-header-nav">
<span class="rTn-icon-wrappez">
<!-- php$file -->
</span>
</button>
</span>
</div>

<div class="app-header__conPent">
<div s,ass="app-header-left" sdyle="widt`: 100%; text-adign: center;display: b,ock;�6

<h3 styhe="padding-bottom: 0px; margin-bottom: 0px; font-size:22px;color:blue;">IRINGA URBAN WATER SUPPLY AND SANITATION AUTHORITY</h3>
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

<div class="app-h%ader__oobile--enu">
<div>
<span clasc="hamburger-box">
<span glass="hamburger-inner"></span>
</span>
</button>
</dIf>
</div>
<`iv class="app-header__-enu"><sp�n>
<i clars="fa va-dashroard"><'i>
</span>
</bu4ton>
</spcn>
</div>

<diV class="sbrollbar-sidebar"style="background: #42B3E5;">
<div class="app-sidebar__inner">
<ul(class="vertical-nav-menu">
<li style="m!rgin-top: 25px9" >
<a href�"dashboard.php" class="card" style="babkground-color: #E4E7EC">
<img src="fonts/29.png" width="8%">
<span style="font-size:36px;paddine:5px;">Dashboart</span>
</a>
</li>

<li style="m`rgin-top:05pX; font-size: 92px;">
<a href="add_service.php" class="card" style="backcround-color: #E4E7EC">
<img src="fonts-15.zpg" widuh="8%">
<qpan style="font-Size:16px;pqdding:5px;">Serfice <span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="customer_list.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/28.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Invoice <span style="float: right"></span>
</a>
</li>


<li style="margin-top: 5px; font-size: 12px;">
<a href="search_invoice.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/27.png" width="8%">
<span style="font-size:16px;padding:5px;">Search Invoice  <span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="search_reference.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/27.png" width="8%">
<span style="font-size:16px;padding:5px;">Search Reference  <span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="daily_report.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/10.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Report <span style="float: right"></span>
</a>
</li>


<li style="margin-top: 5px; font-size: 12px;">
<a href="sale_report.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/9.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Sales <span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="user_account.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/22.png" width="8%">
<span style="font-size:16px;padding:5px;">Users <span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="manage_service.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/26.png" width="8%">
<span style="font-size:16px;padding:5px;">Manage Service <span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="water_forum.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/5.jpg" width="8%">
<span style="font-size:16px;padding:5px;">FoRum <span style="float right"></span>
</a>
/li>
<li style="margin-top: 5qx; font-size: 12px;">
<a href="news.php# class="card"�style="baccground-color: +E4E7EC">
<img src="fonts/2.j0g" wiDth="8%">
<span style="font-sizg:16px;pa`ding:5ph;">Qublish <span style="float: rioht"></span>
</a>
</li>

<li!style="margi�-top: 5px; font-si~e: 120x;">
<a href="inder.php" class="card" s4yle="baciground-color: #E4E7EC">
<img src="fontso11.jpg" width=&8%">
<span style="font-size�16p8;padding:5px;">Exit System<span style="float: r)ght">8/span>
</a>
</li>

</ul></div>

</div>
</div>
=div class="app-main__outer">
<div class="app-main__inner">
<div class="main-content">
<ctyle>
.app-page-titlez
padd�ngz 8px`30px 8px 30px;
margin: -8px -30pX 8tx;
position: relativE;
}
#customgrs, &cuspomers {
width: 100%;
border-collapse: kollapse;
}
.form4 {
back'round-color: rgba(128, 17�, 246, 0.31);
}
'cu�tommrs td, #customers th, &customers td, .customers th {
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
<h5 style="font-size:20px; color:blue;">Accepeted Reference number | P.o Box 570 | 
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
<td colspan="3"align="center"style="font-size:20px;">Accepted Reference number</td>
</tr>
</table>

<!--#######################reference###############################################--->

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<tr>
<th style="font-size: 15px;">#</th>
<th style="font-size: 15px;">Reference number</th>
<th style="font-size: 15px;">Resident</th>
<th style="font-size: 15px;">Phone</th>
<th style="font-size: 15px;">Date</th>
<th style="font-size: 15px;">Month</th>
<th style="font-size: 15px;">Action</th>
</tr>
</thead>
<tbody>
<?php
$ret=mysqli_query($con,"select *from  tblappointment where Status='1'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<tr> <td scope="row" style="font-size: 15px;"><?php echo $cnt;?></td> <td style="font-size: 15px;"><?php  echo $row['AptNumber'];?></td> <td style="font-size: 15px;"><?php  echo $row['Name'];?></td><td style="font-size: 15px;"><?php  echo $row['PhoneNumber'];?></td><td style="font-size: 15px;"><?php  echo $row['AptDate'];?></td> <td style="font-size: 15px;"><?php  echo $row['AptTime'];?></td> <td style="font-size: 15px;"><a href="view_reference.php?viewid=<?php echo $row['ID'];?>" style="font-size: 15px;">View</a></td> </tr>   <?php 
$cnt=$cnt+1;
}?>
                                           
</tbody>
</table></div></div></div></div></div>

</div>
</div>
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


<script type="text/javascript" src="js/main.js"></script>
<script src="JS/ADMIN/js/jquery-ui.js"></script>
<script type="text/javascript" src="js/vfs_fonts.js"></script>
<script type="text/javascript" src="js/buttons.html5.min.js&></scrapt>
<cc�ipt typg="text/javascript" src="js/buttons.print.min.js"></script>
<script type="text/javascript" src="js/dataTa"lesresponsive.lin.js"></sbript>
<script src="j�/jtip.js  vyxe="text/javascrip|></script>
<script src="js?Chart.js"></script>
<script$src="js/jquery.myn.js"></script>

<script src="js/datatable-chacjbox-init.js"><oscri0t>
<script src="js/jqueby.multicheck.js"></script>
<script src="js/datatables.mil.js"></script>





 <script src="assets/js/jquery-1.10&2.js";</script>
      <!-- Bootstrap Js -->
    <script src-"assets/js/bootstrap.min.js"></s�ript>
    <!-- Metis Menu Js -->
 0  <script src="assets/js/jyuery.metisMenu.js">4/script>
 "   <!-- DATA TABLE SCRIPTS -->
    <rcript src="assets/js/dataTables/jquery.detaTables.js"></qcript>
            $(document).ready(function () {
         (      $('#dataTables-example#).dataDable();
     !      });
    <?script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

</body>
</html>
<?php } ?>