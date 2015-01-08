<?php
	require('_includes/setup.php');
	$pagetitle = 'Partners and Links';
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
        <h1>Verde River Greenway Partners and Related Links</h1>
        <img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" /> 
      </div>
      <div id="content-left">
        <h2>Project Partners:</h2>
      <div style="padding-left:10pt">
        <img src="images/links-photo1.jpg" width="249" height="191" alt="Preserve Our Parks" style="float:right" />
        <a href="http://www.verderivervrca.org/" target="_blank">Verde River  Citizen&rsquo;s Alliance</a><br />
        <a href="http://www.verdestewards.org/" target="_blank">Stewards of Public Lands </a><br />
        <a href="http://www.vwa.org/" target="_blank">Verde Watershed Association</a><br />
        <a href="http://www.arizona.sierraclub.org/" target="_blank">Sierra Club,  Grand Canyon Chapter</a><br />
        <a href="http://www.grandcanyon.sierraclub.org/yavapai/" target="_blank">Sierra  Club, Grand Canyon Chapter, Yavapai Group</a><br />
        <a href="http://www.nps.gov/tuzi/index.htm" target="_blank">Tuzigoot  National Monument</a><br />
        <a href="http://www.fs.fed.us/r3/prescott/" target="_blank">Prescott  National Forest</a><br />
        <a href="http://www.fs.fed.us/r3/coconino/" target="_blank">Coconino  National Forest</a><br />
        <a href="http://www.azstateparks.com/parks/DEHO/index.html" target="_blank">Dead  Horse Ranch State Park</a><br />
        <a href="http://www.azstateparks.com/parks/veri/" target="_blank">Verde  River Greenway State Natural Area</a><br />
        <a href="http://www.friends-of-the-well.org/" target="_blank">Friends of the  Well</a> <br />
        <a href="http://www.co.yavapai.az.us/content.aspx?id=16036" target="_blank">Yavapai  County Community Restitution</a><br />
        <a href="http://www.azffa.org/" target="_blank">Mingus Union High School FFA</a><br />
        <a href="http://www.srpnet.com/community/volunteer.aspx" target="_blank">Salt  River Project Volunteers</a><br />
        <a href="http://www.aps.com/my_community/StoryArchive/StoryArchive_1.html" target="_blank">Arizona  Public Service Volunteers</a><br />
        <a href="http://www.livepositively.com/" target="_blank">Coca-Cola  Foundation</a><br />
        <a href="http://www.waltonfamilyfoundation.org/" target="_blank">Walton  Family Foundation</a>
      </div>
      <br /><br />
      <h2>Related Links:</h2>
      <div style="padding-left:10pt">
        <img src="images/links-photo2.jpg" alt="Friends of the Verde River" style="float:right; margin-right:2pt" />        
        <a href="http://www.verderiverinstitute.org/" target="_blank">Verde River Institute</a><br />
        <a href="http://www.vwa.org/vrbp.htm" target="_blank">Verde River Basin  Partnership</a><br />
        <a href="http://www.verdevalleylpi.org/" target="_blank">Verde Valley Land  Preservation Institute</a><br />
        <a href="http://www.nature.org/" target="_blank">The Nature Conservancy</a><br />
        <a href="http://www.azstateparks.com/parks/FOVE/index.html" target="_blank">Fort  Verde State Historical Park</a><br />
        <a href="http://www.azstateparks.com/parks/JERO/index.html" target="_blank">Jerome  State Historical Park</a><br />
        <a href="http://www.azstateparks.com/parks/RERO/index.html" target="_blank">Red  Rock State Park</a><br />
        <a href="http://www.gf.state.az.us/" target="_blank">Arizona Game and Fish  Department</a><br />
        <a href="http://www.arizonaes.fws.gov/" target="_blank">US Fish and Wildlife  Service</a><br />
        <a href="http://www.azpaddlers.com/" target="_blank">Central Arizona  Paddlers</a><br />
        <a href="http://www.prescottpaddler.com/" target="_blank">Prescott Paddlers</a><br />
        <a href="http://www.nazaudubon.com/" target="_blank">Northern Arizona  Audubon Society</a><br />
        <a href="http://www.friendsoftheforestsedona.org/" target="_blank">Friends  of the Forest</a><br />
        <a href="http://www.prescottcreeks.org/" target="_blank">Prescott Creeks  Preservation</a><br />
        <a href="http://www.cwagaz.org/" target="_blank">Citizens Water Advisory  Group</a><br />
        <a href="http://www.co.yavapai.az.us/Content.aspx?id=20440" target="_blank">Yavapai  County Trails Committee </a><br />
        <a href="http://www.visitcampverde.com/" target="_blank">Camp Verde Chamber  of Commerce</a><br />
        <a href="http://www.cottonwoodchamberaz.org/" target="_blank">Cottonwood  Chamber of Commerce</a><br />
        <a href="http://www.clarkdalechamber.com/" target="_blank">Clarkdale Chamber  of Commerce</a><br />
        <a href="http://www.jeromechamber.com/" target="_blank">Jerome Chamber of Commerce</a><br />
        <a href="http://www.co.yavapai.az.us/content.aspx?id=20562" target="_blank">Yavapai  County Water Advisory Committee</a>
      </div>
      <br /><br />
      <h2>Riparian Community Partners:</h2>
      <div style="padding-left:10pt">
        ADWR- ARIZONA DEPARTMENT OF WATER RESOURCES<br />
        Information about water supply and conservation.<br />
        <a href="http://www.azwater.gov">azwater.gov</a>
        <br /><br />
        ARIZONA RIPARIAN<br />
        Science-based education and conservation.   Based in Phoenix with some events in our region.<br />
        <a href="http://www.azriparian.org">azriparian.org</a>
        <br /><br />
        AZ WET/ ADWR ARIZONA DEPARTMENT OF WATER RESOURCES<br />
        Education of students through workshops and creation of curriculum guides for teachers and students.<br />
        <a href="mailto:AZWET-Yavapai@cals.arizona.edu">AZWET-Yavapai@cals.arizona.edu</a>
        <br /><br />
        CWAG- CITIZEN'S WATER ADVOCACY GROUP<br />
        representatives meet at rotating locations throughout Yavapai County to discuss Verde River resource  issues.<br />
        <a href="http://www.cwagaz.org">cwagaz.org</a>
        <br /><br />
        COCONINO FOREST SERVICE<br />
        Information on white water recreation  and invasive plant removal on  Wild and Scenic Verde River. <br />      
        928-203-5203
        <br /><br />
        COTTONWOOD MUNICIPAL WATER<br />
        Water conservation for household use. Water reclamation (sell nitrate-rich reclaimed water - cheap!!!)<br />
        <a href="http://www.cottonwoodaz.gov">cottonwoodaz.gov</a>
        <br /><br />
        DEAD HORSE RANCH STATE PARK<br />
        FORT VERDE STATE PARK<br />
        JEROME STATE PARK<br />
        RED ROCK STATE PARK<br />
        SLIDE ROCK STATE PARK<br />
        Our state parks are showcase our lush natural environment for both locals and visitors. explore. Parks host 
        environmental education events such as nature walks and Verde River Days and Verde  Birding and Nature Fest. 
        and Fort Verde Days.<br />
        <a href="http://www.azstateparks.com">azstateparks.com</a>
        <br /><br />
        FRIENDS OF VERDE RIVER GREENWAY<br /> 
        Volunteer organization focused on "hands on" projects such as removing invasive plants and cleaning up waste 
        along Verde River and tributaries. Projects generally on Saturdays.<br />
        <a href="http://www.verderivergreenway.org">verderivergreenway.org</a>
        <br /><br />
        KEEP SEDONA BEAUTIFUL<br />
        Committed to protect and sustain the unique scenic beauty and natural environment of the Greater Sedona area.
          Sponsor speakers and projects. <br />
        <a href="http://www.keepsedonabeautiful.org">keepsedonabeautiful.org</a>
        <br /><br />
        NATIONAL PARK SERVICE<br />
        Education opportunities for children.<br />
        <a href="mailto:debdecovis@nps.gov">debdecovis@nps.gov</a>
        <br /><br />
        TNC- THE NATURE CONSERVANCY<br />
        Conserving the lands and waters on which all life depends. Mapping of invasive plants, ditch efficiency improvements.<br />
        Kim Schonek- 928-717-2843     <a href="mailto:kschonek@tnc.org">kschonek@tnc.org</a>
        <br /><br />
        NORTHERN ARIZONA AUDUBON<br />
        Active in birding, conservation and education. Offers member meetings with guest speakers from September to May. 
        Fieldtrips are led by our volunteers year round. Conservation work below the rim in winter, Flagstaff outdoor work 
        during June-September.<br />
        <a href="http://www.northernarizonaaudubon.org">northernarizonaaudubon.org</a>
        <br /><br />
        SEDONA ADVENTURES<br />
        Commercial guided river trips and equipment rentals.<br />
        <a href="http://www.sedonaadventuretours.com">sedonaadventuretours.com</a>
        <br /><br />
        SIERRA CLUB- GRAND CANYON CHAPTER<br />
        Hands on conservation. Involved in collecting water samples and making field observations  
        tracking the impacts to their rivers and advocate for actions to protect them. Organizes 
        riparian area trash removal projects. <br />
        <a href="mailto:steve.pawlowski@sierraclub.org">steve.pawlowski@sierraclub.org</a>
        <br /><br />
        SRP- SALT RIVER PROJECT<br />
        Controls water rights of most of the Verde Basin. Knowledgeable and active on many riparian issues.<br />
        <a href="http://www.srpnet.com">srpnet.com</a>
        <br /><br />
        STEWARDS OF PUBLIC LANDS<br />
        Trash removal from public lands throughout the region. Because of success over the years, 
        Stewards have been moving towards smaller projects.<br />
        <a href="http://www.verdestewards.org">verdestewards.org</a>
        <br /><br />
        SUSTAINABLE ARIZONA<br />
        Provide resources on a range of topics for green living, energy efficiency, water conservation, 
        natural systems, and sustainable business practices. Organizes "Verde Drinks"  which is held at 
        locations around the Verde Valley every 4th Monday of the month. Other events are held on an irregular basis.<br />
        <a href="http://www.sustainablearizona.org">sustainablearizona.org</a><br>
        <a href="http://www.verdeguide.org">verdeguide.org</a>
        <br /><br />   
        SUSTAINABLE CLARKDALE<br />
        Creating  the Verde accessibility for public from Tapco to Dead Horse Ranch State Park and sustainable energy  projects.<br />
        <a href="http://www.clarkdalesustainabilitypark.org">clarkdalesustainabilitypark.org</a>
        <br /><br />
        TAMARISK COALITION<br />
        Non-profit alliance that works to remove invasive plants in riparian areas throughout the U.S.<br />
        <a href="http://www.tamariskcoalition.org" target="_blank">tamariskcoalition.org</a>
        <br /><br />
        VERDE BIRDING AND NATURE FESTIVAL<br />
        Four day festival provides a unique recreational experience to anyone interested in the natural world 
        and fosters awareness of the importance of habitat for the enrichment of all life in the Verde Valley.  
        Guided hikes on land and water.<br />
        <a href="http://www.birdyverde.org" target="_blank">birdyverde.org</a>
        <br /><br />

        VNRCD- VERDE NATURAL RESOURCES CONSERVATION DISTRICT<br />
        Public education regarding natural resources. Public school and community-based education and events." 
        Neighbor helping neighbor" invasive plant removal program.  Meets 2nd Friday 9 am.@ Camp Verde Chamber 
        of Commerce  <br />
        Contact:  (928) 554- 0463         
        <a href="http://www.verde.org">verde.org</a>
        <br /><br />

        VRBP- VERDE RIVER BASIN PARTNERSHIP <br />
        Facilitates collaboration, education, outreach and scientific research about water resources with our watershed. 
        Public discussion. Quarterly meetings.<br />
        <a href="http://www.vrbp.org" target="_blank">vrbp.org</a>
        <br /><br />

        VRCA VERDE RIVER CITIZENS ALLIANCE<br />
        Preservation and continued health of the Verde River and its watershed. Focus on water conservation techniques. 
        Introduction to the river by canoe trips and river walks. Occasional speakers. <br />
        <a href="http://www.verderivervrca.org" target="_blank">verderivervrca.org</a>
        <br /><br />

        VERDE RIVER INSTITUTE<br />
        Committed to facilitating and implementing a "collective impact" strategy for the organizations working 
        to see that the Verde River in central Arizona retains flows to support healthy ecosystems.<br />
        <a href="http://www.verderiverinstitute.org" target="_blank">verderiverinstitute.org</a>
        <br /><br />

        VVLP - VERDE VALLEY LAND PRESERVATION<br />
        Develops and implements strategies to preserve and enhance open space in the Verde Valley, maintaining 
        a balance between natural and human communities and encouraging responsible growth and economic prosperity.<br />
        <a href="http://www.verdevalleylpi.org" target="_blank">verdevalleylpi.org</a>
        <br /><br />

        VERDE VALLEY REGIONAL ECONOMICS ORGANIZATION<br />
        Works toward building a regional collaborative, sustainable economic prosperity. Provides comprehensive 
        economic development expertise, tools, marketing and outreach.<br />
        <a href="http://www.vvreo.com" target="_blank">vvreo.com</a>
        <br /><br />
 
        VWRC - VERDE WATERSHED RESTORATION COALITION <br /> 
        Active in enlisting property owners and public lands along the Verde River and tributaries in mapping 
        and removal of invasive species using hired Veterans and Youth Corps.<br />
        <a href="http://www.verdewrc.org" target="_blank">verdewrc.org</a>
        <br /><br />

        VWA - VERDE WATERSHED ASSOCIATION<br />
        Voluntary association of members of the watershed communities to resolve conflicts and promote cooperative 
        use of the water resources. Promotes local initiative and control while using waters resources in a 
        sustainable productive way to avoid misuse or overuse.<br />
        <a href="http://www.VWA.org" target="_blank">VWA.org</a>
        <br /><br />

        USGS-  UNITED STATES GEOLOGICAL SURVEY<br />
        Manages water resources, quality, flow measure,  and scientific studies.<br />
        <a href="http://www.waterdata.usgs.gov" target="_blank">waterdata.usgs.gov</a>
        <br /><br />

    </div>  <!-- Close Content Left Box-->

    <div id="content-right">
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

