<?php
	require('_includes/setup.php');
	$pagetitle = 'Become a Member';
	$pagekeywords = '';
	$pagedesc = '';

	 	//Check Catchall image is Correct.
		include("catchallinfo.php");
  		$img = new Catchall();
  		$valid = $img->check(addslashes($_POST['newcode']));
				
		
if(isset($_POST['Submit']) && $valid == true)
	{
	//variables used
				$name = addslashes($_POST['firstname']);
				$lname = addslashes($_POST['lname']);
				$email = addslashes($_POST['email']);
				$address = addslashes($_POST['streetaddress']);
				$city = addslashes($_POST['city']);
				$state = addslashes($_POST['state']);
				$zipcode = addslashes($_POST['zipcode']);
				$phonehome = addslashes($_POST['phonehome']);
				$membership = $_POST['membership'];
				$interest = addslashes($_POST['interest']);
				$interest2 = addslashes($_POST['interest2']);
				$interest3 = addslashes($_POST['interest3']);
				$interest4 = addslashes($_POST['interest4']);
				$interest5 = addslashes($_POST['interest5']);
				$programs = addslashes($_POST['programs']);
				$programs2 = addslashes($_POST['programs2']);
				$programs3 = addslashes($_POST['programs3']);
				$programs4 = addslashes($_POST['programs4']);
				$programs5 = addslashes($_POST['programs5']);
				$programs6 = addslashes($_POST['programs6']);
				$programs7 = addslashes($_POST['programs7']);
				$programs8 = addslashes($_POST['programs8']);
				$other = addslashes($_POST['other']);
				$catchallinfo = addslashes($_POST['newcode']);
				$ip = $_SERVER['REMOTE_ADDR'];
				
				$interestlist = ($interest != ""?$interest:'') . ($interest2 != ""?', '.$interest2:'') . ($interest3 != ""?', '.$interest3:'') . ($interest4 != ""?', '.$interest4:'') . ($interest5 != ""?', '.$interest5:'');
				
				$generallist = ($programs != ""?$programs:'') . ($programs2 != ""?', '.$programs2:'') . ($programs3 != ""?', '.$programs3:'') . ($programs4 != ""?', '.$programs4:'') . ($programs5 != ""?', '.$programs5:'') . ($programs6 != ""?', '.$programs6:'') . ($programs7 != ""?', '.$programs7:'') . ($programs8 != ""?', '.$programs8:'');
		
						
				###############################################################################
						
						// Add info into the DB  
						$thetime = time();
						$test = smart($_POST['membership']);
						
						$sql = "INSERT INTO members SET email = ".smart($_POST['email']).", name = ".smartCap($_POST['firstname']).", lname = ".smartCap($_POST['lname']).", address = ".smartCap($_POST['streetaddress']).",  city = ".smartCap($_POST['city']).", state = ".smart($_POST['state']).", zipcode = ".smart($_POST['zipcode']).", phonehome = ".smart($_POST['phonehome']).", level = ".smart($_POST['membership']).", timestamp = ".$thetime;
						
		mysql_query($sql);
						
	}
						
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/pageinfo.css" rel="stylesheet" type="text/css" />

<?php include ("_includes/metatags.php"); ?>

