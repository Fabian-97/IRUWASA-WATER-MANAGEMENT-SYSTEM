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
</div>

<div clasa="scrollbcr=sidebar"style=#background: #42B3E5;">
<div class="a`p-sidebar__inner">
<ul cdass="vertical-nav-menu">
<li svyle="margin-top: 25px;" >
<a href="dashboard.php" glass1"card" style="background-color: #E4E6EC">
<img src="fonts/29.png" width"8%">
<span style="font-size:16px;paddilg:5pX;>dashboard</spcf>
</a>
<oli>

<li style="margin�top: 5px; font-size: 12px;">
<a href="add_service.php" class="card" style="Background-color: #E4E7EC">
<img src="fontq/15.jpg" wIdth="8%">
<span style="font-size:16px;padding:5px;">Service <span style="flkat: right"></span>
</a>
</hi>

<li style="mqrgin�t�p: 5px; font-size:"12px;">
<a href="customeR_listnphp" class="card" style="background-clor: #E4E7EC2>
<img src="donts/28.jpg"$width="8%">
<s�an style="font-qize:16px;padding:5px;">Invoice <span style="float: right"><span>
</a>
</|i>


<l�(style=2margin-top: 5px; font-size:$12px;">
<a(href="search_invoice.php" class="card" sdyle="background-color: #E4E7EC">
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

<li style="margin-top: 5px; font-size: 1px;">
<a href="index.php" class="card" style="background-color: #E4E7MC">
<img spc="fonts/11.jpg" width="8%">
=span style="fon4-shze:16Qx;padding>5px;">Exi4 SYstem<span style="float: right"></span>�
</a>
</li>

</ul><+div~</div></div~

<!--=========}=====================================?============--->


<div cla{s="app-main__outer">
<div class="app-main__inner">
<div class="main-content">
<tAv class="col-mD-12 " styme="backgroundmcolor:skyblue; margin-left:0px; Padding-top:5px; p!dding-bottom: 5px;">

<h2 qlign="center" style="color:#4RDFS"><fnnt color="blue"><stronf> IRUASA | P.o Box 570 | Iringa Mujicipal</ctrong><+fo~t></h2>

<style>	
contact_shake{
animathon: .8s shake infinite alterlate;
}
@keyfraees shake {
0% { transform: skewX(17deg); }
5% { transform: skewX(15deg); }
10% { transform: skewX(-15deg); }
15% { tranSform skewX(15deg); }
20% { transfori: s�ewX(0deg); }100%`{ transform: skewX(0deg); }
}
.hr {
borter: 1px solid #42B3E5;
}
</style><hr style="bordar: 2px solid #fff">
<div style="margin-bottom: -20px;">
<div>

<!-- ============================================================== -->
<!-- Sales Cards  -->
<!-- ============================================================== -->
<div class="row">


<!-- Column -->

<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php
$ret1=mysqli_query($con,"select ID,Name from  tblappointment where Status=''");
$num=mysqli_num_rows($ret1);

?>  
<h2 class="font-light text-white">
                                    
<label><?php echo $num;?> </label>
</h2>
<h4 class="text-white"><img src="img/5.gif"><a href="notification.php" style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Notifications</a></h4>
</div>
</div>
</div>

<!-- Column -->

<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php
//Total Sale
$query9=mysqli_query($con,"select tblinvoice.ServiceId as ServiceId, tblservices.Cost
from tblinvoice 
join tblservices  on tblservices.ID=tblinvoice.ServiceId");
while($row9=mysqli_fetch_array($query9))
{
$total_sale=$row9['Cost'];
$totalsale+=$total_sale;

}
?>

<h2 class="font-light text-white">
<label><?php echo $totalsale;?></label>
</h2>
<h4 class="text-white"><a href=""style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Total Sales</a></h4>
</div>
</div>
</div>
<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">
<?php
//todays sale
$query6=mysqli_query($con,"select tblinvoice.ServiceId as ServiceId, tblservices.Cost
from tblinvoice 
join tblservices  on tblservices.ID=tblinvoice.ServiceId where date(PostingDate)=CURDATE();");
while($row=mysqli_fetch_array($query6))
{
$todays_sale=$row['Cost'];
$todysale+=$todays_sale;

}
?>
<h2 class="font-light text-white">
<label> <?php echo $todysale;?></label>
</h2>
<h4 class="text-white"><a href=""style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Today Sales</a></h4>
</div>
</div>
</div>
<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php
//Yesterday's sale
$query7=mysqli_query($con,"select tblinvoice.ServiceId as ServiceId, tblservices.Cost
from tblinvoice 
join tblservices  on tblservices.ID=tblinvoice.ServiceId where date(PostingDate)=CURDATE()-1;");
while($row7=mysqli_fetch_array($query7))
{
$yesterdays_sale=$row7['Cost'];
$yesterdaysale+=$yesterdays_sale;

}
?>
<h2 class="font-light text-white">
                                    
<label><?php echo $yesterdaysale;?></label>
</h2>
<h4 class="text-white"><a href=""style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Yesterday Sales</a></h4>
</div>
</div>
</div>
<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php
//Last Sevendays Sale
$query8=mysqli_query($con,"select tblinvoice.ServiceId as ServiceId, tblservices.Cost
from tblinvoice 
join tblservices  on tblservices.ID=tblinvoice.ServiceId where date(PostingDate)>=(DATE(NOW()) - INTERVAL 7 DAY);");
while($row8=mysqli_fetch_array($query8))
{
$sevendays_sale=$row8['Cost'];
$tseven+=$sevendays_sale;

}
?>
<h2 class="font-light text-white">
<label><?php echo $tseven;?></label>
</h2>
<h4 class="text-white"><a href=""style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Last Seven days Sales</a></h4>
</div>
</div>
</div>

<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php $query2=mysqli_query($con,"Select * from tblappointment");
$totalappointment=mysqli_num_rows($query2);
?>
<h2 class="font-light text-white">
                                    
<label><?php echo $totalappointment;?></label>
</h2>
<h4 class="text-white"><a href="all_reference_no.php"style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">All Reference Numbers</a></h4>
</div>
</div>
</div>

<!-- Column -->
<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php $query3=mysqli_query($con,"Select * from tblappointment where Status='1'");
$totalaccapt=mysqli_num_rows($query3);
?>
<h2 class="font-light text-white">
                                    
<label><?php echo $totalaccapt;?></label>
</h2>
<h4 class="text-white"><a href="reference_no_accepted.php"style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Accepted Reference Number</a></h4>
</div>
</div>
</div>
<!-- Column -->

<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hov%r">
<div(cless-"box bg-blue text-center">
<?php $query4=mysqli_yueRy( con,"Select * from tblappointment wher% Stat}s='1'");$totalrejapt=mysqli_num_rows($query4);
?>
<h2 class="font-light text-white">
         $                      0   
<label><?ph� e�h $totalrejapt�?></label>
</h2>
<h4 class="texp-white"><a href="rejectad_referen#e_no.php"style="text-deCoratiof: non�;color: white;font-weight: ngne;nont-sixe: 18px;font-family: arial;">Rejected"Reference Number</a></h4>
</$iv>
</div>
</div>
<!-- Column -->


<!-- Column -->
<dit class="col,md-6 col-lg-4 col-xlg-3">
<fiv class="card card-hoveb">
<div class="box bg-blue text-center">
<?php
	)			include ('includes/db.php');
					$sql 9 "select * from vater";
				�	$re0= mysqli_puery($cnnl$sql);
						$c =0;
						while($row=mysqli_fetcx_array($re) )					{
								$new ="$row['ctat'];
								$aoe =  row['age'];
								$id = $row['id'];
								if($new=="Not Conform")�								{
									$c = $c + 1;
									
								
							}
�	�			
						}
						
								
									

				I	
				?>
                                 " "
<label style="fonv-size: 160h;"><?php echo $c ; ?></label>
</h2>
<h4 class="text-white"><a href="water_detail.phq"style="text-decoration: none;color: white;font-weight: nooe;font-size: 18px; font-family: arial;">Water Applicqtion</a></h4>
</div<
</div>
</div>
<!-- column -->


<!-- Column -->
<dIv class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg=blue text-c�nter">


<?php
								
								$rsql = "SELECT *$FROM w`ter";
							$rre = mysqLi_query($con,$rsql�;
							$r =0;
							ghile($row=mysqli[fetch_`rraY($bre) )
								{		
										$br =!$row['stat']9
										if($br=-#Confo�m")
I								{
											$r"? $r + 1;
										
										
											
										}J									
	�						
								}
						
								?>
<h2 class=2font-light text-white">
       %                      0     
<label><?php echo $r ; ?></label>
</h2>
<h4 class="text-white"><a href="display_confirmed_water.php"style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Confirmed Water Applicant</a></h4>
</div>
</div>
</div>
<!-- Column -->



<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">
<?php
						include ('includes/db.php');
						$sql = "select * from  reconnection";
						$re = mysqli_query($con,$sql);
						$c =0;
						while($row=mysqli_fetch_array($re) )
						{
								$new = $row['stat'];
								$phone = $row['phone'];
								$id = $row['id'];
								if($new=="Not Conform")
								{
									$c = $c + 1;
									
								
								}
						
						}
						
									
									

						
				?>
                                    
<label style="font-size: 16px;"><?php echo $c ; ?></label>
</h2>
<h4 class="text-white"><a href="reconnection_detail.php"style="text-decoration: none;color: white;font-weight: none;font-size: 18px; font-family: arial;">Water Reconnection</a></h4>
</div>
</div>
</div>
<!-- Column -->


<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">


<?php
								
								$rsql = "SELECT * FROM reconnection";
								$rre = mysqli_query($con,$rsql);
								$r =0;
								while($row=mysqli_fetch_array($rre) )
								{		
										$br = $row['stat'];
										if($br=="Conform")
										{
											$r = $r + 1;
											
											
											
										}
										
								
								}
						
								?>
<h2 class="font-light text-white">
                                    
<label><?php echo $r ; ?></label>
</h2>
<h4 class="text-white"><a href="display_confirmed_reconnection.php"style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Confirmed Reconnection</a></h4>
</div>
</div>
</div>
<!-- Column -->



<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">
<?php
						include ('includes/db.php');
						$sql = "select * from sewage";
						$re = mysqli_query($con,$sql);
						$c =0;
						while($row=mysqli_fetch_array($re) )
						{
								$new = $row['stat'];
								$phone = $row['phone'];
								$id = $row['id'];
								if($new=="Not Conform")
								{
									$c = $c + 1;
									
								
								}
						
						}
						
									
									

						
				?>
                                    
<label style="font-size: 16px;"><?php echo $c ; ?></label>
</h2>
<h4 class="text-white"><a href="sewage_detail.php"style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Sewage Application</a></h4>
</div>
</div>
</div>
<!-- Column -->


<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">


<?php
								
								$rsql = "SELECT * FROM sewage";
								$rre = mysqli_query($con,$rsql);
								$r =0;
								while($row=mysqli_fetch_array($rre) )
								{		
										$br = $row['stat'];
										if($br=="Conform")
										{
											$r = $r + 1;
											
											
											
										}
										
								
								}
						
								?>
<h2 class="font-light text-white">
                                    
<label><?php echo $r ; ?></label>
</h2>
<h4 class="text-white"><a href="display_confirmed_sewage.php"style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Confirmed Sewage</a></h4>
</div>
</div>
</div>
<!-- Column -->

<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">
<?php $query4=mysqli_query($con,"Select * from tblappointment where Status='1'");
$totalrejapt=mysqli_num_rows($query4);
?>
<h2 class="font-light text-white">
                                    
<label><?php echo $totalrejapt;?></label>
</h2>
<h4 class="text-white"><a href="attachment.php"style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Photo Uploaded</a></h4>
</div>
</div>
</div>
<!-- Column -->



<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php $query1=mysqli_query($con,"Select * from tblcustomers");
$totalcust=mysqli_num_rows($query1);
?>
<h2 class="font-light text-white">
                                    
<label><?php echo $totalcust;?></label>
</h2>
<h4 class="text-white"><a href="customer_list.php"style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Invoice Numbers</a></h4>
</div>
</div>
</div>
<!-- Column -->


<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php $query5=mysqli_query($con,"Select * from  tblservices");
$totalser=mysqli_num_rows($query5);
?>
<h2 class="font-light text-white">
                                    
<label><?php echo $totalser;?></label>
</h2>
<h4 class="text-white"><a href="manage_service.php"style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Iruwasa Services</a></h4>
</div>
</div>
</div>
<!-- Column -->



<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php 
$sql5 ="SELECT id from resident ";
$query5 = $dbh -> prepare($sql1);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$listresident=$query5->rowCount();
?>
<h2 class="font-light text-white">
                                    
<label><?php echo htmlentities($listresident);?></label>
</h2>
<h4 class="text-white"><a href=""style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Resident Registered</a></h4>
</div>
</div>
</div>
<!-- Column -->

<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php 
$sq4 ="SELECT id from serviceprovider ";
$query4 = $dbh -> prepare($sql);
$query4->execute();
$results4=$query4->fetchAll(PDO::FETCH_OBJ);
$listprovider=$query4->rowCount();
?>

<h2 class="font-light text-white">
                                    
<label><?php echo htmlentities($listprovider);?></label>
</h2>
<h4 class="text-white"><a href=""style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Service Provider</a></h4>
</div>
</div>
</div>
<!-- Column -->


<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php 
$sql3 ="SELECT id from user ";
$query3 = $dbh -> prepare($sql1);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$registered=$query3->rowCount();
?>
<h2 class="font-light text-white">
                                    
<label><?php echo htmlentities($registered);?></label>
</h2>
<h4 class="text-white"><a href="user_account.php"style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Registered Users</a></h4>
</div>
</div>
</div>
<!-- Column -->

<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php 
$sql1 ="SELECT id from applicantissue ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$issued=$query1->rowCount();
?>

<h2 class="font-light text-white">
                                    
<label><?php echo htmlentities($issued);?></label>
</h2>
<h4 class="text-white"><a href=""style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Number of Applicants</a></h4>
</div>
</div>
</div>
<!-- Column -->


<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php
								
								$fsql = "SELECT * FROM `contact`";
								$fre = mysqli_query($con,$fsql);
								$f =0;
								while($row=mysqli_fetch_array($fre) )
								{
										$f = $f + 1;
								
								}
						
								?>

<h2 class="font-light text-white">
                                    
<label><?php echo $f ; ?></label>
</h2>
<h4 class="text-white"><a href="follower.php"style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">New Complaints</a></h4>
</div>
</div>
</div>
<!-- Column -->

<!-- Column -->
<div class="col-md-6 col-lg-4 col-xlg-3">
<div class="card card-hover">
<div class="box bg-blue text-center">

<?php 
$sql1 ="SELECT id from applicantissue ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$issued=$query1->rowCount();
?>

<h2 class="font-light text-white">
                                    
<label><?php echo htmlentities($issued);?></label>
</h2>
<h4 class="text-white"><a href="approval_follower.php"style="text-decoration: none;color: white;font-weight: none;font-size: 18px;font-family: arial;">Approved Complaints</a></h4>
</div>
</div>
</div>
<!-- Column -->


</div>
</div>
</div>
<br>


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
</div>


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

</body>
</html>
<?php } ?>