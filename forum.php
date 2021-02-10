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

<!---==============================================================================------->

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




<link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/modernizr.custom.js"></script>
    </head>



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




.comment-form-container {
    background: #F0F0F0;
    border: #e0dfdf 1px solid;
    padding: 20px;
    border-radius: 2px;
}

.input-row {
    margin-bottom: 20px;
}

.input-field {
    width: 100%;
    border-radius: 2px;
    padding: 10px;
    border: #e0dfdf 1px solid;
}

.btn-submit {
    padding: 10px 20px;
    background: #333;
    border: #1d1d1d 1px solid;
    color: #f0f0f0;
    font-size: 0.9em;
    width: 100px;
    border-radius: 2px;
    cursor:pointer;
}

ul {
    list-style-type: none;
}

.comment-row {
    border-bottom: #e0dfdf 1px solid;
    margin-bottom: 15px;
    padding: 15px;
}

.outer-comment {
    background: #F0F0F0;
    padding: 20px;
    border: #dedddd 1px solid;
}

span.commet-row-label {
    font-style: italic;
}

span.posted-by {
    color: #09F;
}

.comment-info {
    font-size: 0.8em;
}
.comment-text {
    margin: 10px 0px;
}
.btn-reply {
    font-size: 0.8em;
    text-decoration: underline;
    color: #888787;
    cursor:pointer;
}
#comment-message {
    margin-left: 20px;
    color: #189a18;
    display: none;
}



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
<!-- php -->
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
<h5 style="font-size:20px; color:blue;">Service Forum | Forum | 
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
<td colspan="3"align="center"style="font-size:20px;">Service Forum</td>
</tr>
</table>

<!--#######################reference###############################################--->

<div class="comment-form-container">
        <form id="frm-comment">
            <div class="input-row">
                <input type="hidden" name="comment_id" id="commentId"
                    placeholder="Name" /> <input class="input-field"
                    type="text" name="name" id="name" placeholder="Name" style="font-size: 18px;"/>
            </div>
            <div class="input-row">
                <textarea class="input-field" type="text" name="comment"
                    id="comment" placeholder="Add a Comment" style="font-size: 18px;">  </textarea>
            </div>
            <div>
                <input type="button" class="btn-submit" id="submitButton"
                    value="Publish" style="font-size: 18px;"/><div id="comment-message">Comments Added Successfully!</div>
            </div>

        </form>
    </div>
    <div id="output"></div>

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
<script src="js/jquery-3.2.1.min.js"></script>

    <script>
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
                   $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "comment-add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                            $("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                           listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
            
            $(document).ready(function () {
                   listComment();
            });

            function listComment() {
                $.post("comment-list.php",
                        function (data) {
                               var data = JSON.parse(data);
                            
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_comment_id'];

                                if (parent == "0")
                                {
                                    comments = "<div class='comment-row'style='font-size: 16px;color:blue;'>"+
                                    "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                                    "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                                    "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>"+
                                    "</div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                        var comments = "<div class='comment-row'style='font-size: 16px; margin-left:50px; color:green;'>"+
                        " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
        </script>

</body>
</html>
<?php } ?>