<script>
function Validate_Form1()
{
	if (document.form.firstname.value.length == 0)
	{
		alert('Your First Name is Required.');
		document.form.firstname.style.background = "#FF0000";
		document.form.firstname.focus();
		return(false);
	}
	if (document.form.lname.value.length == 0)
	{
		alert('Your Last Name is Required.');
		document.form.lname.style.background = "#FF0000";
		document.form.lname.focus();
		return(false);
	}
	if (document.form.email.value.length == 0 || document.form.email.value.indexOf(".") == -1 || document.form.email.value.indexOf("@") == -1)
	{
		alert('A Valid Email is Required.');
		document.form.email.style.background = "#FF0000";
		document.form.email.focus();
		return(false);
	}
	if (document.form.streetaddress.value.length == 0)
	{
		alert('A Street Address is Required.');
		document.form.streetaddress.style.background = "#FF0000";
		document.form.streetaddress.focus();
		return(false);
	}
	if (document.form.city.value.length == 0)
	{
		alert('A City Name is Required.');
		document.form.city.style.background = "#FF0000";
		document.form.city.focus();
		return(false);
	}
	if (document.form.state.value.length == 0)
	{
		alert('A State is Required.');
		document.form.state.style.background = "#FF0000";
		document.form.state.focus();
		return(false);
	}
	if (document.form.zipcode.value.length == 0)
	{
		alert('A Zip Code is Required.');
		document.form.zipcode.style.background = "#FF0000";
		document.form.zipcode.focus();
		return(false);
	}
	if (document.form.phonehome.value.length == 0)
	{
		alert('A Home Phone Number is Required.');
		document.form.phonehome.style.background = "#FF0000";
		document.form.phonehome.focus();
		return(false);
	}
	return (true);
} 
</script>


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
      <h2>Member Application:</h2>
      
      <?php
	  if(isset($_POST['Submit']) && $valid == true)
	{
		$query = "SELECT * FROM members WHERE timestamp = '".$thetime."'";
		$result = mysql_query($query);
		$row = mysql_fetch_assoc($result);
	?>
    <br /><br />
         <strong>Purchase Instructions:</strong> Click the Add to Cart button below, follow the directions in the PayPal Shopping Cart. On the last screen, you can click on the the button <font color="#4179A7"><strong>Return to Verde River Greenway </strong></font> to return to our website.
          <br />
          <br />
          <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="<?=setPaypalLevel($row['level'])?>">
					<table width="500">
						<tr><td align="left" valign="top" ><strong class="redtxt">Purchase Your Membership</strong></td><tr>
						<tr><td class="header"><input type="hidden" name="on0" value="Real Name">
						Your Name</td></tr>
                        <tr><td class="txt"><input type="hidden" name="os0" value="<?=$name. ' ' . $lname?>"><?=$name. ' ' . $lname?>
						<tr><td class="header"><input type="hidden" name="on1" value="Membership Level">Membership Level</td></tr>
                      <tr><td class="txt"><input type="hidden" name="os1" value="<?=$row['level']?>"><?=$row['level']?>
						<br><br>
                        <input type="hidden" name="first_name" value="<?=$row['name']?>">
                        <input type="hidden" name="last_name" value="<?=$row['lname']?>">
                        <input type="hidden" name="address1" value="<?=$row['address'].' '. $row['address2']?>">
                        <input type="hidden" name="city" value="<?=$row['city']?>">
                        <input type="hidden" name="state" value="<?=$row['state']?>">
                        <input type="hidden" name="zip" value="<?=$row['zipcode']?>">
                        <input type="hidden" name="rm" value="2">
                        <input type="hidden" name="on3" value="User ID"><input type="hidden" name="os3" value="<?=$row['id']?>">
                        </td></tr>
					</table>
					<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="">
					<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
	  </form>	
    
    <?php
	}
	else
	{
	?>
     
    If you are interested inbecoming a member of the Friends of Verde River Greenway, please fill out of the member application below or <a href="VerdeVolunteerApplication.pdf">download the application</a> and mail it to us.
    <br />
    <br />
<form method="POST"  name="form" onSubmit="return Validate_Form1();">
	    <table width="615" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" align="left" valign="top" class="header">&nbsp;&nbsp;Contact Information (Confidential Information)</td>
          </tr>
          <tr>
            <td width="178" class="subheader"><strong>* First Name  </strong></td>
            <td width="437" class="txt">
            <input name="firstname" type="text" id="firstname" size="40" accesskey="1" tabindex="1" value="<?=addslashes($_POST['firstname'])?>"/>				  
              </td>
          </tr>
          <tr>
            <td class="subheader"><strong>* Last Name </strong></td>
            <td class="txt"><input name="lname" type="text" id="lname" size="40" accesskey="2" tabindex="2" value="<?=addslashes($_POST['lname'])?>"/></td>
          </tr>
          <tr>
            <td class="subheader"><strong>* Email</strong></td>
            <td class="txt">
              <input name="email" type="text" id="email" size="40" accesskey="4" tabindex="4" value="<?=addslashes($_POST['email'])?>"/>
              </td>
          </tr>
          <tr>
            <td height="20" align="right" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top" class="header">&nbsp;&nbsp;Mailing Address </td>
          </tr>
          <tr>
            <td class="subheader"><strong>* Street Address </strong></td>
            <td class="txt">
              <input name="streetaddress" type="text" id="streetaddress" size="40" accesskey="8" tabindex="8" value="<?=addslashes($_POST['streetaddress'])?>"/>				  </td>
          </tr>
          <tr>
            <td class="subheader"><strong>* City</strong></td>
            <td class="txt">
              <input name="city" type="text" id="city" size="40" accesskey="9" tabindex="9" value="<?=addslashes($_POST['city'])?>"/>				  </td>
          </tr>
          <tr>
            <td class="subheader"><strong>* State</strong></td>
            <td class="txt"><input name="state" type="text" id="state" accesskey="9" tabindex="9" value="<?=addslashes($_POST['state'])?>" size="12" maxlength="2"/></td>
          </tr>
          <tr>
            <td class="subheader"><strong>* Zip Code </strong></td>
            <td class="txt"><input name="zipcode" type="text" id="zipcode" size="12" accesskey="11" tabindex="11" value="<?=addslashes($_POST['zipcode'])?>"/></td>
          </tr>
          <tr>
            <td height="20" align="right" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top" class="header">&nbsp;&nbsp;Phone Numbers</td>
          </tr>
          <tr>
            <td class="subheader"><strong>* Home</strong></td>
            <td class="txt"><input name="phonehome" type="text" id="phonehome" size="12" accesskey="11" tabindex="11" value="<?=addslashes($_POST['phonehome'])?>"/></td>
          </tr>
          <tr>
            <td height="20" align="right" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top" class="header">&nbsp;&nbsp;Membership Type</td>
          </tr>
          <tr>
            <td height="20" align="right" valign="top">&nbsp;</td>
            <td class="txt"><em>Please select one of the following membership levels.</em><br />
            <?php 
					if(isset($_POST['membership']) == 1)
					{
						membershipDropDownList($_POST['membership']);
					}
					else
					{
						membershipDropDownList(0);
					}
			
				?>
			</td>
          </tr>
          <tr>
            <td height="20" align="right" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top" class="header">&nbsp;&nbsp;Special Interest Information</td>
          </tr>
          <tr>
            <td class="subheader"><strong>Volunteer Interest: </strong></td>
            <td class="txt"><em>Please select all that apply.</em></td>
          </tr>
          <tr>
            <td height="20" align="right" valign="top">&nbsp;</td>
            <td class="txt"><label>
              <input name="interest" type="checkbox" id="interest" value="Cleanup Crew" <?=isset($_POST['interest']) ? 'checked="checked"' : ''?>/>
            </label>              
              Cleanup Crew<br />
                    <input name="interest2" type="checkbox" id="interest2" value="Trail Maintenance" <?=isset($_POST['interest2']) ? 'checked="checked"' : ''?> />
              Trail Maintenance<br />
                    <input name="interest3" type="checkbox" id="interest3" value="Restoration Crew" <?=isset($_POST['interest3']) ? 'checked="checked"' : ''?>/>
              Restoration Crew<br />
                    <input name="interest4" type="checkbox" id="interest4" value="Outreach/Education" <?=isset($_POST['interest4']) ? 'checked="checked"' : ''?>/>
              Outreach/Education<br />
                    <input name="interest5" type="checkbox" id="interest5" value="Introductory Field Trips" <?=isset($_POST['interest5']) ? 'checked="checked"' : ''?>/>
              Introductory Field Trips<br />                                            
</td>
          </tr>
          <tr>
            <td class="subheader"><strong>General  Program Interest:</strong></td>
            <td class="txt"><em>Please select all that apply.</em></td>
          </tr>
          <tr>
            <td height="178" align="right" valign="top">&nbsp;</td>
            <td class="txt">
            		
            		  <input name="programs" type="checkbox" id="programs" value="Clerical Support" <?=isset($_POST['programs']) ? 'checked="checked"' : ''?>/>
          		  
       		  Clerical Support<br />
                    <input name="programs2" type="checkbox" id="programs2" value="Internet Support" <?=isset($_POST['programs2']) ? 'checked="checked"' : ''?>/>
              Internet Support<br />
                    <input name="programs3" type="checkbox" id="programs3" value="Fundraising Support" <?=isset($_POST['programs3']) ? 'checked="checked"' : ''?>/>
              Fundraising Support<br />
                    <input name="programs4" type="checkbox" id="programs4" value="<Volunteer Coordination" <?=isset($_POST['programs4']) ? 'checked="checked"' : ''?>/>
              Volunteer Coordination<br />
                    <input name="programs5" type="checkbox" id="programs5" value="Events Coordination" <?=isset($_POST['programs5']) ? 'checked="checked"' : ''?>/>
              Events Coordination<br />
                    <input name="programs6" type="checkbox" id="programs6" value="Event Support" <?=isset($_POST['programs6']) ? 'checked="checked"' : ''?>/>
        Event Support<br />
                    <input name="programs7" type="checkbox" id="programs7" value="Commitee Member" <?=isset($_POST['programs7']) ? 'checked="checked"' : ''?>/>
        Committee Member<br />
                    <input name="programs8" type="checkbox" id="programs8" value="Board Member" <?=isset($_POST['programs8']) ? 'checked="checked"' : ''?>/>
              Board Member<br />                             

            </td>
          </tr>
          <tr>
            <td height="20" align="right" valign="top">&nbsp;</td>
            <td class="txt"><em>Please explain other interests not listed above:</em></td>
          </tr>
          <tr>
            <td height="20" align="right" valign="top">&nbsp;</td>
            <td class="txt"><label>
              <?php if(isset($_POST['other'])){
			  ?>
		    <textarea name="other" id="other" cols="50" rows="5"><?=$_POST['other']?>
			  		</textarea>
		    <?php
		  }
		  else
		  {
			  ?>
		    <textarea name="other" id="other" cols="50" rows="5"></textarea>
		    <?php
		  }
		  ?></label></td>
          </tr>
          <tr>
            <td height="20" align="right" valign="top">&nbsp;</td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" align="left" valign="top" class="header">&nbsp;&nbsp;Validation</td>
            </tr>
                <tr>
                  <td class="subheader"><strong>Validation Code:</strong></td>
                  <td class="txt"><img src="catchallinfo_show.php?sid=<?php echo md5(uniqid(time())); ?>" /><br />
                  <?php if(isset($_POST['Submit']) && $valid != true)
				  			{
								echo "<font color=\"#FF0000\">Sorry, the code you entered was invalid. Please Try Again.</font>";
							}
				  ?>                  </td>
                </tr>
                <tr>
                  <td class="subheader"><strong>*Input Validation Code:</strong></td>
                  <td class="txt"><input name="newcode" type="text" id="newcode" size="15"/></td>
          </tr>
        </table>


			  <br />
              <div align="center">
		<input name="Submit" type="submit" class="formbutton" id="Submit" value="Submit" />
			&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" class="formbutton" />
</div>	

</form>
                <?php 
	  }   
?>
	  
<br />
      <br />
    </div>  <!-- Close Content Left Box-->
    
    <div id="content-right">
    
    	<?php
	  	if(isset($_POST['Submit']) && $valid == true)
			{
	  ?>
	  <?php include ("_includes/eventbox1.php"); ?>
      <div align="center" style="margin-bottom:14pt; margin-top:10pt"><img src="images/sidebar-photo.jpg" width="240" height="131" alt=" habitat in the Verde Valley" /></div>
      
      <?php
			}
			else
			{
	  ?>
      
	  <?php include ("_includes/eventbox1.php"); ?>
        
		<?php include ("_includes/eventbox2.php"); ?>  
           
        <div align="center" style="margin-bottom:14pt; margin-top:10pt"><img src="images/sidebar-photo.jpg" width="240" height="131" alt=" habitat in the Verde Valley" /></div>
        
        <?php include ("_includes/eventbox3.php"); ?>
        <?php
			}
	  ?>
    
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
