<?php

	require('_includes/setup.php');

	$pagetitle = 'Invasive Trees of the Verde River Greenway';

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

   	  <h1>Invasive Trees of the Verde River Greenway</h1>

   		<img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" /> </div>

    <div id="content-left">

      <img src="images/invasives.jpg" width="392" height="200" hspace="10" align="left" />Among the invasive plants along the Verde River, four are seen as the biggest  threat to riparian native plants. The <a href="PDFs/Tamarisk.pdf" target="_blank">Tamarisk</a> (salt cedar), <a href="PDFs/Ailanthus Altissima.pdf" target="_blank">Alanthus Altissimus</a> (tree of heaven), <a href="PDFs/Arundo Donax.pdf" target="_blank">Arundo Donax</a> (giant reed) and the <a href="PDFs/RUSSIAN OLIVE.pdf" target="_blank">Russian Olive </a>have incredible abilities to outcompete Fremont Cottonwoods, Gooding Willows, and other dominant native species. They contribute very  little in the way of quality habitat while using a tremendous amount of precious river water. This makes their removal an urgent need in the quest for a healthy river. Unlike other rivers such as the upper San Juan (crowded with Russian Olives), or the Little Colorado (completely dominated by Tamarisks), the Verde still has a healthy mix of vegetation. If action to retain a healthy ecosystem is done soon, there will be little need to revegetate areas where invasive removal has taken place. <br />
      <br />
      <p><strong>Everyone  who cares about the Verde can make a difference:</strong></p>
      <img src="images/invasives2.jpg" width="226" height="170" align="right" />
<ul>
        <li>Demonstration projects on invasive removal are ongoing. No experience is necessary. Contact  <a href="mailto:friendsvrg@gmail.com">friendsvrg@gmail.com</a> </li>
        <li>GPS mapping of invasive plants is ongoing. These maps will document the density and location of the pest species as well as our progress on their removal. No experience is necessary. Contact Anna Schrenk at  <a href="mailto:anna.schrenk@verdewrc.org">anna.schrenk@verdewrc.org</a> for more information.</li>
        <li>Property owners who wish to remove invasive plants from riparian property can contact Laura Jones at <a href="mailto:laura@verdewrc.org ">laura@verdewrc.org </a> </li>
        <li>Preserve the Verde�s water by finding ways to conserve water usage at your home or business.</li>
        <li>Stay informed about all upcoming local environmental events by watching our calendar. </li>
      </ul>
      

      <br />

    </div>  
    <!-- Close Content Left Box-->

    

    <div id="content-right">

    

    	<div id="event-box">

        	<img src="images/directors-top.jpg" width="244" height="31" />

            <div id="event-txt">

            <h3>The Officers:</h3>

              &nbsp;&nbsp;&nbsp;&nbsp; Chip Norton, President<br />

              &nbsp;&nbsp;&nbsp;&nbsp; Tony Gioia, Vice-President<br />

              &nbsp;&nbsp;&nbsp;&nbsp; Marsha Foutz, Co-Secretary<br />

              &nbsp;&nbsp;&nbsp;&nbsp; Peggy Chaikin, Co-Secretary<br />

              &nbsp;&nbsp;&nbsp;&nbsp; Diane Joens, Treasurer

              <br /><br />

              <hr /><br />

              <h3>Governing Council:</h3>

              &nbsp;&nbsp;&nbsp;&nbsp; Marsha Foutz<br />

              &nbsp;&nbsp;&nbsp;&nbsp; Peggy Chaikin<br />

              &nbsp;&nbsp;&nbsp;&nbsp; Jane Moore<br />

              &nbsp;&nbsp;&nbsp;&nbsp; Bob Rothrock<br />

              &nbsp;&nbsp;&nbsp;&nbsp; Tony Gioia<br />

              &nbsp;&nbsp;&nbsp;&nbsp; Diane Joens<br />

              &nbsp;&nbsp;&nbsp;&nbsp; Steven &ldquo;Max&rdquo; Castillo

          </div> 

        	<img src="images/event-bottom.jpg" width="244" height="19" />

        </div> <!-- Close Event Box 1 Box--> 

    

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

