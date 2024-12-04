<?php
include("../../controller/dependencias/funciones_dependencias.php");
function fill_secretarias()
{	
	$secretarias = get_secretarias();

	return $secretarias;
}

function fill_dependencias()
{	
	$secretarias = get_dependencias();

	return $secretarias;
}

function fill_tr_dependencias($dependencias)
{
	$tr_dependencia='';
	$i = 0;
	foreach ($dependencias as $dependencia) 
	{		
		if($i==0)
		{
			$tr_dependencia.= '<div class="listado_izq">
					<ul class="list_dep">';
		}

		if($i == 10)
		{
			$tr_dependencia.= '</ul>					
				</div>

				<div class="listado_der">
					<ul class="list_dep">';			
		}
		$tr_dependencia.='
							<li id="'.$dependencia['id'].'" class="li_dep" onclick="fill_modal_dependencias(this);">
								<span>
									'.$dependencia['secretaria'].'	
								</span>
							</li>
							';
		$i++;
	}
	$tr_dependencia.='</ul>	
				</div>';
	return $tr_dependencia;
}

function fill_tr_dependencias_table($dependencias)
{
	$tr_dependencia_table='';	
	foreach($dependencias as $dependencia)
	{
		$tr_dependencia_table.='
								<tr id="'.$dependencia['id'].'" onclick="fill_modal_dependencias(this);">
							      <td>
							      	<ul>
							      		<li>
							      			'.$dependencia['secretaria'].'
							      		</li>
							      	</ul>
							      </td>
							    </tr>
							';

	}
	return $tr_dependencia_table;
}

function fill_tramites_dependencia($id_dependencia)
{
	include("../../controller/dependencias/funciones_dependencias.php");
	$tramites_dependencia = get_tramites_dependencia($id_dependencia);

	return $tramites_dependencia;
}

function fill_tr_tramites_dependencia($tramites_dependencia)
{
	$tr_tramites_dependencia = "";

	foreach ($tramites_dependencia as $tramite) 
	{
		$tr_tramites_dependencia.='
									 <tr>
					                      <td hidden></td>  
					                      <td hidden></td>
					                      <td>'.$tramite['nombre'].'</td>
					                      <td>'.$tramite['secretaria'].'</td>
					                      <td>'.$tramite['documento_obtenido'].'</td>
					                      <td>'.$tramite['telefono'].'</td>
					                      <td>
					                        <a class="btn btn-xs btn-info" onclick="fill_modal_info('.$tramite['id'].');"><i class="fas fa-info"></i></a>
					                        <a class="btn btn-xs btn-danger" href="http://jesusmaria.gob.mx/assets/TCPDF-master/Generar-Formato.php?tramite='.$tramite['id'].'" target = "_blank"><i class="far fa-file-pdf"></i></a>
					                      </td>
					                    </tr>
									';
	}
	return $tr_tramites_dependencia;
}

function fill_boletines()
{
	$boletines = get_boeltines();

	return $boletines;
}

function fill_tr_boletines($boletines)
{

}
