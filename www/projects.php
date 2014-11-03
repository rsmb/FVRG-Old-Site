<?php
	require('_includes/setup.php');
	$pagetitle = 'Projects';
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
   	  				<h1>Friends of Verde River Greenway Projects</h1>
   						<img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" />
        			<p>Pick out a project and join us!  It is fun and rewarding work!</p>
					</div>

    			<div id="content-left">

    					<div>
      						<img src="images/project1.jpg" alt="River Restoration and Enhancement" width="206" height="156" border="0" align="top" style="float:left; margin-right:12pt; margin-bottom:8pt"/>
     							<strong class="photolabel">Riparian Habitat Restoration</strong>
									<br />
									Through its partnership in the Verde Watershed Restoration Coalition (VWRC), FVRG works in collaboration with
									partners including pubic land managers, private landowners and other conservation organizations, to plan and
									implement riparian habitat improvement projects throughout the Verde Watershed.  During the last three years,
									this project has removed 100,000�s of thousands of invasive plants on private and public land throughout the
									Verde Watershed. To learn more click here:
									<a href="http://verdewrc.org/" target="_blank">http://verdewrc.org/</a>
									<br />
        			</div>

							<br /><br /><br /><br />

							<div>
									<img src="images/project2.jpg" alt="River Restoration and Enhancement" width="206" height="156" border="0" align="top" style="float:left; margin-right:12pt; margin-bottom:8pt"/>
     							<strong class="photolabel">Invasive Tree Removal</strong> (<a href="invasives.php">read more</a>)
									<br />
        					Amongst the invasive plants along the Verde River, four are seen as the biggest  threat to riparian native plants.
									The <a href="PDFs/Tamarisk.pdf" target="_blank">Tamarisk</a> (salt cedar),
									<a href="PDFs/Ailanthus Altissima.pdf" target="_blank">Alanthus Altissimus</a> (tree of heaven),
									<a href="PDFs/Arundo Donax.pdf" target="_blank">Arundo Donax</a> (giant reed) and the
									<a href="PDFs/RUSSIAN OLIVE.pdf" target="_blank">Russian Olive</a> have incredible abilities to outcompete
									Fremont Cottonwoods, Gooding Willows, and other dominant native species.
									<br />
      				</div>

        			<br /><br /><br /><br />

  						<div>
      						<strong class="photolabel"><img src="images/trail.jpg" alt="River Restoration and Enhancement" width="206" height="156" border="0" align="top" style="float:left; margin-right:12pt; margin-bottom:8pt"/>Boots on the Ground Volunteer Activities</strong>
									<br />
									Through our partnership with Dead Horse Ranch State Park and other Verde Valley municipalities, FVRG volunteers help local land managers improve and maintain habitat along the Verde River Greenway. <br /><br />
									Projects have included maintaining existing and developing trail systems increasing the public�s access to the Verde River and its lush riparian habitat. Friend�s volunteers have also contributed to the formation of paddle trails, giving residents and visitors a unique vantage point, from the river, to experience the Verde River Greenway.<br /><br />
									Our volunteer involvement with invasive plant removal has also crucial to ensuring that the Verde River Greenway is a health environment for wildlife and people alike.
									<br />
      				</div>

    			</div>  <!-- Close Content Left Box-->

    			<div id="content-right">

    					<?php include ("_includes/eventbox1.php"); ?>

        			<div align="center" style="margin-bottom:14pt; margin-top:10pt"><img src="images/sidebar-photo2.jpg" width="240" height="131" alt=" habitat in the Verde Valley" />
							</div>

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
