<?php
define('IMAGECONTENT', 'galleryphoto-', true); //EDIT THIS: Files name before the #, will be displayed in the # ordered
define('THUMDIR', 'images/galleryimages/', true); // EDIT THIS: Directory structure to where the Thumnails are
define('LARGEDIR', 'images/galleryimages/large/', true); // EDIT THIS: Directory structure to where the Large Photos are
define('TOTALPHOTOS', 13, true); // EDIT THIS: Total # of photos in gallery

//Sets Gallery Headers
define('HEADER1', 'Verde River Greenway Gallery 1', true);
define('HEADER2', 'Verde River Greenway Gallery 2', true);
define('HEADER3', 'Verde River Greenway Gallery 3', true);
define('HEADER4', 'Verde River Greenway Gallery 4', true);

//Sets Photo Headers
define('PHOTOHEADER1', 'Verde River Greenway Gallery 1: ', true);
define('PHOTOHEADER2', 'Verde River Greenway Gallery 2: ', true);
define('PHOTOHEADER3', 'Verde River Greenway Gallery 3: ', true);
define('PHOTOHEADER4', 'Verde River Greenway Gallery 4: ', true);

//Sets Photo Headers
function setphotoheader($photoid) 
{

	
		//$temp = "photo_".$photoid;
		//echo $$temp;
		
		for($x=0;$x<TOTALPHOTOS;$x++)
			{
				if($x == $photoid)
					{
					$temp = "photo_$x";
					echo $$temp;
					echo "Worked " . $photoid; 
					}
			}

}

//DO NOT EDIT BELOW HERE

function setheader($page,$type) 
{
				if(1 == $page)
				{
					if($type == 'header')
						return HEADER1;
					else
						return PHOTOHEADER1;
				}
				
				if(2 == $page)
				{
					if($type == 'header')
						return HEADER2;
					else
						return PHOTOHEADER2;
				}
				
				if(3 == $page)
				{
					if($type == 'header')
						return HEADER3;
					else
						return PHOTOHEADER3;
				}
				
				if(4 == $page)
				{
					if($type == 'header')
						return HEADER4;
					else
						return PHOTOHEADER4;
				}
				
				if(5 == $page)
				{
					if($type == 'header')
						return HEADER5;
					else
						return PHOTOHEADER5;
				}
				
				if(6 == $page)
				{
					if($type == 'header')
						return HEADER6;
					else
						return PHOTOHEADER6;
				}
}

function checkpage($page,$photoid,$direction) 
{
	if(($page * 12) < ($photoid + 1) && $direction == 'next')
	{
		return $page + 1;
	}
	
	if(($page * 12) - 12 == ($photoid - 1) && $direction == 'prev')
	{
		return $page - 1;
	}
	else
		return $page;
}

function resetphotocount($page,$photoid) 
{
	if($page == 1)
		return $photoid;
	else
		return $photoid - (($page * 12)-12);
}
?>