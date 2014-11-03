<?php
	require('_includes/setup.php');
	require('_includes/gallerysetting.php');
	$pagetitle = 'Gallery';
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
    <?php
	    	//Gallery Code Start
	  
	  		//Set Photos To Display
			$page = 1;
			
			if(isset($_GET['page']) && is_numeric($_GET['page'])) {
				$page = addslashes($_GET['page']); 
			}

         ?>
   	  <h1>Verde River Greenway Gallery <?=$page?></h1>
   		<img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" /> 
        </div>
        <br />
    <div align="center">
            <table width="70%" border="0" cellpadding="4" cellspacing="4" bgcolor="#A08266" id="table2">
                  <tr >
                <?php
					$pagecount = $page * 12;
					
					for($x=0;$x<12;$x++)
					{
						if($page == 1)
						{
							$photoid = $x + $page;
						}
						else
						{
							$photoid = $x + ($page * 12) -12 + 1;
						}
						
						if($photoid < TOTALPHOTOS)
						{
						echo "<td align=\"center\" class=\"off\" onmouseover='className=\"on\"' onmouseout='className=\"off\"'><a href=\"galleryphoto.php?&photo=".$photoid."&page=".$page."\"> <img border=\"0\" src=\"".THUMDIR.IMAGECONTENT.$photoid.".jpg\" width=\"150\" height=\"112\" /></a></td>"."\n";
						
							//Check to see if 4 across and add a close line
							if($x == 3 || $x == 7)
							{
								echo "</tr>"."\n <tr>";
							}
						}
					}
	  			?>
                </tr>
</table>

			<table width="70%" border="0" cellpadding="4" cellspacing="4" id="table3">
              <tr>
	<td colspan="2" align="left" ><?=($page != 1? '<a href="'.$_SERVER['PHP_SELF'].'?&page='.($page - 1).'">Previous Gallery</a>': '&nbsp;')?></td>
	<td colspan="2" align="right" ><?=($pagecount+2 < TOTALPHOTOS ? '<a href="'.$_SERVER['PHP_SELF'].'?&page='.($page + 1).'">Next Gallery</a>': '&nbsp;')?>

            <br /><br />
            </td>
            </tr>
            </table>
            </div>
            
            <br /><br />
  
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
