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

	$pid = $_GET['sid'];
	
	$sql ="select * from sewage where id = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['id'];
		$ref_number =  $row['RNumber'];
		$resident = $row['Resident'];
		$street = $row['Street'];
		$hnumber = $row['HNumber'];
		$owner = $row['Owner'];
		$ntrip = $row['NTrip'];
		$tcost = $row['TCost'];
		$rcondition = $row['RCondition'];
		$adate = $row['ADate'];
		$mode = $row['Mode'];
		$phone = $row['Phone'];
		$pdate = $row['PDate'];
		$term = $row['Term'];
	
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

			<p style="text-align: center;font-weight: bold; font-size: 17px;">APPLICATION FOR WATER SEWERAGE SERVICE</p>
			<br>

			<p style="font-weight: bold; font-size: 15px;">Application Address</p>
			<address >
				
				<p><br></p>
				<p>Customer Name  : -  <?php echo $owner;?><br></p>
			</address>
			<table class="meta">
				<tr>
					<th><span >Reference number</span></th>
					<td><span ><?php echo $ref_number; ?></span></td>
				</tr>
				<tr>
					<th><span >Parmanent Resident</span></th>
					<td><span ><?php echo $resident; ?> </span></td>
				</tr>
				<tr>
					<th><span >Street</span></th>
					<td><span ><?php echo $street; ?> </span></td>
				</tr>
				
			</table>
			<table >

				<tr> 
						<td>House Number : -  <?php echo $hnumber; ?> </td>
					</tr>
					<tr> 
						<td>Number of Trip : -  <?php echo $ntrip; ?> </td>
						
						<td>Cost per Trip : -  <?php echo $tcost; ?> </td>
					</tr>
					<tr> 
						<td>Road Condition : -  <?php echo $rcondition; ?> </td>
						<td>Application Date : -  <?php echo $adate; ?> </td>
					</tr>

					<tr> 
						<td>Mode of Payment : -  <?php echo $mode; ?> </td>
						
						<td>Mobile Number : -  <?php echo $phone; ?> </td>
					</tr>
					
				</table>
				<br>
				<p style="font-size: 13px; font-family: arial;">I/We make application for water to the undermentioned premises subject to the Waterworks Rules, and at the charges imposed and fixed by the Water Authority and applicable to the purpose for which the supply is required, and I/We agrees to pay for the charges.</p>


			<br>


			<p style="font-size: 13px; font-family: arial;">I undertake not to have the work begun before the consent of the Water Authority is received and to have the work carried out in accordance with the Waterworks Rules to the satisfication of the Water Authority. I further undertake to notify the Water Authority as the work is completed and to give facilities for its inspection by Water Authority whose proper charges in connection with the work I undertake to pay in advance.</p>

			<br>


			<p style="font-size: 16px; font-family: arial; font-weight: bold;">LEGAL LIABILITY</p>
			<br>
			<p style="font-size: 13px; font-family: arial;">In satisfication with the above instruction you hereby now entered into a legal agreement to which if your service will be disconnected and you have delayed to reconnect within six (6) months, the same meter could be given to another customer and you will be obliged to wait for another meter.</p>
			


			<br>


			<p style="font-size: 15px; font-family: arial; font-weight: bold;">Signature of Applicant: ......................................  &emsp;&emsp;&emsp; Date: ................................................</p>


			<br>
<div style="border: 2px solid black;">
	<br>
			<p style="font-size: 16px; font-family: arial; font-weight: bold;">CERTIFICATE</p>
			<br>
			<p>The Cerificate must be signed by the owner of the premises concerned. I certify that I am the owner of the premises reffered to in the application and agree that the premises be supplied with water from the waterworks as from.................................................................</p>

			<br>
			<p style="font-size: 15px; font-family: arial; font-weight: bold;">Signature of Owner/Land Lord: ......................................  &emsp;&emsp;&emsp; Date: ................................................</p>
			<br>

			<p style="font-size: 16px; font-family: arial; font-weight: bold;">Address: ...............................................</p></div>
			
			
		</article>
		
	</body>
</html>

<?php 

ob_end_flush();

?>