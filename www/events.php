<?php

	require('_includes/setup.php');

	$pagetitle = 'Events';

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

   	  <h1>Verde River Greenway Events &amp; News</h1>

   		<img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" /></div>

    <div id="content-all">

      <h3><a name="event1" id="event1"></a>Clarkdale Sustainability Fair</h3>

      May 7, 2011 - 8 am to noon<br />

            <br />

      <img src="images/sustainability_large.jpg" alt="2011 Verde River Canoe Challenge" width="375" height="320" style="float:left; margin-right:6pt; margin-top:4pt; margin-bottom:20pt"/>

             <br />

             Free Event - Join neighbors and friends and have a bite to eat, dump some junk, explore new ideas, listen to music and visit with folks interested in taking care of Clarkdale and the Verde Valley.<br />
             <br />

               Town of Clarkdale<br />
               Town Hall Complex<br />
               39 N  Ninth Street
               <br />
 <br /><br /><br /><br /><br /><br /> <br /><br /><br /><br /><br /><br />

      <hr />

      <br /><br />

      <h3><a name="event2" id="event2"></a>invasive Species Removal</h3>

          May 14, 2011 8am to 11pm<br />

            <br />

      <img src="images/invasive.jpg" width="250" height="282" alt="" style="float:left; margin-right:6pt; margin-top:4pt; margin-bottom:20pt"/>

            <br /><br />
            <p>Friends of Verde  River Greenway are planning to revisit (again!) the entry area of Dead Horse  Ranch State Park on Saturday, May 14th to finally repel the persistent  &quot;trees of heaven.&quot;&nbsp; These trees  crowd out natives with their incredible fast growth patterns. We think we may  be finally have gotten a handle on them and can't wait to finish the job!</p>
            <p>Our project around  8 a.m. near the&nbsp; 10th Street bridge  entering Dead Horse Park. Look for a sign across from the ball fields. Bring  gloves, loppers (optional), and a water bottle. A machete would also be  helpful. Snacks and water for refilling bottles will be provided. Reply to this  message if you need more information.</p>
            <br /><br />

            <div class="clear-floats"></div>





      

    </div>  

    <!-- Close Content Left Box--><!-- Close Content Right Box-->

    

    

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

