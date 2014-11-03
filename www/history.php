<?php
	require('_includes/setup.php');
	$pagetitle = 'History of the Friends';
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
	}?>

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
   	  	<h1>History of Friends of Verde River Greenway</h1>
   			<img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" />
			</div>

			<div id="content-left">
      	During the spring of 2007, some long-time river activists wanted to take a more "hands-on" approach to
				protect the longest free-flowing stream in Arizona, the Verde River. At the same time, Arizona State Parks
				was seeking a non-governmental partner to assist with conservation and public outreach efforts to support
				the Verde River Greenway.  Friends of Verde River Greenway emerged as an affiliate of Arizona State Parks
				Foundation committing to river restoration and enhancement projects as well as introductory canoe trips on
				the river. In partnership with other environmental and civic organizations, the Friends conducted regular
				weekend volunteer projects that protect and enhance this delicate riparian corridor while promoting stewardship
				in the community.
				<br /><br />
				In late summer of 2009, with the assistance of the Arizona State Parks Foundation and the Verde Watershed
				Association, the Friends embarked on a course to build capacity within our organization and expand community
				participation in support of our mission.
				<br /><br />
				In 2010 the Walton Family Foundation provided funding for the development of the Verde River Cooperative Invasive
				Plant Management Plan (CIPMP), a five-year plan that outlines goals to manage invasive species while supporting
				our local communities both socially and economically. FVRG was a significant contributor to the plans development.
				<br /><br />
				In December, 2011, FVRG was established as a 501 (c) 3 and became independent of Arizona State Parks Foundation.
				FVRG continues its close partnership with Dead Horse Ranch State Park and the Verde River Greenway State Natural Area.
				<br /><br />
				In early 2012, with funding from a Walton Family Foundation grant, FVRG hired its first employees and took on the
				leadership role in the Verde Watershed Restoration Coalition (VWRC) a public/private partnership charged with
				implementing CIPMP.
      	<br /><br /><br />

      	<div align="center"><img src="images/history-verde-river.jpg" width="623" height="139" alt="Friends of the Verde River Greenway" />
				</div>

      	<br />
    	</div>  <!-- Close Content Left Box-->

		<div id="content-right">
    	<div id="event-box">
      	<img src="images/directors-top.jpg" width="244" height="31" />

        <div id="event-txt">
          <h3>The Officers:</h3>
            &nbsp;&nbsp;&nbsp;&nbsp; Chip Norton, President<br />
            &nbsp;&nbsp;&nbsp;&nbsp; Tony Gioia, Vice-President<br />
            &nbsp;&nbsp;&nbsp;&nbsp; Harry Sweet, Treasurer<br />
            &nbsp;&nbsp;&nbsp;&nbsp; Peggy Chaikin, Secretary<br />
            <br /><br />
            <hr /><br />
          <h3>Members:</h3>
            &nbsp;&nbsp;&nbsp;&nbsp; Denise Lerette<br />
            &nbsp;&nbsp;&nbsp;&nbsp; Kim Schonek<br />
						&nbsp;&nbsp;&nbsp;&nbsp; Marsha Foutz<br />
            &nbsp;&nbsp;&nbsp;&nbsp; Bob Rothrock<br />
            &nbsp;&nbsp;&nbsp;&nbsp; Tony Gioia<br />
            &nbsp;&nbsp;&nbsp;&nbsp; Steven "Max" Castillo<br />
        </div>
        	<img src="images/event-bottom.jpg" width="244" height="19" />
    	</div> <!-- Close Event Box 1 Box-->
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
