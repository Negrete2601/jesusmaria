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
	foreach ($dependencias as $dependencia) 
	{		
		
		$tr_dependencia.=' <div id="'.$dependencia['id'].'" class="col-12 col-sm-6 d-flex align-items-center mb-3 hover-effect" onclick="fill_modal_dependencias('.$dependencia['id'].', \''.$dependencia['icono'].'\', \''.$dependencia['secretaria'].'\');" style="cursor: pointer;">
								   	<span class="icon-container">
								   		<i class="'.$dependencia['icono'].' text-secondary" aria-hidden="true"></i>
								   	</span>
					            	<h5 class="ms-3">
					            		<span class="text-content">
											'.$dependencia['secretaria'].'	
										</span>
					            	</h5>								
					        </div>							
							';
		
	}	
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
	$tramites_dependencia = get_tramites_dependenciat($id_dependencia);

	return $tramites_dependencia;
}

function fill_tr_tramites_dependencia($tramites_dependencia, $icono)
{
	$tr_tramites_dependencia = "";

	foreach ($tramites_dependencia as $tramite) 
	{
        $requisitos = fill_requisitos($tramite['id']);
        $modal_requisitos = fill_modal_requisitos_tramite($requisitos);
		$tr_tramites_dependencia.='
									 <div class="accordion-item">
                        <h2 class="accordion-header" id="heading'.$tramite['id'].'">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$tramite['id'].'" aria-expanded="true" aria-controls="collapse'.$tramite['id'].'">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <span class="tramite-title">
                                        <i class="'.$icono.' me-2"></i>
                                        <strong>'.$tramite['nombre'].'</strong>
                                    </span>
                                    <div class="badge-container">
                                        <span class="badge badge-estado badge-tiempo"><i class="fa-solid fa-clock me-1"></i> '.$tramite['tiempo'].'</span>
                                        <span class="badge badge-estado badge-pago"><i class="fa-solid fa-dollar-sign me-1"></i>'.substr($tramite['costo'],0,8).'...</span>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapse'.$tramite['id'].'" class="accordion-collapse collapse" aria-labelledby="heading'.$tramite['id'].'" data-bs-parent="#acordionDependencias">
                            <div class="accordion-body">
                                <ul class="nav nav-tabs" id="tabsTramite'.$tramite['id'].'" role="tablist">
                                    <li class="nav-item" role="presentation">              
                                        <a class="nav-link active" id="info-tab-'.$tramite['id'].'" data-bs-toggle="tab" href="#info-'.$tramite['id'].'" role="tab" aria-controls="info-'.$tramite['id'].'" aria-selected="true">
                                            <i class="fas fa-info-circle me-1"></i> Información
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="requisitos-tab-'.$tramite['id'].'" data-bs-toggle="tab" href="#requisitos-'.$tramite['id'].'" role="tab" aria-controls="requisitos-'.$tramite['id'].'" aria-selected="false">
                                            <i class="fas fa-list-alt me-1"></i> Requisitos
                                        </a>
                                    </li>
                                </ul>
                                  
                                <div class="tab-content mt-3" id="tramite'.$tramite['id'].'Content">
                                    <div class="tab-pane fade show active" id="info-'.$tramite['id'].'" role="tabpanel" aria-labelledby="info-tab-'.$tramite['id'].'">
                                        <div class="info-grid">
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-ticket-alt"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Clave</div>
                                                    <div class="info-value">'.$tramite['clave'].'</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-users"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Usuarios</div>
                                                    <div class="info-value">'.$tramite['usuarios'].'</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-file-alt"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Documento o servicio</div>
                                                    <div class="info-value">'.$tramite['documento_obtenido'].'</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-dollar-sign"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Costo</div>
                                                    <div class="info-value">'.$tramite['costo'].'</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-clock"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Tiempo de Respuesta</div>
                                                    <div class="info-value">'.$tramite['tiempo'].'</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-calendar-alt"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Vigencia</div>
                                                    <div class="info-value">'.$tramite['vigencia'].'</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-map-marker-alt"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Domicilio</div>
                                                    <div class="info-value">
                                                        '.$tramite['domicilio'].'
                                                        <a href="https://www.google.com/maps/search/?api=1&query='.str_replace(' ', '+', $tramite['domicilio']).'" class="map-link" target="_blank">
                                                            <i class="fas fa-external-link-alt"></i>Abrir en Google Maps
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-phone"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Teléfono(s)</div>
                                                    <div class="info-value">'.$tramite['telefono'].'</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-clock"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Horario de Atención</div>
                                                    <div class="info-value">'.$tramite['horario'].'</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-envelope"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">E-mail</div>
                                                    <div class="info-value">'.$tramite['email'].'</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="requisitos-'.$tramite['id'].'" role="tabpanel" aria-labelledby="requisitos-tab-'.$tramite['id'].'">
                                        <div class="alert alert-info">
                                            <i class="fas fa-info-circle me-2"></i>Para este trámite se requieren los siguientes documentos:
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table requisitos-table">
                                                <thead>
                                                    <tr>                                                        
                                                        <th scope="col">Requisito</th>
                                                        <th scope="col">Original</th>
                                                        <th scope="col">Copia</th>
                                                        <th scope="col">Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    '.$modal_requisitos.'
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
									';
	}
	return $tr_tramites_dependencia;
}

function fill_requisitos($id_tramite)
{
    $result = get_requisitos_tramite($id_tramite);
    return $result;
}

function fill_modal_requisitos_tramite($requisitos)
{
    $result = "";
    foreach ($requisitos as $requisito) 
    {
        if($requisito['original'] > 0)
        {
            $original = '<td><i class="fas fa-check text-success"></i> '.$requisito['original'].' </td>';
        }else{
            $original = '<td><i class="fas fa-times text-danger"></i></td>';
        }
        
        if($requisito['copia'] > 0)
        {
            $copia = '<td><i class="fas fa-check text-success"></i> '.$requisito['copia'].' </td>';
        }else{
            $copia = '<td><i class="fas fa-times text-danger"></i></td>';
        }

        if(!empty($requisito['documento']))
        {
            $documento = '<td><a href="'.$requisito['documento '].'"><button class="btn btn-sm btn-outline-primary btn-download">Descargar Formato</button></a></td>';
        }else{
            $documento = '';
        }
        $result.="
                     <tr>
                        <td>".$requisito['requisito']."</td>
                        ".$original.$copia.$documento."
                    </tr>
                ";
    }
    return $result;
}

function fill_boletines()
{
	$boletines = get_boeltines();

	return $boletines;
}

function fill_tr_boletines($boletines)
{

}
