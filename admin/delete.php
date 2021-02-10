<?php 
include 'includes/dbconfig.php';
$fetchqry = "delete from `image` where id='".$_GET['del_id']."'";
$result=mysqli_query($con,$fetchqry);
if($result==TRUE){ ?> 
	alert("Data deleted!!!");
			window.location = "show.php";
			 <?php
}
?>