<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="generator" content="openElement (1.53)" />
<link id="openElement" rel="stylesheet" type="text/css" href="WEFiles/Css/v02/openElement.css?v=50491105200" />
<link id="siteFonts" rel="stylesheet" type="text/css" href="Files/Fonts/Fonts.css?v=50491105200" />
<link id="OETemplate1" rel="stylesheet" type="text/css" href="Templates/BaseLayer.css?v=50491105200" />
<link id="OEBase" rel="stylesheet" type="text/css" href="CompanyInfo.css?v=50491105200" />
<!--[if lte IE 7]> 
<link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=50491105200" />
<![endif]-->
<script type="text/javascript">
var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-53-5","PagePath":"CompanyInfo","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"","RenderMode":"Export","PageAssociatePath":"CompanyInfo","EditorTexts":null};
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="WEFiles/Client/jQuery/migrate.js?v=50491105200"></script>
<script type="text/javascript" src="WEFiles/Client/Common/oe.min.js?v=50491105200"></script>
<?php
$user = 'root';
$password = 'root';
$db = 'mydb';
$host = 'localhost';
$port = 3306;

$con = mysqli_connect($host, $user, $password, $db);
         
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die("I am doomed!!");
    }

?>

</head>
<body class="">
	<form id="XForm" method="post" action="#"></form>
	<div id="XBody" class="BaseDiv RWidth OEPageXbody OESK_XBody_Default" style="z-index:1000">
		<div class="OESZ OESZ_DivContent OESZG_XBody">
			<div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">
				<div id="WE98f2ce208a" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default OECenterAH" style="z-index:1">
					<div class="OESZ OESZ_DivContent OESZG_WE98f2ce208a">
						<div class="OESZ OESZ_Top OESZG_WE98f2ce208a"></div><div class="OESZ OESZ_Content OESZG_WE98f2ce208a"></div><div class="OESZ OESZ_Bottom OESZG_WE98f2ce208a"></div>
					</div>
				</div>
				<div id="WEef4dd0a003" class="BaseDiv RNone OEWELink OESK_WELink_d3538187" style="z-index:2" onclick="return OE.Navigate.open(event,'index.php',1)">
					<div class="OESZ OESZ_DivContent OESZG_WEef4dd0a003">
						<a class="OESZ OESZ_Link OESZG_WEef4dd0a003 ContentBox" href="index.php"><span style="font-size:32px;font-family:'Louis George Café Light';">Take Back Your Crap</span></a>
					</div>
				</div>
				<div id="WEb569f4463a" class="BaseDiv RNone OEWELink OESK_WELink_d3538187" style="z-index:3" onclick="return OE.Navigate.open(event,'How%20It%20Started.php',1)">
					<div class="OESZ OESZ_DivContent OESZG_WEb569f4463a">
						<a class="OESZ OESZ_Link OESZG_WEb569f4463a ContentBox" href="How%20It%20Started.php">How It Started</a>
					</div>
				</div>
				<div id="WEd35cad5137" class="BaseDiv RNone OEWELink OESK_WELink_d3538187 OE_ActiveLink" style="z-index:4" onclick="return OE.Navigate.open(event,'CompanyInfo.php',1)">
					<div class="OESZ OESZ_DivContent OESZG_WEd35cad5137 OE_ActiveLink">
						<a class="OESZ OESZ_Link OESZG_WEd35cad5137 OE_ActiveLink ContentBox" href="CompanyInfo.php">Company Info</a>
					</div>
				</div>
				<div id="WEd20ed072fa" class="BaseDiv RNone OEWELink OESK_WELink_d3538187" style="z-index:5" onclick="return OE.Navigate.open(event,'Get%20Involved.php',1)">
					<div class="OESZ OESZ_DivContent OESZG_WEd20ed072fa">
						<a class="OESZ OESZ_Link OESZG_WEd20ed072fa ContentBox" href="Get%20Involved.php">Get Involved</a>
					</div>
				</div>
				<div id="WE72b20f8722" class="BaseDiv RNone OEWELink OESK_WELink_d3538187" style="z-index:6" onclick="return OE.Navigate.open(event,'Educate%20Yourself.php',1)">
					<div class="OESZ OESZ_DivContent OESZG_WE72b20f8722">
						<a class="OESZ OESZ_Link OESZG_WE72b20f8722 ContentBox" href="Educate%20Yourself.php">Educate yourself<br /></a>
					</div>
				</div>
				<div id="WE320bd2b287" class="BaseDiv RNone OEWELink OESK_WELink_d3538187" style="z-index:7" onclick="return OE.Navigate.open(event,'Contact.php',1)">
					<div class="OESZ OESZ_DivContent OESZG_WE320bd2b287">
						<a class="OESZ OESZ_Link OESZG_WE320bd2b287 ContentBox" href="Contact.php">Contact</a>
					</div>
				</div>
				<div id="WEabdb9ab3fc" class="BaseDiv RBoth OEWELinkImage OESK_WELinkImage_3cb83fa0" style="z-index:8" onclick="return OE.Navigate.blank(event,'http://www.facebook.com')">
					<div class="OESZ OESZ_DivContent OESZG_WEabdb9ab3fc">
						<a href="http://www.facebook.com"><img style="width:100%;height:100%;border:none" src="WEFiles/Image/empty.png" /></a>
					</div>
				</div>
				<div id="WE17686cf7e4" class="BaseDiv RBoth OEWELinkImage OESK_WELinkImage_f0ba68d5" style="z-index:9" onclick="return OE.Navigate.blank(event,'http://twitter.com')">
					<div class="OESZ OESZ_DivContent OESZG_WE17686cf7e4">
						<a href="http://twitter.com"><img style="width:100%;height:100%;border:none" src="WEFiles/Image/empty.png" /></a>
					</div>
				</div>
				<div id="WE95ee2c2457" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default OECenterAH" style="z-index:1020">
					<div class="OESZ OESZ_DivContent OESZG_WE95ee2c2457">
						<div class="OESZ OESZ_Top OESZG_WE95ee2c2457"></div><div class="OESZ OESZ_Content OESZG_WE95ee2c2457"></div><div class="OESZ OESZ_Bottom OESZG_WE95ee2c2457"></div>
					</div>
				</div>
				<div id="WE8c642ee952" class="BaseDiv RWidth OEWEText OESK_WEText_Default OECenterAH" style="z-index:1021">
					<div class="OESZ OESZ_DivContent OESZG_WE8c642ee952">
						<span class="ContentBox"><span style="font-size:40px;color:rgb(255, 255, 255);font-family:'Louis George Café Light';">Company Info</span><span style="color:rgb(0, 0, 0);font-size:18px;line-height:21px;"><br /></span></span>
					</div>
				</div>
				<div id="WEdaa1d56c18" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1002">
					<div class="OESZ OESZ_DivContent OESZG_WEdaa1d56c18">
						<div class="OESZ OESZ_Top OESZG_WEdaa1d56c18"></div><div class="OESZ OESZ_Content OESZG_WEdaa1d56c18"></div><div class="OESZ OESZ_Bottom OESZG_WEdaa1d56c18"></div>
					</div>
				</div>
				<div id="WE387b8ec88f" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:1003">
					<div class="OESZ OESZ_DivContent OESZG_WE387b8ec88f">
						<span class="OESZ OESZ_Text OESZG_WE387b8ec88f ContentBox"><span style="color:rgb(255, 255, 255);font-size:36px;font-family:'Louis George Café Light';">&nbsp; Who are the main players?</span></span>
					</div>
				</div>
				<div id="WEca00fc814b" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:1004">
					<div class="OESZ OESZ_DivContent OESZG_WEca00fc814b">
						<span class="OESZ OESZ_Text OESZG_WEca00fc814b ContentBox"><span style="color:rgb(255, 255, 255);font-size:65px;">_</span><br /></span>
					</div>
				</div>
				<div id="WE23de44e436" class="BaseDiv RWidth OEWEText OESK_WEText_Default OECenterAH" style="z-index:1005">
					<div class="OESZ OESZ_DivContent OESZG_WE23de44e436">
						<span class="ContentBox"><span style="color:rgb(255, 255, 255);font-family:'Louis George Café Light';font-size:18px;">There are so many companies out there today making an impact, whether good or bad. It can be a bit overwhelming to find out who is doing what.​&nbsp;&nbsp;<br /> &nbsp;<br /><b> So we've done the work for you.&nbsp;<br /></b> &nbsp;<br /> Below we've highlighted some companies who are taking the initiative to clean up their industries. We've also have started a list of the American companies who are in need of a nudge to get going in the right direction.&nbsp;This is a constantly changing problem and therefore this is an ever changing list.&nbsp;<br /> &nbsp;<br /><b> Hopefully, one day we can remove every company from the list below.</b></span></span>
					</div>
				</div>
				<div id="WE8c36d30a4e" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default OECenterAH" style="z-index:1001">
					<div class="OESZ OESZ_DivContent OESZG_WE8c36d30a4e">
						<div class="OESZ OESZ_Top OESZG_WE8c36d30a4e"></div><div class="OESZ OESZ_Content OESZG_WE8c36d30a4e"></div><div class="OESZ OESZ_Bottom OESZG_WE8c36d30a4e"></div>
					</div>
				</div>
				<div id="WE50bc38abb1" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:1006">
					<div class="OESZ OESZ_DivContent OESZG_WE50bc38abb1">
						<span class="OESZ OESZ_Text OESZG_WE50bc38abb1 ContentBox"><span style="color:rgb(0, 0, 0);font-family:'Louis George Café Light';"><span style="font-size:36px;">Who is doing it right?</span></span><br /></span>
					</div>
				</div>
				<div id="WEa69d8cbc9f" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OEGo" style="z-index:1008">
					<div class="OESZ OESZ_DivContent OESZG_WEa69d8cbc9f">
						<img style="" src="WEFiles/Image/WEImage/Patagonia-890930f5.jpg" alt="" />
					</div>
				</div>
				<div id="WE25c07b071f" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OEGo" style="z-index:1010">
					<div class="OESZ OESZ_DivContent OESZG_WE25c07b071f">
						<img style="" src="WEFiles/Image/WEImage/Allbirds-835f9c0b.jpg" alt="" />
					</div>
				</div>
				<div id="WEe825d826a6" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:1009">
					<div class="OESZ OESZ_DivContent OESZG_WEe825d826a6">
						<span class="ContentBox"><span style="color:rgb(255, 255, 255);"><span style="font-size:26px;"><b>Allbirds</b></span><br /><br /><span style="font-size:18px;"><b>-7.6 kg COse average carbon footprint of each pair of shoes<br />-similar to driving 19 miles in your car<br />-currently buys carbon offsets for each pair of shoes until company is able to become completely carbon negative</b></span></span><br /></span>
					</div>
				</div>
				<div id="WE2e6c197e16" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:1007">
					<div class="OESZ OESZ_DivContent OESZG_WE2e6c197e16">
						<span class="ContentBox"><span style="color:rgb(255, 255, 255);"><b><span style="font-size:26px;">Patagonia&nbsp;</span><br /><span style="font-size:16px;">- 68% of all clothing lines use recycled material<br />-100% of electricity needs met with renewables<br />- 56,000 repairs made this past year with</span></b></span><br /></span>
					</div>
				</div>
				<div id="WEde09c5b469" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default OECenterAH" style="z-index:1012">
					<div class="OESZ OESZ_DivContent OESZG_WEde09c5b469">
						<div class="OESZ OESZ_Top OESZG_WEde09c5b469"></div><div class="OESZ OESZ_Content OESZG_WEde09c5b469"></div><div class="OESZ OESZ_Bottom OESZG_WEde09c5b469"></div>
					</div>
				</div>
				<div id="WE6376a8acd4" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:1018">
					<div class="OESZ OESZ_DivContent OESZG_WE6376a8acd4">
						<span class="OESZ OESZ_Text OESZG_WE6376a8acd4 ContentBox"><span style="font-family:'Louis George Café Light';"><span style="font-size:36px;color:rgb(255, 255, 255);">Who needs to do better?</span></span><br /></span>
					</div>
				</div>
				<div id="WE668610bc1a" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OEGo" style="z-index:1014">
					<div class="OESZ OESZ_DivContent OESZG_WE668610bc1a">
						<img style="" src="WEFiles/Image/WEImage/IMG_20210210_155656549_PORTRAIT-49118721.jpg" alt="" />
					</div>
				</div>
				<div id="WE78919806c2" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OEGo" style="z-index:1016">
					<div class="OESZ OESZ_DivContent OESZG_WE78919806c2">
						<img style="" src="WEFiles/Image/WEImage/36584168-0-image-a-6_1607419548063-2ea6143d.jpg" alt="" />
					</div>
				</div>
				<div id="WEf68f7b57a8" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:1013">
					<div class="OESZ OESZ_DivContent OESZG_WEf68f7b57a8">
						<span class="ContentBox"><span style="color:rgb(255, 255, 255);"><span style="font-size:26px;"><b>Pepsi</b></span><br /><br /><span style="font-size:18px;"><b>-Not much better than Coca Cola to be honest</b></span></span><br /></span>
					</div>
				</div>
				<div id="WE3d4de4a7d3" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:1015">
					<div class="OESZ OESZ_DivContent OESZG_WE3d4de4a7d3">
						<span class="ContentBox"><span style="font-size:16px;"><span style="color:rgb(255, 255, 255);"><b>CocaCola<br /><span size="3">- produces about three million tonnes of plastic packaging a year - equivalent to 200,000 bottles a minute.&nbsp;<br /><br /></span></b></span><span style="color:rgb(255, 255, 255);"><b><span size="3">-It is estimated that some 200,000 metric tons of mismanaged plastic waste, i.e burnt or dumped, is created by Coca-Cola every year across just six developing nations.</span></b></span></span><br /></span>
					</div>
				</div>
				<div id="WE1f72b5a647" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default OECenterAH" style="z-index:1011">
					<div class="OESZ OESZ_DivContent OESZG_WE1f72b5a647">
						<div class="OESZ OESZ_Top OESZG_WE1f72b5a647"></div><div class="OESZ OESZ_Content OESZG_WE1f72b5a647"></div><div class="OESZ OESZ_Bottom OESZG_WE1f72b5a647"></div>
					</div>
				</div>
				<div id="WE50345fd9c0" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:1019">
					<div class="OESZ OESZ_DivContent OESZG_WE50345fd9c0">
						<span class="OESZ OESZ_Text OESZG_WE50345fd9c0 ContentBox"><span style="font-family:'Louis George Café Light';"><b><span style="font-size:36px;color:rgb(255, 255, 255);">Top 10 Waste Producers</span></b></span><br /></span>
					</div>
				</div>
				<div id="WE460cfc1207" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:1017">
					<div class="OESZ OESZ_DivContent OESZG_WE460cfc1207">
						<?php
