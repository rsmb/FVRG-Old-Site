<?php
	require('_includes/setup.php');
	$pagetitle = 'Donate';
	$pagekeywords = '';
	$pagedesc = '';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="css/pageinfo.css" rel="stylesheet" type="text/css" />
	<?php include ("_includes/metatags.php"); ?>
</head>

<body>

	<?php
		$a_browser_data = browser_detection('full');
		if ( $a_browser_data[0] == 'ie' && $a_browser_data[1] <= 6)
			{
				echo "The site is designed for Microsoft Internet Explorer 7+. To download IE 7, please click <a href=\"http://www.microsoft.com/downloads/details.aspx?familyid=9AE91EBE-3385-447C-8A30-081805B2F90B&amp;displaylang=en\" target=\"_blank\">here</a>.<br><br>";
			}
	?>

	<div id="page-top"><img src="images/bird-top.jpg" alt="Arizona&rsquo;s last free-flowing rivers" width="359" height="63" border="0" align="top" />
	</div>

	<div id="page-container">
		<div id="lefttop">
			<img src="images/leftuppercorner.jpg" alt="Friends of Verde River " width="19" height="62" border="0" align="bottom" />
		</div>

		<div id="content-container">
			<img src="images/header.jpg" alt="Verde River Greenway" width="974" height="165" border="0" align="top" usemap="#home" />
			<map name="home" id="home">
				<area shape="rect" coords="502,12,950,98" href="index.php" />
			</map>

			<div id="interface">
				<?php include ("_includes/interfacebar.php"); ?>
			</div>

			<div id="header">
				<h1>Donate to the Friends of Verde River Greenway</h1>
				<img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" />
			</div>

			<div id="content-left">
				Friends of Verde River Greenway (FVRG) is a 501(c) 3 non-profit organization dedicated to the
				preservation, enhancement and promotion of the scenic, natural, historic, cultural, and
				recreational resources of the Verde Watershed. Our work is dependent on the participation and
				support of the community of the Verde Valley and beyond. Please support Friends by making a
				tax-deductible donation by clicking the Donate Now button below. Your donations will go toward
				supporting our work in the Verde Watershed.
				<br />
				<br />
				Thank you for your support!
				<br />
				<br />

				<center>
					<!-- Razoo Donate link
						<a href="http://www.razoo.com/story/Friends-Of-Verde-River-Greenway?referral_code=share" target="-blank">
							<img alt="Donate Now" border="0" src="http://www.razoo.com/assets/brands/1/donate_now_narrow.png" />
						</a>
					-->
					<a href="https://co.clickandpledge.com/?wid=91656" target="-blank">
						<img alt="Donate Now" border="0" src="images/FVRGDonateNowButton.jpg" />
					</a>

					<a href="https://co.clickandpledge.com/?wid=93097" target="-blank">
						<img alt="Donate Now" border="0" src="images/VeteransDayDonateButton.jpg" />
					</a>

				</center>

				<br />

			</div>  <!-- Close Content Left Box-->

			<div id="content-right">
				<?php include ("_includes/eventbox1.php"); ?>
			</div>  <!-- Close Content Right Box-->

			<div class="clear-floats">
			</div>

			<div id="interface-bottom-holder">
				<?php include ("_includes/interfacebar-bottom.php"); ?>
			</div>

			<div id="footer">
				<br />
				<?php include ("_includes/footer.php"); ?>
			</div> <!-- Close Footer-->
		</div> <!-- Close Content Holder Box-->
	</div> <!-- Close Page Content Box-->
</body>
</html>
