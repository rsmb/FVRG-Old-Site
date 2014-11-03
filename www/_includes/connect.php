<?php
class mySQLConnect {
	var $isConnected = false;
	function mySQLConnect()
	{
		if($this->isConnected == false)
		{
			$x = 0;
			while($x < 6)
			{
				if(@mysql_connect('localhost','verderiv_ad821','C7FzP7v9IvCi'))
				{
					if(@mysql_select_db('verderiv_members'))
					{
						$x = 10;
						$this->isConnected = true;
					}
				}
				else
				{
					$x ++;
					sleep(1);
				}
			}
			if($this->isConnected == false)
			{
				echo '<h1>Server is busy, please try again.</h1>';
				exit();
			}
		}
	}
}
?>