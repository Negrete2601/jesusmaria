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
				if($x <= 30)
				{
					$resumen =  $resumen.$palabra." ";
					$x++;
				}
			}
		$mas = "'view/sala_prensa/ver_boletin.php?id=".$noticia['idboletin']."'";
		
		$back_img_noticia = "img/boletines/".$noticia['url'];

		$tr_noticias.='<div class="col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img class="img-fluid w-100 rounded" alt="Image" src="'.$back_img_noticia.'" >
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">'.$noticia['titulo'].'</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4" href="#">Ver más</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#"><h4 class="text-white mb-4 py-3">'.$noticia['titulo'].'</h4></a>
                                        <div class="px-4">
                                            <p class="mb-4">'.$resumen.'...</p>
                                           
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5" href="javascript:cambiarcont('.$mas.');">Ver más</a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
						';
	}
	echo $tr_noticias;
?>

