<!-- **************************************** -->
<br>
<div class="row">
<?php
$boletines = ''; 
$boletines= fill_content_table_ver_todos_boletines($anio);
foreach ($boletines as $boletin) 
{
    $contenido = "'view/sala_prensa/ver_boletin.php?id=".$boletin['idboletin']."'";
	$ruta = '';
    if($boletin['url'] >= 356)
	{
		$ruta = 'img/boletines/'.$boletin['url'];
	}else{
		$ruta = 'http://jesusmaria.gob.mx/JesusMaria/'.$boletin['url'];
	}
	
	echo '
			<div class="col-md-6 custom-img-container">
                <img src="'.$ruta.'" alt="Boletin '.$boletin['numero'].'" class="custom-img">
                <div class="custom-text">
                	<small class="text-center">Boletín '.$boletin['numero'].'</small><br>
                    <p>'.$boletin['titulo'].'</p>
                    <button class="btn btn-primary" onclick="cambiarcont('.$contenido.');">Ver más</button>
                </div>
            </div>
		 ';
	
}
?>
</div>
<!-- **************************************** -->