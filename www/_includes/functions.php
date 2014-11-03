<?php
function smart($value)
{
   // Stripslashes
   if (get_magic_quotes_gpc()) {
	   $value = stripslashes($value);
   }
   // Quote if not integer
   if (!is_numeric($value) || (strpos($value, '0') === 0)) {
	   $value = "'" . rtrim(mysql_real_escape_string($value)) . "'";
   }
   
   return $value;
}

function smartCap($value)
{
   $temp = ucwords(strtolower($value));
   
   return "'" . rtrim(mysql_real_escape_string($temp)) . "'";
}


function displayname()
{
	if(isset($_SESSION['displayname']))
	{
		return $_SESSION['displayname'];
	}
	else
		return 'Guest';
}

function checkadmin()
{
	if($_SESSION['admin'] == 1)
	{
		return 'Admin';
	}
	else
		return 'Guest';
}

function gettesty()
{
	$sqlText = "SELECT * FROM testy";
	$sql = mysql_query($sqlText) or die("Error loading data\nMysqlError: ".mysql_error());
	$testytotal = mysql_num_rows($sql);
					
	//Randomly picks a # between 1 and the # of testy's in the database
	$numbers = mt_rand(1,$testytotal++);
					
	$sqlText = "SELECT * FROM testy WHERE id = '".$numbers."'";
	$sql = mysql_query($sqlText);
	$listing = mysql_fetch_assoc($sql);
	unset($sql, $sqlText, $numbers, $testytotal);
									
	return '"'.$listing['infoshort'].'"'."<br><div align=\"right\"><span class=\"purpleheader\">".$listing['person']."</span><br>".$listing['title']."</div>";
}


function getrandom()
{
	$sqlText = "SELECT * FROM facts";
	$sql = mysql_query($sqlText) or die("Error loading data\nMysqlError: ".mysql_error());
	$randomtotal = mysql_num_rows($sql);
					
	//Randomly picks a # between 1 and the # of testy's in the database
	$fnumber = rand(1,$randomtotal++);
					
	$sqlText = "SELECT * FROM facts WHERE id = '".$fnumber."'";
	$sql = mysql_query($sqlText);
	$facts = mysql_fetch_assoc($sql);
	unset($sql, $sqlText, $fnumber, $randomtotal);
									
	return '"'.$facts['fact'].'"'."<br>";
}

function membershipDropDownList($membership)
{
		$membershipquery="SELECT * FROM membership";
		$results = mysql_query($membershipquery);
		echo "<select name=\"membership\" style=\"width:145px;\">";
		$rowNumber = mysql_num_rows($results);
		if($membership == '0')
		{
			echo "<option value=\"Not Selected\" selected=\"selected\">Not Selected</option>\n";
			for($x=0;$x<$rowNumber;$x++)
			{
				$row = mysql_fetch_assoc($results);
				echo "<option value=\"".$row['name']."\">".$row['name']."\n";
			}
		}
		else
		{
			for($x=0;$x<$rowNumber;$x++)
			{
				$row = mysql_fetch_assoc($results);
            	if($row['name'] == $membership)
					echo "<option value=\"".$row['name']."\" selected=\"selected\">".$row['name']."</option>\n";
				else
					echo "<option value=\"".$row['name']."\">".$row['name']."</option>\n";
			}
		}
		echo "</select>";
}


function createRandomcode() {
	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	
	while ($i <= 5) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
    }

    return $pass;

}

function setPaypalLevel($level) {
	switch ($level) {
			case 'Couple $25':
 				return 'PBB4K4Y2VXJCN';
 				break;
				
			case 'Family $25':
 				return '6SHABCPD6H89W';
 				break;
				
			case 'Business/Organization $50':
 				return 'KMHXTWDQA5ZVQ';
 				break;
				
			case 'Government Agency $100 ':
 				return '72HTUSUKSYXVL';
 				break;
				
			default:
 				return 'APNG7NFHHDP2Y';
 				break;
			
			
		}
}

?>