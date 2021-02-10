<html>
	<head>
		<meta charset="utf-8">
		<title>IRINGA WATER SUPPLY AND SANITATION AUTHORITY</title>
		<link rel="shortcut icon" href="img/2.png">	
		<style>
		/* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;	
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
		</style>
		
	</head>
	<body>
	
	
	
	
	<?php
	ob_start();	
	include ('includes/db.php');
	include('includes/config.php');
include('includes/dbconnection.php');

	$id = $_GET['printid'];
	
	$sql ="select * from  newmeter where id = '$id' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['id'];
		$newmeter =  $row['NewMeter'];
		$resident = $row['Resident'];
		$street = $row['Street'];
		$ometer = $row['OMeter'];
		$landlord = $row['Landlord'];
		$address = $row['Address'];
		$hnumber = $row['HNumber'];
		$employee = $row['Employee'];
		$email = $row['Email'];
		$mobile = $row['Mobile'];
		$pnumber = $row['PNumber'];
		$installation = $row['Installation'];
		$date = $row['Date'];
		$reason = $row['Reason'];
	
	}
	
									
	?>
		<header>
			<h1>IRINGA WATER SUPPLY AND SANITATION AUTHORITY</h1>
			<address >
				<p style="font-size: 16px;">TEL:  026-2700017, 0713104401, 0684104401,</p>
				<p style="font-size: 16px;">FAX: 026-2700005,</p>
				<p style="font-size: 16px;">EMAIL: md@iruwasa.go.tz</p>
				<p style="font-size: 16px; font-weight: bold;">REF NO: P-2020730-002</p>
			</address>
			<span><img alt="" src="img/2.png" height="10%"></span>
		</header>
		<article>
			<h1></h1>
			<p style="text-align: center;font-weight: bold; font-size: 18px;">CUSTOMER METER NUMBER DETAIL</p>
			<br>

			<p style="font-weight: bold; font-size: 16px;">CUSTOMER DETAIL</p>
			<address >
				
				<p><br></p>
				<p>Meter Number  :   <?php echo $newmeter;?><br></p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Landlord Owner</span></th>
					<td><span ><?php echo $landlord; ?> </span></td>
				</tr>
				<tr>
					<th><span >Parmanent of Resident</span></th>
					<td><span ><?php echo $resident; ?></span></td>
				</tr>
				<tr>
					<th><span >Street Name</span></th>
					<td><span ><?php echo $street; ?> </span></td>
				</tr>
				<tr>
					<th><span >Blocked Meter Number</span></th>
					<td><span ><?php echo $ometer; ?> </span></td>
				</tr>
				
				
			</table>
			<table >


				<tr> 
						<td>Home Address : -  <?php echo $address; ?> </td>
						<td>House Number : -  <?php echo $hnumber; ?> </td>
					</tr>
					<tr> 
					</tr>
				</table>
					<br><br>
					<p>EMPLOYEE DETAIL</p>

					<table >
					<tr> 
						<td>Name (Eng) : -  <?php echo $employee; ?> </td>
						
						<td>Email Address : -  <?php echo $email; ?> </td>
					</tr>
					<tr> 
						<td>Mobile Number: -  <?php echo $mobile; ?> </td>
						<td>Date of Issue : -  <?php echo $date; ?> </td>
					</tr>
					
				</table>
				<br>
				<br>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Pipe Number</span></th>
						<th><span >Installation Status</span></th>
						
					</tr>
				</thead>
				<tbody>
				
					<tr>
						<td><span ><?php echo $pnumber; ?></span></td>
						<td><span ><?php echo $installation; ?> </span></td>
						
					</tr>
					
				</tbody>
			</table>
			
			
		</article>
		<aside>
			<h1><span >Contact us</span></h1>
			<div >
				<p align="center">Email :- md@iruwasa.go.tz || Web :- www.iruwasa.go.tz || Phone :- +255 713 104 401</p>
			</div>
		</aside>
	</body>
</html>

<?php 

ob_end_flush();

?>