<?php

	require('_includes/setup.php');

	$pagetitle = 'Home';

	$pagekeywords = '';

	$pagedesc = '';

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link href="css/pageinfo2.css" rel="stylesheet" type="text/css" />



<?php include ("_includes/metatags.php"); ?>

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

</head>





<body>



<?php

$a_browser_data = browser_detection('full');

if ( $a_browser_data[0] == 'ie' && $a_browser_data[1] <= 6)

{

	echo "The site is designed for Microsoft Internet Explorer 7+. To download IE 7, please click <a href=\"http://www.microsoft.com/downloads/details.aspx?familyid=9AE91EBE-3385-447C-8A30-081805B2F90B&amp;displaylang=en\" target=\"_blank\">here</a>.<br><br>";

}

?>

<div id="page-container">

<div align="left"><img src="images/bird-top2.jpg" alt="Arizona&rsquo;s last free-flowing rivers" width="344" height="63" border="0" align="bottom" /></div>





    

	<div id="content-container">

   	  <img src="images/header.jpg" alt="Verde River Greenway" width="974" height="165" border="0" align="top" usemap="#home" />

   		<map name="home" id="home">

   		  <area shape="rect" coords="502,12,950,98" href="index.php" />

       	</map>

        

<div id="interface">

   	 	 <?php include ("_includes/interfacebar.php"); ?>

    </div>

    <div id="header">

    	<h1>Verde River Greenway</h1>

   		<img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" /><br />

        One of Arizona’s Last Free-Flowing Rivers 

   	  </div>

      <div class="clear-floats"></div>

    <div id="content-left">

      The Verde River, one of Arizona&rsquo;s last free-flowing rivers, sustains a large regional wildlife population as it flows through 36 miles of lush riparian habitat in the Verde Valley. This stretch of river is known as the Verde River Greenway.  The 3,300 foot elevation means mild temperatures for hiking along the Verde, canoeing, bird watching, picnicking, fishing, or just wading in the cool water.

      <br /><br /><br />

      <div id="flash-home"> 

        <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="583" height="276">

          <param name="movie" value="movies/flash-home2.swf" />

          <param name="quality" value="high" />

          <param name="wmode" value="opaque" />

          <param name="swfversion" value="6.0.65.0" />

          <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->

          <param name="expressinstall" value="Scripts/expressInstall.swf" />

          <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->

          <!--[if !IE]>-->

          <object type="application/x-shockwave-flash" data="movies/flash-home2.swf" width="583" height="276">

            <!--<![endif]-->

            <param name="quality" value="high" />

            <param name="wmode" value="opaque" />

            <param name="swfversion" value="6.0.65.0" />

            <param name="expressinstall" value="Scripts/expressInstall.swf" />

            <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->

            <div>

              <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>

              <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>

            </div>

            <!--[if !IE]>-->

          </object>

          <!--<![endif]-->

        </object>

      </div>

      <div id="mission-statement">

      		<h4>Mission Statement:</h4>

            Friends of Verde River Greenway restores, preserves and promotes the natural, cultural, scenic and recreational resources of the Verde River and its tributaries.
<br /><br />


      		<h4>Vision Statement:</h4>

            A healthy, resilient Verde Watershed that sustains free flowing rivers and streams, robust local economies and a rich quality of life for current and future generations.

      </div>

      Life along the river changes with each season, giving visitors a glimpse of great blue heron, black hawks, ducks, coyotes, raccoons, mule deer, beavers, frogs, turtles, snakes and toads. The Verde River and surrounding riparian corridor support nearly twenty threatened or endangered species including  southwestern bald eagles, southwestern willow flycatchers, and lowland leopard frogs.

      <br />

      <br />

        The most significant natural resource in the Greenway, besides the year-round flowing river, is the dense forest of riparian trees and shrubs along its riverbank. This Fremont's Cottonwood &amp; Gooding's Willow Riparian Gallery Forest is one of five remaining stands in Arizona and one of 20 such stands in the world.<br />

        <br /><br /><br />

        

        

        <h2>Friends of Verde River Greenway<br />

        </h2>

        <hr /><br />

        Friends of Verde River Greenway is a nonprofit, tax-exempt organization with the mission to preserve, enhance and promote the scenic, natural, historic, cultural and recreational resources of the Verde River Greenway.

        <br /><br />

        <strong>Core Values:</strong>

        <ul>

   	    <li><strong>Integrity</strong> – We commit to the principles of truth and honesty.  We are transparent and credible, ensuring public trust.</li>

            <br />

            <li><strong>Collaboration</strong> – We believe our work is accomplished through voluntary, inclusive partnerships and ideas which empower others to be committed and engaged.</li>

			<br />

            <li><strong>Sustainability</strong> – We are guided by long-term environmental stewardship and economic viability.</li>
            			<br />

            <li><strong>Respect</strong> – We honor the traditions and individual rights of our diverse community.</li>
            			<br />

            <li><strong>Work Ethic </strong> – We proactively engage in “boots on the ground” projects guided by sound conservation principles.</li>

      </ul>





    </div>  

    <!-- Close Content Left Box-->

    

    

    <div id="content-right">

      <?php include ("_includes/eventbox1.php"); ?>

        <?php include ("_includes/eventbox2.php"); ?> 

        <div align="center" style="margin-bottom:14pt; margin-top:10pt"><img src="images/sidebar-photo.jpg" width="240" height="131" alt=" habitat in the Verde Valley" /></div>  

		

        <?php include ("_includes/eventbox3.php"); ?>

    

    </div>  <!-- Close Content Right Box-->

    

    

  <div class="clear-floats"></div>

  

    <div id="interface-bottom-holder">

   	  <?php include ("_includes/interfacebar-bottom.php"); ?>

      

    </div>

    

    <div id="footer">

    <br />

    	

		<?php include ("_includes/footer.php"); ?>

	</div> <!-- Close Footer-->

  

</div> 

<!-- Close Content Holder Box-->

<div class="clear-floats"></div>

   

</div> <!-- Close Page Content Box-->

<div class="clear-floats"></div>



<script type="text/javascript">

<!--

swfobject.registerObject("FlashID");

//-->

</script>

</body>

</html>

