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
				Friends of Verde River Greenway (FVRG) is a 501(c) 3 non-profit organization with a mission
				to restore, preserve and promote the natural, cultural, scenic and recreational resources of
				the Verde River and its tributaries. Our work is dependent on the participation and support of
				the community of the Verde Valley and beyond. Please support FVRG by making a tax-deductible donation
				by clicking below. Your donations will go to support our work throughout the Verde Watershed.
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
						<img alt="Donate Now" border="0" src="images/FVRGDonateNowButton2.jpg" />
					</a>

					<br />

					<a href="https://co.clickandpledge.com/?wid=93097" target="-blank">
						<img alt="Donate Now" border="0" src="images/VeteransDayDonateButton2.jpg" />
					</a>

				<br />

				<div id="amznCharityBanner" style="position: relative">
					<div>
						<a href="http://smile.amazon.com/ch/45-2927355">
							<img src='https://d1ev1rt26nhnwq.cloudfront.net/ccmtblv2.png' id="banner" style="border-style: none;" />
						</a>
					</div>
					<table style="position: relative; text-align: center; width: 300px; top: 97px; height: 65px; vertical-align: middle">
						<tr>
							<td style="vertical-align: middle">
								<div style="max-height: 54px; overflow: hidden; padding-left: 10px; padding-right: 10px;">
									<span style="font-family: Arial; font-size: 26px; line-height: 26px;" class="charityNameSpan">Friends Of Verde River Greenway</span>
								</div>
							</td>
						</tr>
					</table>
				</div>

				</center>
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
