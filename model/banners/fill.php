<?php
include("../../controller/banners/funciones_banners.php");
function fill_banner()
{	
	$banners = get_banners();

	return $banners;
}

function fill_tr_banner($banners)
{
	$tr_banners = "";
	$active = " active";
	foreach ($banners as $banner) 
	{
	    if($banner['target'])
	    {
	        $target = "target = '_blank'";
	    }else{
	        $target = "";
	    }
	    
		if($banner['url']!= "")
		{
			$tr_banners.='
						<div class="carousel-item'.$active.'" >
					    	<a href="'.$banner['url'].'" '.$target.'>
					    	  <img class="img-fluid"  src=".'.$banner['imagen'].'" alt="Banner Jesús María">
					    	</a>

					    	<div class="carousel-caption"></div>
					    </div>
					';	
		}else{
			$tr_banners.='
						<div class="carousel-item'.$active.'">					
					    	  <img class="img-fluid" src=".'.$banner['imagen'].'" alt="Banner Jesús María">	
					    	  <div class="carousel-caption"></div>				
					    </div>
					';	
		}
		$active ="";
	}
	return $tr_banners;
}