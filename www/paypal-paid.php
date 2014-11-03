<?php
	require('_includes/setup.php');
	$pagetitle = 'Member Purchased';
	$pagekeywords = '';
	$pagedesc = '';

	 	if(!isset($_POST['receipt_id']))
    {
		header("Location: become-member.php");
  	}
	else
	{
		//Update User DB
		$level = ($_POST['mc_gross_1'] == '10.00' ? '2' : '1');
		$paypal = "Receipt Number: ".$_POST['receipt_id']. " **** Verify Sign: ".$_POST['verify_sign']. " **** Payer ID: ".$_POST['payer_id']. " **** Membership Level: ".$_POST['item_name1'];
		
		mysql_query("UPDATE members SET ticketdate = NOW(), purchased = 'Yes', paypal = '".$paypal."' WHERE id= '".$_POST['option_selection3_1']."'");
		
		//Get User Record
		$query = "SELECT * FROM members WHERE id='".$_POST['option_selection3_1']."'";
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
		$name = $row['name']. " " . $row['lname'];
		$email = $row['email'];
		
		//Email Admin
		 			$from = "DoNotResponde@verderivergreenway.org"; 
					$subject = "New Membership Purchased"; 
					$headers = "From: $from";				
					$message ="Here is your notice that a member has purchased a membership.\n
						
Members Name: $name \n
Membership Receipt: 
$paypal
"; 
			 
					//Send the email
					$mail_sent1 = mail(ADMIN_EMAIL, $subject, $message, $headers );
	}

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
   	  <h1>Become a Member of the Friends of Verde River Greenway</h1>
   		<img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" /> </div>
    <div id="content-left">
      <h2>Member Application Purchased:</h2>
      
    <br /><br />
         Thank you for your membership donation to Friends of Verde River Greenway.  As an affiliate of Arizona State Parks Foundation, Friends of Verde River Greenway is a tax-exempt organization and the Taxpayer Identification Number is 20-1196825.  Besides a great quarterly newsletter full of Verde River Greenway related activities and information, membership in the Friends of Verde River Greenway allows one to be more informed on issues and items directly related to the Verde River Greenway.<br />
          <br />
          
<br />
      <br />
    </div>  <!-- Close Content Left Box-->
    
    <div id="content-right">
    
	  <?php include ("_includes/eventbox1.php"); ?>
      <div align="center" style="margin-bottom:14pt; margin-top:10pt"><img src="images/sidebar-photo.jpg" width="240" height="131" alt=" habitat in the Verde Valley" /></div>
    
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