$sql = "SELECT name, address, city, state, zipCode, phone, website FROM mydb.company WHERE companyID < 100";
$result = mysqli_query($con,$sql);

//echo $sql;

//$row = mysqli_fetch_array($result);
//$count = $row['count'];
//mysqli_close();
?>
<div class='db-name'><?php echo $count ?></div>
<?php


	
	//echo "<b><center>Database Output</center></b><br><br>";
        ?>
         <table border="2" cellspacing="2" cellpadding="5">
            <tr> 
                <th>Company</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
				<th>Zipcode</th>
				<th>Phone</th>
				<th>Website</th>
                
            </tr>
			<?php
            while ($row = mysqli_fetch_array($result)) {

                $name = $row['name'];
                $address = $row['address'];
                $city = $row['city'];
                $state = $row['state'];
				$zipCode = $row['zipCode'];
                $phone = $row['phone'];				
                $website = $row['website'];
               
                ?>
				<tr>             
					<td><?php echo "$name"; ?></td>
                    <td><?php echo "$address"; ?></td>
                    <td><?php echo "$city"; ?></td>
                    <td><?php echo "$state"; ?></td>
					<td><?php echo "$zipCode"; ?></td>
					<td><?php echo "$phone"; ?></td>
					<td><?php echo "$website"; ?></td>
               
                </tr>

    <?php
}
echo "</table>";
?>

					</div>
				</div>
			</div>
			<div class="OESZ OESZ_XBodyFooter OESZG_XBody OECT OECT_Footer OECTAbs">
				<div id="WE347641c35b" class="BaseDiv RNone OEWEW3C OESK_WEW3C_Default" style="z-index:4">
					<div class="OESZ OESZ_DivContent OESZG_WE347641c35b">
						<a href="http://validator.w3.org/check?uri=referer&amp;doctype=XHTML+1.0+Transitional"><img src="WEFiles/Image/WEW3C.png" alt="Valid XHTML 1.0 Transitional" height="31" width="88" style="border-style:hidden" /></a>
					</div>
				</div>
				<div id="WE15ffddd307" class="BaseDiv RNone OEWEHelpUs OESK_WEHelpUs_e761988f" style="z-index:3">
					<div class="OESZ OESZ_DivContent OESZG_WE15ffddd307">
						<div class="OESZ OESZ_Image OESZG_WE15ffddd307">
						<a href="http://www.openelement.com" target="_blank"><img src="WEFiles/Image/empty.png" style="width:100%;height:100%;border:none;" alt /></a>
						</div>
						<div class="OESZ OESZ_Text OESZG_WE15ffddd307">
						<a href="http://www.openelement.com" onclick="return OE.Navigate.blank(event,this.href)" class="ContentBox">Created with openElement</a>
						</div>

					</div>
				</div>
				<div id="WE9000cd6dd0" class="BaseDiv RNone OEWEImage OESK_WEImage_Default" style="z-index:1">
					<div class="OESZ OESZ_DivContent OESZG_WE9000cd6dd0">
						<a href="index.php"><img style="height:25px;width:25px;" src="Files/Image/Tools/IcoHome.png" alt="" /></a>
					</div>
				</div>
				<div id="WE0558ccef50" class="BaseDiv RNone OEWEImage OESK_WEImage_Default" style="z-index:2">
					<div class="OESZ OESZ_DivContent OESZG_WE0558ccef50">
						<a href="Contact.php"><img style="height:25px;width:24px;" src="Files/Image/Tools/IcoMail.png" alt="" /></a>
					</div>
				</div>
			</div>

		</div>
	</div>
</body>
</html>