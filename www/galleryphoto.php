<?php
	if(!isset($_GET['photo'])) 
	{
		header("Location: gallery.php");
		exit;
	}
	
	require('_includes/setup.php');
	require('_includes/gallerysetting.php');
	$pagetitle = 'Gallery Photo';
	$pagekeywords = '';
	$pagedesc = '';
	
	
$photoheader = array(0=>'No Label Needed');
	
	$photoheader[1] = '';
	$photoheader[2] = '';
	$photoheader[3] = '';
	$photoheader[4] = '';
	$photoheader[5] = '';
	$photoheader[6] = '';
	$photoheader[7] = '';
	$photoheader[8] = '';
	$photoheader[9] = '';
	$photoheader[10] = '';
	$photoheader[11] = '';
	$photoheader[12] = '';
	
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
	  $photoid = addslashes($_GET['photo']); //DO NOT EDIT
	  $nextphoto = 0;
	  $prevphoto = 0;
	  
	  //Set Page Display
		$page = 1;
		if(isset($_GET['page']) && is_numeric($_GET['page'])) {
			$page = addslashes($_GET['page']);
		}
	  
	  //Set Last Photo
	  if($photoid != TOTALPHOTOS) {
	  		$nextphoto = 1;
		}
		
		
	   //Set First Photo
	  if($photoid > '1') {
	  		$prevphoto = 1;
		}
	?>
   	  <h1><?=setheader($page,'photo') . " Photo ". resetphotocount($page,$photoid)?></h1>
   		<img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" /> 
        </div>

   <div align="center">
 
    		<table border="0" width="90%" id="table2" cellspacing="0" cellpadding="0">
					<tr>
						<td>
                        <div align="center">
        <?=($prevphoto != 0? '<a href="'.$_SERVER['PHP_SELF'].'?&photo='.($photoid - 1).'&page='.checkpage($page,$photoid,'prev').'"><b>&lt; Prev</b></a>': '&nbsp;')?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=($photoid+1 != TOTALPHOTOS ? '<a href="'.$_SERVER['PHP_SELF'].'?&photo='.($photoid + 1).'&page='.checkpage($page,$photoid,'next').'"><b>Next &gt;</b></a>': '&nbsp;')?>
    </div>
    <hr>
      <br />
      <div align="center">
                <?=($photoid+1 != TOTALPHOTOS ? '<a href="'.$_SERVER['PHP_SELF'].'?&photo='.($photoid + 1).'&page='.checkpage($page,$photoid,'next').'"><img border="0" src="'.LARGEDIR.IMAGECONTENT.$photoid.'.jpg"/></a>': '<img border="0" src="'.LARGEDIR.IMAGECONTENT.$photoid.'.jpg"/>')?>
                <br /><br />
                <?php		
         foreach($photoheader as $key => $value)
			{
				if($key == $photoid)
					{
					echo "<span class=\"photolabel\">".$value."</span>" ;
					}
			}
				?> 
                <br><br />
                <hr>
                
                <br />
                <?='<a href="gallery.php?&page='.$page.'">Back to Gallery</a>'?>
                <br><br>
      </div>
                      
            
   
                        
                        
                        </td>
					</tr>
	  </table>
      <br />
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
