<?php
	include('../../controller/sala_prensa/funciones_boletines.php');
	$ultimas_noticias = get_ultimas_noticias();
	$tr_noticias='';

	foreach ($ultimas_noticias as $noticia) 
	{
			$nota = strip_tags($noticia['texto']); 
			$nota = explode(" ",$nota);
			$x = 0;
			$resumen = '';
			foreach ($nota as $palabra) 
			{
				if($x <= 25)
				{
					$resumen =  $resumen.$palabra." ";
					$x++;
				}
			}
		$mas = "'view/sala_prensa/ver_boletin.php?id=".$noticia['idboletin']."'";
		
		$back_img_noticia = "img/boletines/".$noticia['url'];

		$tr_noticias.='   <div class="col-12 col-md-4 col-lg-4 col-xl-4 wow fadeInDown sobre" data-wow-delay="0.1s">                    
                    <div class="card news-card" onclick="cambiarcont('.$mas.')" style="cursor: pointer;">
                        <img src="img/Recurso 49.png" class="card-img" alt="Fondo" >
                        <div class="card-img-overlay d-flex flex-column align-items-center  text-center">
                            <img src="'.$back_img_noticia.'" class="mb-3" width="100" height="100" alt="Miniatura" style="width: 75%; height: auto;">
                            <h4 class="card-title">'.$noticia['titulo'].'"</h4>
                            <p class="card-text">'.$resumen.'...</p>
                        </div>
                    </div>
                </div>
						';
	}
	echo $tr_noticias;
?>

