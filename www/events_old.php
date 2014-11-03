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
      <h3><a name="event1" id="event1"></a>2011 Verde River Canoe Challenge</h3>
      March 26, 2011<br />
            <br />
             <img src="images/canoe-challenge-logo.jpg" alt="2011 Verde River Canoe Challenge" width="225" height="208" style="float:left; margin-right:6pt; margin-top:4pt; margin-bottom:20pt"/>
             <br />
             On Saturday, March 26 over 200 boaters are expected to  participate in the 2010 Verde River Canoe Challenge to be held on a ten-mile  stretch of the Verde River, just east of Camp    Verde, Arizona. This  is the eleventh year for the race that includes competitive races for canoes  and kayaks as well as recreational races for canoes, kayaks, and inflatable  kayaks.&nbsp; For more information, contact: <br /><br />
               Northern Arizona University, Parks and Recreation Management Program,  <br />Special Event Planning class, Dr. Charles Hammersley, <br />PO Box 15016, Flagstaff,  AZ 86011-5016<br />
               Phone: (928) 523-6655&nbsp;&nbsp;&nbsp; Fax: (928) 523-2275<br />
               E-mail: <a href="mailto:charles.hammersley@nau.edu">charles.hammersley@nau.edu</a>&nbsp;&nbsp;&nbsp; </p>
             <br /><br /><br /><br /><br /><br />
      <hr />
      <br /><br />
      <h3><a name="event2" id="event2"></a>2011 Verde Valley Birding and Nature Festival</h3>
          April 28-May 1, 2010<br />
            <br />
            <img src="images/event-birding.jpg" width="170" height="190" alt="2011 Verde Valley Birding and Nature Festival" style="float:left; margin-right:6pt; margin-top:4pt; margin-bottom:20pt"/>
            <br /><br />The annual Verde Valley Birding  and Nature Festival, the &quot;Birdy Verde&quot;, with emphasis on  bird-watching, is held each April. About 70 field trips are offered for the  four day event, many led by nationally recognized experts. Headquarters for the  festival is at Dead Horse Ranch, but events are held throughout the Verde Valley.&nbsp; For more information, go to <a href="http://www.birdyverde.org/" target="_blank">www.birdyverde.org</a> .<br /><br />
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
