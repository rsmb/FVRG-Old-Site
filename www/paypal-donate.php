<?php
	require('_includes/setup.php');
	$pagetitle = 'Donation Made';
	$pagekeywords = '';
	$pagedesc = '';

	 	if(!isset($_POST['receipt_id']))
    {
		header("Location: donate.php");
  	}
	else
	{
		//Update User DB
		//$level = ($_POST['mc_gross_1'] == '10.00' ? '2' : '1');
		$paypal = "Receipt Number: ".$_POST['receipt_id']. " **** Verify Sign: ".$_POST['verify_sign']. " **** Payer ID: ".$_POST['payer_id'];
		
		mysql_query("INSERT INTO donate SET email = ".smart($_POST['payer_email']).", name = ".smart($_POST['first_name']).", lname = ".smart($_POST['last_name']).", address = ".smart($_POST['address_name']).",  city = ".smart($_POST['address_city']).", state = ".smart($_POST['address_state']).", zipcode = ".smart($_POST['address_zip']).", amount = ".smart($_POST['mc_gross']).", ticketdate = NOW(), paypal = '".$paypal."'");
		
		//$sql = "INSERT INTO members SET email = ".smart($_POST['payer_email']).", name = ".smart($_POST['first_name']).", lname = ".smart($_POST['last_name']).", address = ".smart($_POST['address_name']).",  city = ".smart($_POST['address_city']).", state = ".smart($_POST['address_state']).", zipcode = ".smart($_POST['address_zip']).", amount = ".smart($_POST['mc_gross_ x']).", ticketdate = NOW(), paypal = '".$paypal."', timestamp = ".$thetime;
		
		//Get User Record
		//$query = "SELECT * FROM users WHERE userid=".$_POST['option_selection4_1'];
		//$result = mysql_query($query);
		//$row = mysql_fetch_assoc($result);
		$name = $_POST['first_name']. " " . $_POST['last_name'];
		$email = $_POST['payer_email'];
		$amount = $_POST['mc_gross'];
		
		//Email Admin
		 			$from = "DoNotResponde@verderivergreenway.org"; 
					$subject = "New Donation"; 
					$headers = "From: $from";				
					$message ="Here is your notice that a donation has been sent.\n
						
Name: $name \n
Amount: $amount
Donation Paypal Receipt: 
$paypal
"; 
			 
					//Send the email
					$mail_sent1 = mail(ADMIN_EMAIL, $subject, $message, $headers );
	}

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
   	  <h1>Donate  to the Friends of Verde River Greenway</h1>
   		<img src="images/header-lines.jpg" width="900" height="8" border="0" align="top" /> </div>
    <div id="content-left">
      
         Thank you for your generous donation of $<?=$_POST['mc_gross']?> to the Friends of Verde River Greenway.  As an affiliate of Arizona  
                State Parks Foundation, Friends of Verde River Greenway is a tax-exempt organization and the Taxpayer 
                Identification Number is 20-1196825.   Your support is vital to our mission of preserving and enhancing the beautiful 
               Verde River Greenway.
<br />
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
