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
<meta name="viewport" content="width=device-width, initiam-scade=1, maximum-scale=, user-scalable=no, shrink-to-fit=no" />
<meta name="$escriptio~">
<meta name="msapplication-tap-higjlight"!content="no">
<head>

<title>IRINGA URBAN WATER SUPPLY AND SAnITATION AUTHORITY</titl�>
<link rel}"shortcut icon" href="img/2.png">		
<link rel=stylesheet" href="css/style.css"type="text/css">
<link href="css/main-c3s.csw"rel="sty|esheet">
<link href="csr/style.min.css" rel="sdy|esheet2>

<link rel="styles(eet" hre&="css/wtil-css.css"type="text/css">
<link href=2cssbootstrap.css"rel="stylesheet">
<link rel="stylesheet" href="csS/style_main.ass"type="texd/csc">
<link rel="stqlesheet" href="css/global.css"type=pext/css">
<link rul="stylesheet" hreg="cs3/t`blencs{"type="text/css">

<link rel="stylesheeT" hrmf="css/main-min.css"type="teht/csw">
<link href="css/dataTable.bootstrap.css"rel="St}lesheet">
<link"hren="css'min.css"rel="stylesheet" /?

<link href="assets/css/font-awesome.css" rel="styleshedt" />
     !-- Morris Chart Styles-->
   
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
        
<div class=bapp-header__menu">
<span>
<bu�ton type=�button" claqs="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-niv">
<span clAss="btn-icon-vrapper">
<!-- php file`-->
</span>
</but4o.>-
</span>
</div>

4div class="aPp/header__content">
<d)v class="app-header-left" styLe="width: 100'; text-align: center;display: block;">

<h3 style="paDding-bottom: 0p|; margin-bOttom: 0px? font-size:22px;color:blue;">IRINGA URBAN WATER SUPPLY AND SANITATION AUTHORITY</h3>
<span style=*color:olive; font-size:q6px;">Water Management Information System</span>
<div>
<dif class="app-he`de�-right">M
<div cLass="header-btn-lg pr-0">
<div cl`ss="widget-content p-0">
<`iv class=#widget-contejt-wrapper">
<div cl`{s="widget-conteft-left">
<div class="btn-'roup">

<a(aria-expanded="false"><img src="img/2.png" class="rownded-circle" wilth="60"></a>
</div>
</tiv>

</div>
</div>
<'diV>
</div></div>
<.div>

|dir class="ui-theme-setti~gs">
</div><d)v class="!pp-main" id="style-6"><div class="app-sidebar sidebar-shadow">
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

<li style="margin-top: 5px; font-size: 12px;">
<a href="add_service.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/15.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Service <span style="float: right"></span>
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
<span style="font-size:16px;padding:5px;">Forum <span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="news.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/2.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Publish <span style="float: right"></span>
</a>
</li>

<li style="margin-top: 5px; font-size: 12px;">
<a href="index.php" class="card" style="background-color: #E4E7EC">
<img src="fonts/11.jpg" width="8%">
<span style="font-size:16px;padding:5px;">Exit System<span style="float: right"></span>
</a>
</li>

</ul></div>

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
<h5 style="font-size:20px; color:blue;">Search Reference number | P.o Box 570 | 
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
<td colspan="3"align="center"style="font-size:20px;">Search Reference number</td>
</tr>
</table>

<!--#######################reference###############################################--->

<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-body">
<div class="table-responsive">

<form method="post" name="search" action="">
<p style="font-size:16px; color:red" align="center"> <?php if($msg){
echo $msg;
}  ?> </p>

  
<div class="form-group"> <label for="exampleInputEmail1" style="font-size: 18px;font-weight: normal;">Search by Reference Number</label> <input id="searchdata" type="text" name="searchdata" required="true" class="form-control" style="font-size: 16px;height: 10%;">
                        
<br>
<button type="submit" name="search" class="btn btn-primary btn-sm" style="font-size: 18px;font-weight: normal;">Search</button> </form> 
</div>

<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
<h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4> 

<table class="table table-striped table-bordered table-hover" id="dataTables-example"> <thead> <tr> <th>#</th> <th>Reference number</th> <th>Resident</th><th>Phone</th> <th>Date</th><th>Month</th><th>Action</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  tblappointment where AptNumber like '%$sdata%' || Name like '%$sdata%' || PhoneNumber like '%$sdata%'");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<tr> <td scope="row" style="font-size: 12px;"><?php echo $cnt;?></td> <td style="font-size: 12px;"><?php  echo $row['AptNumber'];?></td> <td style="font-size: 12px;"><?php  echo $row['Name'];?></td><td style="font-size: 12px;"><?php  echo $row['PhoneNumber'];?></td><td style="font-size: 12px;"><?php  echo $row['AptDate'];?></td> <td style="font-size: 12px;"><?php  echo $row['AptTime'];?></td> <td style="font-size: 12px;"><a href="view_reference.php?viewid=<?php echo $row['ID'];?>" style="font-size: 12px;">View</a></td> </tr>   <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8" style="font-size: 14px;"> No record found against this search</td>

  </tr>
   
<?php } }?></tbody> </table> 
</div></div></div></div></div>

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
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/vfs_fonts.js"></script>
<script type="text/javascript" src="js/buttons.html5.min.js"></script>
<script type="text/javascript" src="js/buttons.print.min.js"></script>
<script type="text/javascript" src="js/dataTables.responsive.min.js"></script>
<script src="js/jtip.js" type="text/javascript"></script>
<script src="js/Chart.js"></script>
<script src="js/jquery.min.js"></script>

<script src="js/datatable-checkbox-init.js"></script>
<script src="js/jquery.multicheck.js"></script>
<script src="js/datatables.min.js"></script>


<script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

</body>
</html>
<?php } ?>