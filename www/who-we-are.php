<?php
	require('_includes/setup.php');
	$pagetitle = 'Who We Are';
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
				echo "The site is designed for Microsoft Internet Explorer 7+. To download IE 7, please click
					<a href=\"http://www.microsoft.com/downloads/details.aspx?familyid=9AE91EBE-3385-447C-8A30-081805B2F90B&amp;displaylang=en\"
					target=\"_blank\">here</a>.<br><br>";
			}
	?>

	<div id="page-top">
		<img src="images/bird-top.jpg" alt="Arizona&rsquo;s last free-flowing rivers" width="359" height="63" border="0" align="top" />
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

   	  <h1>Who We Are</h1>

   		<img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" />

    </div>

    <div id="content-left">

    	<div>

      <img src="images/whoweare-photo.jpg" alt="River Restoration and Enhancement" width="203" height="416" vspace="25"border="0" align="top" style="float:left; margin-right:12pt; margin-bottom:8pt"/>

      <p>The Board of Directors of Friends of Verde River Greenway are composed of representatives from several local non-profit organizations that  support  Verde River Greenway stewardship efforts.</p>

      <p><strong>President:</strong><br />

        Chip Norton</p>

      <p><strong>Vice-President:</strong><br />

        Tony Gioia</p>

              <p><strong>Treasurer:</strong><br />

        Harry Sweet</p>

      <p><strong>Secretary:</strong><br />
				Peggy Chaikin</p>

      <p><strong>Members:</strong><br />
        Denise Lerette<br />
        Kim Schonek<br />
        Marsha Foutz<br />
        Bob Rothrock<br />
        Steven &ldquo;Max&rdquo; Castillo</p>

      <br />

			<br />

			<h1>FVRG Annual Report</h1>

			<img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" />

				<p><a href="PDFs/FVRG Annual Report 2013.2014.pdf">Friends of Verde River Greenway 2013-2014 Annual Report (pdf)</a></p>

      </div>



        <br />

    </div>  <!-- Close Content Left Box-->



    <div id="content-right">



    	<?php include ("_includes/eventbox1.php"); ?>

        <div align="center" style="margin-bottom:14pt; margin-top:10pt"><img src="images/sidebar-photo2.jpg" width="240" height="131" alt=" habitat in the Verde Valley" /></div>



    </div>  <!-- Close Content Right Box-->





  <div class="clear-floats"></div>



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
