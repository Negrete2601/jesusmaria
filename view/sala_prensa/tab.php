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
			<div class="col-md-6">
				<div class="thumbnail" id="cuadro_sala">
					<small class="text-center">Boletín '.$boletin['numero'].'</small><br>
					<img style="background-image: url('.$ruta.');" class="img_boletin_todos">
					<h4 style="font-size: 1rem; margin-top: 5px;" class="text-center">'.$boletin['titulo'].'</h4>
					<p class="text-center">
    			    <a href="javascript:pagecontent('.$contenido.');" class="btn btn-primary" role="button">Ver más</a></p>
				</div>
			</div>

		 ';
	
}
?>
</div>
<!-- **************************************** -->