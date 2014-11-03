<?php

	require('_includes/setup.php');

	$pagetitle = 'Contact Us';

	$pagekeywords = '';

	$pagedesc = '';

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

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



<div id="page-top"><img src="images/bird-top.jpg" alt="Arizona&rsquo;s last free-flowing rivers" width="359" height="63" border="0" align="top" /></div>



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

   	  <h1>&quot;AlterNATIVE Plant Expo&quot; at Verde River Growers</h1>

   		<img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" /> 

      </div>

    <div id="content-left">

    	<div>

                <p><img src="images/plant-expo-big.jpg" alt="" width="251" height="169" hspace="15" align="left" />Just in time for spring planting and Mother’s Day! The Verde Natural Resource Conservation District (NRCD) is pleased to announce its second annual “AlterNATIVE Plant Expo” at Verde River Growers on:</p>
                <p> <span class="bold">Saturday, May 5, 9:00 am-4:00 pm<br />
                </span>Verde River Growers<br />
                2613 Rocking Chair Rd., Cottonwood.</p>
                <p><br />
                Expanding on last year’s success, this year’s Expo will include classes, music, an art activity, vendor booths, and rain barrels for sale. Classes include:                </p>
                <p>9 am: Verde River Growers’ Shaun Seymond -- “Native Plants for 2012”                <br />
                  10 am: Cottonwood Mayor Diane Joens – “Community garden”
                  <br />
                  11 am: USDA’s Natural Resources Conservation Service – Kresta Faaborg -- 			“Know What You’ve Got” Backyard Inventory
                  Noon – <br />
                  1 pm: Nursery Tour
                  1 pm: Verde NRCD’s Chris Jensen -- “Impact of Invasive Plants”
                  <br />
                  2 pm: UA Extension’s Jeff Schalau -- “Wildlife In Your Garden: Friend or Foe?”                </p>
                <p><span class="bold">Rain barrels for sale</span>, only $30.00 each or 2 for $50.00. </p>
                <p>Local artist Joan Bourque will be on hand all day to direct a children’s art activity to decorate pottery for Mother’s Day. Also, Cottonwood Middle School students have created trivets decorated with native plants for sale. All proceeds from the trivets will go to CMS for art education programs.</p>
                <p> <span class="bold">Live acoustical music</span>: Hank Levine 9 am –noon and Pam Costello with Wendy Ferguson from noon – 2 pm.                </p>
                <p><span class="bold">Numerous vendors</span> will be on hand to answer questions about sustainability and related topics, including: Master Gardeners; Garden of Eden; Verde Food Council; Sedona Recycles; and Verde Valley Farmer’s Market. Refreshments and educational materials will be available from the Verde NRCD.  Verde River Growers will donate a portion of all native plant sales to the Verde NRCD’s Education Center.</p>
                <p> Invasive plants impact natural areas by fueling unnatural and destructive desert fires, displacing native vegetation, degrading wildlife habitat, depleting soil nutrients, increasing allergens, and altering natural water flows. Because as much as 70 percent of the water used by every individual is used outdoors, planting native species helps conserve scarce water resources in landscaping. Residents who incorporate water-efficient plants into their landscape will help to preserve water for future generations.
  <script language="JavaScript">safemail('','info','Email Us Today')</script>
                  
                  
                  
                  <br />
                </p>
      </div>

        <br /><br />

      <div align="center">

   	    <img src="images/contactimage.jpg" width="624" height="160" alt="Contact the VErde River Friends" />

       

        <div id="credit">Special thanks to Susan Beach of <a href="http://www.beachsonlocation.com/" target="_blank">Beach's on Location</a><br />

          for providing wonderful photos of the Verde River and Greenway.</div>

        <br />

      </div>

    </div>  <!-- Close Content Left Box-->

    

    <div id="content-right">

    

   	  <?php include ("_includes/eventbox2.php"); ?>

        

    

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

