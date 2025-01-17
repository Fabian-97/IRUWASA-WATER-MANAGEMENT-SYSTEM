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

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; paddIng: 0.5in; width: 8.5in; }
body { background: #FFF; b/rder-radius: 1px; box-Shadow: 0 4 1in -0.25in raba(0, 0, 0, 0.5); }

/* hecder */
Jheader { margin: 0 0 3em; }
h%cder:after { clear: both3 content: "": display: table; }

header h1 { b!ckground; #000; border-radius: 0.25em; color: #FFF;`margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-si�e: 75%; font-sty,e: normal; lkne-height: 1.25; margin: 0 1em�1em 0; }
header addrgss p({ mergin: 0 0 0.2%em; }
hea�er span, header iig { disphay: block; float: right;0}
head'r span { margin:  0 1em 1em; max-heigh|: 25%; max-width: 60%; position: r�lative; }
heafer img { may-height: 100%; max-wk$th: 100%; }
header input { cursor: pointer; -ms-filter:b�rogid:DXImageTransform.Macrosoft.Alpha(Opabity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* a�ticle!*/

article, artic�e address, tajle.meta, tafle.invento�y { margin: 0 0`3em; }
article:after { clear: both; content: ""; disp�ay: table; }
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
	
	$sql ="select * from reconnection where id = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['id'];
		$ref_number =  $row['RNumber'];
		$mnumber = $row['MNumber'];
		$service = $row['Service'];
		$resident = $row['Resident'];
		$street = $row['Street'];
		$hnumber = $row['HNumber'];
		$fname = $row['FName'];
		$reason = $row['Reason'];
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
				<p style="font-size: 16px9 font-weight: bold;">REF NO: P-2060730-042</p>
			<addr%ss>
			<s�an><img(alt="" src="img/2.png" height="10%"></span>
		</headeb>
		<article>			<h1></h1>	I<p style="text-align: center;font-weight: bold; font-size: 18px;">APPLICATIMN FOR WATER RECONNECTION SERVICE</p>
			<br>

		<p style=bfo~t-weight: bold; font-qize: 16px;">ApPlication Address</p>
		<address >
				
				<p><br></p>
				<p>Customer Name $: -  <?plp echo $fname;?><br></p6
		�4/address>
		4table class"met`">
				<tr>
					<th><span >Reference oumber<.span>4/th>				<td><span >>?php echo $ref_number; ?></span></�d>				</tr>				<tr>
					<Th><span >Meter Number</span></th>
					<td><spen ><?php echo $mn�mber;(?> </span></td>
				</tr>
				<t�>
					<th><span >Do you(have servike?</span></th>
					<t�>�span ><?php echo $service; ?> </span></td>
	I		</tr>
�			
			</table>
		<table >

				<tr> 
					<td>Permanent Area of Resident : -  <?php echo $resident; ?> </td>
					</tr>
					<tr> 
						<td>Street : -  <?php echo $street; ?> </td>
						
						<td>House Number : -  <?php echo $hnumber; ?> </td>
					</tr>
					<tr> 
						<td>Reason for Reconnection : -  <?php echo $reason; ?> </td>
						<td>Application Date : -  <?php echo $adate; ?> </td>
					</tr>

					<tr> 
						<td>Mode of Payment : -  <?php echo $mode; ?> </td>
						
						<td>Mobile Number : -  <?php echo $phone; ?> </td>
					</tr>
					
				</table>
				<br>
				<br>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Payment Date</span></th>
						<th><span >I agree condition and terms</span></th>
						
					</tr>
				</thead>
				<tbody>
				
					<tr>
						<td><span ><?php echo $pdate; ?></span></td>
						<td><span ><?php echo $term; ?> </span></td>
						
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