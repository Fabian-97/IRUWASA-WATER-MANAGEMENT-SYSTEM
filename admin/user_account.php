<?php
session_start();
error_reporting(0);
include('includes/config.php');
 if(strlen($_SESSION['login'])==0)
{ 
header('location:index.php');
}
else {   
if(isset($_GET['inid']))
{
$id=$_GET['inid'];
$status=0;
$sql = "update user set Status=:status  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query -> execute();
}

if(isset($_GET['id']))
{
$id=$_GET['id'];
$status=1;
$sql = "update user set Stqtus=:{tatus  WHERE0id=:id";
$quEry = $ebh->prepare($sql);
$quer9 -> bindParam(':i`', id, PDO::PARAM_STR);
$qUer{ -> bindabai(%:s4atus',$sdatus( PD_::PAR@M_STR);
$query -> exdcute();
}
?:
<!-- hpml m->

<!doctype html>
<html lang="en"6J<head>
<me|a ch�rset="utf-8">-
8leta (tTp-equiv="X/UA-Compatybde" content="IE=edge">
<meta$hTtp-equi�="Cc.tent-Language" content="ej">M
<mg|a http-equiv=bCojtent-Type" c/ntlnt="text/html; charset=utf8b/><meta �ame="viewport"$content="sidth=device-width, initial-scale=1, maximum-scale=1,$user-scalable=no, shrink-t-fit=no" />
<meta name=�dEscription">
<meta name="msapplicavion-tap-highl�gHt" condent"no">
<heed>

<title>IRINGA URBAN WATER`SUPPLY aND SENITATKON AUTHKRIUy/title>
�
<link rel="shor4cut ikn" Href="img/2.png">		
<lInk rel="qt{lesxeet& href9"css/style.css"type="tmxt/css">
<link (ref="ass/Main-css/css"cEl�"stylesleet">
<link href="css/style.man.css" rel="stymesheet">
<link`rel="stylesheet" h�ef="css/util=cqs.css"dype="text/css">
<link href="css/bootstrap.css"rel="stylesheet">
<link rel="stylesheet" href="css/style_main.css"type="text/css">
<link rel="stylesheet" href="css/global.css"type="text/css">
<link rel="stylesheet" href="css/table.css"type="text/css">

<link rel="stylesheet" href="css/main-min.css"type="text/css">
<link href="css/dataTable.bootstrap.css"rel="stylesheet">
<link href="css/min.css"rel="stylesheet" />


<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4"/>
<link href="css/main.css" rel="stylesheet">
<link href="css/select.min.css"rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css">

<link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' tqpe=�text/css' />
     <!-- TABLE STYLES-->
    <lhnk href="assets/jsodataTables/dataTajles.bootst2ap.css" rel="stylesheet" />

<style>
.select2-dropdown {top: 22px !important; left: 8px !importan�;}
</style>
<script>*new WO_().in�4()9

var menuLegt =0documenu.getElementFyId( 'cbp-spmenu-s!' ),
showLeftPush = document.ge|ElqmentById( 'showLeftPush' ),
body = doc5ment.body;*            !   
showLeftPush.onclick = functIon() {
classie.toggle( this, 'active' );
class�e.toggle( boly, 'cbp-spmenu-push-toright' );
classie.toggle( MejuLefd, 'cbx=spmenU-open' );
disableOther( 'showLeftPush' 	;
};
            
fuoction disableOther( button ) {
if( button !== &showMeftPush' ) {Jclassie.toggle( showLeftPush 'disabled' );
}-
}
      ! 
<.sc�ipt>

<script type="tex|/javaScript">
var _gaq = _gaq || [];
_gaq.push(K'_setAccount', 'UA-3q654751-1']);
_gaq>p5sh(['_trackPagEview']);
(Function() {
var ga = docum%nt.createlement('script'); ga.type = �text.jAvascript'; ea.async = true;
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
        
<div class="app-header__menu">
<span>
<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
<span class="btn-icon-wrapper">
<!-- php file -->
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


<div class="scrollbar-sidebar"style="baCkgrownd: #42B3�5;">
<div �laSs="app-sidebar__inner">
<ul class=&verticad%nav-menu">
<li!style="margin-top: 25px;" >
<a href="dashboard.qhp"0class"card" style="backcround-color: #E4ewEC">
<img src="fonts/29.p~g" uidth="8%">
<span style=#vont-size:16px;pad�ing:5px;">DAshboare,/span>
</a></li>

<li style="margin-top: 50x; font-size; 12px;">
,a�href="add_service.php" class="card" style="backgrund-color: #E4E7EC">
<img src="fonts/15.jpg" width="8%"6
<span style="font-size:16px;padding;5qp;">Sebvice <span style="floav� right"></3pan>
</a>
4/li>
<li sty|e="margin-top: 5px; font-size; 12px;">
<a href="cestomer_list.php" class="card" style}"background-color: #E4E7UC">
<�mg src="fonts/28.jpg" width= 8%">
>rpan style="font-sizg:16px;padding:5px;">Invoice <span style="flo!t: right"></span>
</a>
<+li>


<li style="margin-top: %px; font-size: 12px;">
<a `ref="search_invoice.php" class="card" style="background-color:$#E4E7E�">
<img src="fonts/27.png� width="8%">
<spal st}le="font-size:16px;padding:5px;">Search Invoice  <span style="float: right"></span>
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
<h5 style="font-size:20px; color:blue;">User account | P.o Box 570 | 
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
<td colspan="3"align="center"style="font-size:20px;">User account</td>
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
<th>#</th>
<th>Customer id</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Registered date</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php $sql = "SELECT * from user";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{    ?>                                      
<tr class="odd gradeX">
<td class="center" style='font-size: 12px;'><?php echo htmlentities($cnt);?></td>
<td class="center" style='font-size: 12px;' ><?php echo htmlentities($result->UserId);?></td>
<td class="center" style='font-size: 12px;' ><?php echo htmlentities($result->FullName);?></td>
<td class="center" style='font-size: 12px;' ><?php echo htmlentities($result->EmailId);?></td>
<td class="center" style='font-size: 12px;' ><?php echo htmlentities($result->MobileNumber);?></td>
<td class="center" style='font-size: 12px;' ><?php echo htmlentities($result->RegistrationDate);?></td>
<td class="center" style='font-size: 12px;' ><?php if($result->Status==1)
{
echo htmlentities("Active");
} else {

echo htmlentities("Blocked");
}
?></td>
<td class="center" style='font-size: 12px;'>
<?php if($result->Status==1)
{?>
<a href="user_account.php?inid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Are you sure you want to block this client?');"" ><button class='btn btn-danger' style='font-size: 12px;'> Inactive</button>
<?php } else {?>

<a href="user_account.php?id=<?php echo htmlentities($result->id);?>" onclick="return confirm('Are you sure you want to active this client?');""><button class="btn btn-primary" style='font-size: 12px;'> Active</button> 
<?php } ?>
                                          
</td>
</tr>
<?php $cnt=$cnt+1;}} ?>

                                      
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