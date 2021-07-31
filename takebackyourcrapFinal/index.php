<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="generator" content="openElement (1.53)" />
<link id="openElement" rel="stylesheet" type="text/css" href="WEFiles/Css/v02/openElement.css?v=50491105200" />
<link id="siteFonts" rel="stylesheet" type="text/css" href="Files/Fonts/Fonts.css?v=50491105200" />
<link id="OETemplate1" rel="stylesheet" type="text/css" href="Templates/BaseLayer.css?v=50491105200" />
<link id="OEBase" rel="stylesheet" type="text/css" href="index.css?v=50491105200" />
<!--[if lte IE 7]> 
<link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=50491105200" />
<![endif]-->
<script type="text/javascript">
var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-53-5","PagePath":"index","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"","RenderMode":"Export","PageAssociatePath":"index","EditorTexts":null};
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
				<div id="WEef4dd0a003" class="BaseDiv RNone OEWELink OESK_WELink_d3538187 OE_ActiveLink" style="z-index:2" onclick="return OE.Navigate.open(event,'index.php',1)">
					<div class="OESZ OESZ_DivContent OESZG_WEef4dd0a003 OE_ActiveLink">
						<a class="OESZ OESZ_Link OESZG_WEef4dd0a003 OE_ActiveLink ContentBox" href="index.php"><span style="font-size:32px;font-family:'Louis George Café Light';">Take Back Your Crap</span></a>
					</div>
				</div>
				<div id="WEb569f4463a" class="BaseDiv RNone OEWELink OESK_WELink_d3538187" style="z-index:3" onclick="return OE.Navigate.open(event,'How%20It%20Started.php',1)">
					<div class="OESZ OESZ_DivContent OESZG_WEb569f4463a">
						<a class="OESZ OESZ_Link OESZG_WEb569f4463a ContentBox" href="How%20It%20Started.php">How It Started</a>
					</div>
				</div>
				<div id="WEd35cad5137" class="BaseDiv RNone OEWELink OESK_WELink_d3538187" style="z-index:4" onclick="return OE.Navigate.open(event,'CompanyInfo.php',1)">
					<div class="OESZ OESZ_DivContent OESZG_WEd35cad5137">
						<a class="OESZ OESZ_Link OESZG_WEd35cad5137 ContentBox" href="CompanyInfo.php">Company Info</a>
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
				<div id="WEc1700c63c6" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAH" style="z-index:1003">
					<div class="OESZ OESZ_DivContent OESZG_WEc1700c63c6">
						<img style="" src="WEFiles/Image/WEImage/Can%20in%20Creek-c0f95486.jpg" alt="" />
					</div>
				</div>
				<div id="WE455bbbfdb2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1007">
					<div class="OESZ OESZ_DivContent OESZG_WE455bbbfdb2">
						<span class="OESZ OESZ_Text OESZG_WE455bbbfdb2 ContentBox"><span style="font-size:45px;font-family:'Louis George Café';"><b>Reduce. Reuse. Refuse.</b></span></span>
					</div>
				</div>
				<div id="WE69908e2450" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default OECenterAH" style="z-index:1005">
					<div class="OESZ OESZ_DivContent OESZG_WE69908e2450">
						<div class="OESZ OESZ_Top OESZG_WE69908e2450"></div><div class="OESZ OESZ_Content OESZG_WE69908e2450"></div><div class="OESZ OESZ_Bottom OESZG_WE69908e2450"></div>
					</div>
				</div>
				<div id="WE14f764b8b2" class="BaseDiv RWidth OEWEText OESK_WEText_Default OECenterAH" style="z-index:1006">
					<div class="OESZ OESZ_DivContent OESZG_WE14f764b8b2">
						<span class="ContentBox"><span style="font-size:36px;">&nbsp; Recycling doesn't work.</span></span>
					</div>
				</div>
				<div id="WE4ca32ee2f5" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:1009">
					<div class="OESZ OESZ_DivContent OESZG_WE4ca32ee2f5">
						<span class="OESZ OESZ_Text OESZG_WE4ca32ee2f5 ContentBox"><span style="color:rgb(255, 255, 255);font-size:65px;">_</span><br /></span>
					</div>
				</div>
				<div id="WE5dae7945f8" class="BaseDiv RWidth OEWEText OESK_WEText_Default OECenterAH" style="z-index:1008">
					<div class="OESZ OESZ_DivContent OESZG_WE5dae7945f8">
						<span class="ContentBox"><span style="font-size:18px;">Yes, it's the sad truth. Recycling just doesn't work. Countless studies have confirmed this and I'm sure even you can see why. Remember when you threw away that bottle instead of recycling it, just because it was inconvenient?&nbsp;<br /> &nbsp;<br /><b> No shame. We've all been there.&nbsp;<br /></b> &nbsp;<br /> The current system is broken, relying on consumers and local government to deal with waste by-products and unsustainable packaging.&nbsp;But who created that waste in the first place? Shouldn't companies be responsible for the waste they create?&nbsp;<br /> &nbsp;<br /><b> That's why we are out to change the system.</b></span></span>
					</div>
				</div>
				<div id="WE5f29f170bd" class="BaseDiv RBoth OEWELinkButton OESK_WELinkButton_Default OECenterAH" style="z-index:1026" onclick="return OE.Navigate.open(event,'How%20It%20Started.php',1)">
					<div class="OESZ OESZ_DivContent OESZG_WE5f29f170bd">
						<a class="OESZ OESZ_Text OESZG_WE5f29f170bd ContentBox" href="How%20It%20Started.php">How it Started</a>
					</div>
				</div>
				<div id="WE7bac0c152a" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1004">
					<div class="OESZ OESZ_DivContent OESZG_WE7bac0c152a">
						<div class="OESZ OESZ_Top OESZG_WE7bac0c152a"></div><div class="OESZ OESZ_Content OESZG_WE7bac0c152a"></div><div class="OESZ OESZ_Bottom OESZG_WE7bac0c152a"></div>
					</div>
				</div>
				<div id="WEe07831e922" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1002">
					<div class="OESZ OESZ_DivContent OESZG_WEe07831e922">
						<div class="OESZ OESZ_Top OESZG_WEe07831e922"></div><div class="OESZ OESZ_Content OESZG_WEe07831e922"></div><div class="OESZ OESZ_Bottom OESZG_WEe07831e922"></div>
					</div>
				</div>
				<div id="WEf9c0fdbb7f" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default OECenterAH" style="z-index:1001">
					<div class="OESZ OESZ_DivContent OESZG_WEf9c0fdbb7f">
						<div class="OESZ OESZ_Top OESZG_WEf9c0fdbb7f"></div><div class="OESZ OESZ_Content OESZG_WEf9c0fdbb7f"></div><div class="OESZ OESZ_Bottom OESZG_WEf9c0fdbb7f"></div>
					</div>
				</div>
				<div id="WE5b90a0fab4" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:1020">
					<div class="OESZ OESZ_DivContent OESZG_WE5b90a0fab4">
						<span class="ContentBox"><span style="color:rgb(0, 0, 0);font-family:'Louis George Café';"><b>GET</b></span></span>
					</div>
				</div>
				<div id="WE54afd4b017" class="BaseDiv RWidth OEWEText OESK_WEText_Default OECenterAH" style="z-index:1015">
					<div class="OESZ OESZ_DivContent OESZG_WE54afd4b017">
						<span class="ContentBox"><span style="color:rgb(0, 0, 0);font-family:'Louis George Café';"><b>GET</b></span></span>
					</div>
				</div>
				<div id="WE57ee5ab26e" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:1010">
					<div class="OESZ OESZ_DivContent OESZG_WE57ee5ab26e">
						<span class="ContentBox"><span style="color:rgb(0, 0, 0);font-family:'Louis George Café';"><b>GET&nbsp;</b></span></span>
					</div>
				</div>
				<div id="WEf7303042b7" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:1021">
					<div class="OESZ OESZ_DivContent OESZG_WEf7303042b7">
						<span class="ContentBox"><span style="font-family:'Louis George Café';"><span style="color:rgb(0, 0, 0);"><b>&nbsp;</b></span><b style="color: rgb(255, 255, 255); ">INFO</b></span></span>
					</div>
				</div>
				<div id="WE4119bc6b96" class="BaseDiv RWidth OEWEText OESK_WEText_Default OECenterAH" style="z-index:1016">
					<div class="OESZ OESZ_DivContent OESZG_WE4119bc6b96">
						<span class="ContentBox"><span style="font-family:'Louis George Café';"><span style="color:rgb(0, 0, 0);"><b>&nbsp;</b></span><b style="color: rgb(255, 255, 255);">INVOLVED</b></span></span>
					</div>
				</div>
				<div id="WE97be8643ce" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:1013">
					<div class="OESZ OESZ_DivContent OESZG_WE97be8643ce">
						<span class="ContentBox"><span style="color:rgb(0, 0, 0);"><b>&nbsp;</b></span><b style="color: rgb(255, 255, 255); ">FAMILIAR</b></span>
					</div>
				</div>
				<div id="WE4140a1f354" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1022">
					<div class="OESZ OESZ_DivContent OESZG_WE4140a1f354">
						<span class="OESZ OESZ_Text OESZG_WE4140a1f354 ContentBox"><span style="color:rgb(255, 255, 255);font-size:65px;">_</span><br /></span>
					</div>
				</div>
				<div id="WE886e73b55d" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:1017">
					<div class="OESZ OESZ_DivContent OESZG_WE886e73b55d">
						<span class="OESZ OESZ_Text OESZG_WE886e73b55d ContentBox"><span style="color:rgb(255, 255, 255);font-size:65px;">_</span><br /></span>
					</div>
				</div>
				<div id="WE625a304d3a" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1011">
					<div class="OESZ OESZ_DivContent OESZG_WE625a304d3a">
						<span class="OESZ OESZ_Text OESZG_WE625a304d3a ContentBox"><span style="color:rgb(255, 255, 255);font-size:65px;"><b>_</b></span><br /></span>
					</div>
				</div>
				<div id="WEbe6a4aedc9" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:1023">
					<div class="OESZ OESZ_DivContent OESZG_WEbe6a4aedc9">
						<span class="ContentBox"><span style="color:rgb(255, 255, 255);font-family:'Louis George Café Light';font-size:18px;">Not ready to dive in?&nbsp;<br /> That's okay! <br /><br />Sign-up below for email notifications, education, and upcoming events.</span></span>
					</div>
				</div>
				<div id="WE6e90b85ad6" class="BaseDiv RWidth OEWEText OESK_WEText_Default OECenterAH" style="z-index:1018">
					<div class="OESZ OESZ_DivContent OESZG_WE6e90b85ad6">
						<span class="ContentBox"><span style="color:rgb(255, 255, 255);font-family:'Louis George Café Light';font-size:18px;">Ready to get started?&nbsp;<br /> &nbsp;<br /> Check out some of our on-going projects to push change in the right direction and ask companies to take responsibility.<br />&nbsp;<br />&nbsp;Make your voice heard!</span></span>
					</div>
				</div>
				<div id="WEdc238e9448" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:1012">
					<div class="OESZ OESZ_DivContent OESZG_WEdc238e9448">
						<span class="ContentBox"><span style="color:rgb(255, 255, 255);font-family:'Louis George Café Light';"><span style="font-size:18px;">Who are the main players?</span><br /><span style="font-size:13px;">&nbsp;</span><br /><span style="font-size:18px;">Learn more about the companies that are &nbsp;taking the initiative to make positive changes and those that still need to make more of an effort for sustainability.</span></span></span>
					</div>
				</div>
				<div id="WE2042280956" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1025">
					<div class="OESZ OESZ_DivContent OESZG_WE2042280956">
						<span class="OESZ OESZ_Text OESZG_WE2042280956 ContentBox"><span style="font-size:16px;color:rgb(255, 255, 255);font-family:'Louis George Café Light';">An example of a correct email looks like this <b>characters@characters.domain</b></span></span>
					</div>
				</div>
				<div id="WEb9a6133082" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:1024">
					<div class="OESZ OESZ_DivContent OESZG_WEb9a6133082">
						<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add user Form</title>
