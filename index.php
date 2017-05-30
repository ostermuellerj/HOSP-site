<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gallery from Folder Demo</title>
<style type="text/css">


.photos
{

	margin:auto;
    width: 10%;
	height: 10%;
	white-space: pre;

}


</style></head>

<body>

<ul>
	<?php
		$dirname = "index/";
		$images = scandir($dirname);
		$i=0;
		
		$ignore = array(".", "..");
		foreach($images as $curimg)
		{
			if(!in_array($curimg, $ignore))
			{
				
				if($i%6==5)
				{
					echo "<a href=\"$dirname$curimg\"><img class='photos' src='img.php?src=$dirname$curimg&w=300&zc=1' alt='' /><br></a> ";
					
				}
				else
					echo "<a href=\"$dirname$curimg\"><img class='photos' src='img.php?src=$dirname$curimg&w=300&zc=1' alt='' /></a>\n ";
				$i++;
			}
		} 				
	?>
</ul>

</body>
</html>
