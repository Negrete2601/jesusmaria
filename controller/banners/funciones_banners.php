<?php
require('../../controller/exe.php');
function get_banners()
{	
	
	$query = "SELECT idbanner, imagen, url, target
				FROM banners
			  WHERE estado = 1 ORDER BY idbanner DESC";
	
	$result = querys($query);
	return($result);
}