</head>
<body>
<form action="Contact.php" method="post">
<!--	<p>
        <label for="ID">userID:</label>
        <input type="text" name="i_d" id="id">
    </p>
	<p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
	<p>
        <label for="username">Username:</label>
        <input type="text" name="user_name" id="username">
    </p>
	<p>
        <label for="password">Password:</label>
        <input type="text" name="pass_word" id="password">
    </p>
-->
	 <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>


					</div>
				</div>
				<div id="WE9577314c29" class="BaseDiv RWidth OEWELinkButton OESK_WELinkButton_Default OECenterAH" style="z-index:1019" onclick="return OE.Navigate.open(event,'Get%20Involved.php',1)">
					<div class="OESZ OESZ_DivContent OESZG_WE9577314c29">
						<a class="OESZ OESZ_Text OESZG_WE9577314c29 ContentBox" href="Get%20Involved.php"><span style="font-family:'Louis George Café';"><b>Take Action Now!</b></span></a>
					</div>
				</div>
				<div id="WEaba98f7bec" class="BaseDiv RBoth OEWELinkButton OESK_WELinkButton_Default" style="z-index:1014" onclick="return OE.Navigate.open(event,'CompanyInfo.php',1)">
					<div class="OESZ OESZ_DivContent OESZG_WEaba98f7bec">
						<a class="OESZ OESZ_Text OESZG_WEaba98f7bec ContentBox" href="CompanyInfo.php"><span style="font-family:'Louis George Café Light';"><b>Learn More!</b></span></a>
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
				<div id="WE9000cd6dd0" class="BaseDiv RNone OEWEImage OESK_WEImage_Default OE_ActiveLink" style="z-index:1">
					<div class="OESZ OESZ_DivContent OESZG_WE9000cd6dd0 OE_ActiveLink">
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