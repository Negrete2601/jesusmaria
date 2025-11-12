<?php
  include('fill.php');
  $id_dependencia = $_POST['id_dependencia'];
  $tramites_dependencia = fill_tramites_dependencia($id_dependencia);
  $tr_tramites_dependencia = fill_tr_tramites_dependencia($tramites_dependencia);
?>

<link href="css/modal_dependencias.css" rel="stylesheet">
<div class="modal fade" id="modal_dependencia" tabindex="-1" aria-labelledby="modalDependenciasLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDependenciasLabel">
                    <i class="fas fa-handshake-angle me-2"></i>Trámites de la Secretaría de Desarrollo Social
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Filtros y búsqueda -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="search-container">
                            <i class="fas fa-search search-icon"></i>
                            <input type="text" class="form-control search-input" placeholder="Buscar trámite por nombre, descripción...">
                        </div>
                    </div>
                    
                    <!-- <div class="col-md-12 mt-2">
                        <div class="filter-buttons">
                            <button class="filter-btn active" data-filter="all">Todos</button>
                            <button class="filter-btn" data-filter="inmediato">Respuesta Inmediata</button>
                            <button class="filter-btn" data-filter="gratuito">Sin Costo</button>
                            <button class="filter-btn" data-filter="presencial">Presencial</button>
                            <button class="filter-btn" data-filter="digital">Digital</button>
                        </div>
                    </div> -->
                </div>

                <!-- Lista de trámites -->
                <div class="accordion" id="acordionDependencias">
                    <!-- Trámite -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingID_DEL_TRAMITE">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseID_DEL_TRAMITE" aria-expanded="true" aria-controls="collapseID_DEL_TRAMITE">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <span class="tramite-title">
                                        <i class="fas fa-graduation-cap me-2"></i>
                                        <strong>PREPARATORIA EN UN EXAMEN - ACUERDO 286</strong>
                                    </span>
                                    <div class="badge-container">
                                        <span class="badge badge-estado badge-tiempo"><i class="fa-solid fa-clock me-1"></i> Inmediato</span>
                                        <span class="badge badge-estado badge-pago"><i class="fa-solid fa-dollar-sign me-1"></i> $6,000</span>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseID_DEL_TRAMITE" class="accordion-collapse collapse" aria-labelledby="headingID_DEL_TRAMITE" data-bs-parent="#acordionDependencias">
                            <div class="accordion-body">
                                <ul class="nav nav-tabs" id="tabsTramiteID_DEL_TRAMITE" role="tablist">
                                    <li class="nav-item" role="presentation">              
                                        <a class="nav-link active" id="info-tab-ID_DEL_TRAMITE" data-bs-toggle="tab" href="#info-ID_DEL_TRAMITE" role="tab" aria-controls="info-ID_DEL_TRAMITE" aria-selected="true">
                                            <i class="fas fa-info-circle me-1"></i> Información
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="requisitos-tab-ID_DEL_TRAMITE" data-bs-toggle="tab" href="#requisitos-ID_DEL_TRAMITE" role="tab" aria-controls="requisitos-ID_DEL_TRAMITE" aria-selected="false">
                                            <i class="fas fa-list-alt me-1"></i> Requisitos
                                        </a>
                                    </li>
                                </ul>
                                  
                                <div class="tab-content mt-3" id="tramiteID_DEL_TRAMITEContent">
                                    <div class="tab-pane fade show active" id="info-ID_DEL_TRAMITE" role="tabpanel" aria-labelledby="info-tab-ID_DEL_TRAMITE">
                                        <div class="info-grid">
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-ticket-alt"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Clave</div>
                                                    <div class="info-value">EDU286</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-users"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Usuarios</div>
                                                    <div class="info-value">Mayores de 18 años sin preparatoria terminada</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-file-alt"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Documento o servicio</div>
                                                    <div class="info-value">Certificado de preparatoria con validez oficial</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-dollar-sign"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Costo</div>
                                                    <div class="info-value">$6,000.00 MXN</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-clock"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Tiempo de Respuesta</div>
                                                    <div class="info-value">30 días hábiles después del examen</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-calendar-alt"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Vigencia</div>
                                                    <div class="info-value">Permanente</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-map-marker-alt"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Domicilio</div>
                                                    <div class="info-value">
                                                        Av. de la Juventud 123, Col. Educación, Jesús María, Aguascalientes
                                                        <a href="https://www.google.com/maps/search/?api=1&query=Avenida+de+la+Juventud+123+Educación+Jesús+María+Aguascalientes" class="map-link" target="_blank">
                                                            <i class="fas fa-external-link-alt"></i>Abrir en Google Maps
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-phone"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Teléfono(s)</div>
                                                    <div class="info-value">(449) 912-34-56</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-clock"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">Horario de Atención</div>
                                                    <div class="info-value">Lunes a Viernes: 9:00 - 17:00 hrs.</div>
                                                </div>
                                            </div>
                                            <div class="info-item">
                                                <span class="info-icon"><i class="fas fa-envelope"></i></span>
                                                <div class="info-content">
                                                    <div class="info-label">E-mail</div>
                                                    <div class="info-value">educacion@jesusmaria.gob.mx</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="requisitos-ID_DEL_TRAMITE" role="tabpanel" aria-labelledby="requisitos-tab-ID_DEL_TRAMITE">
                                        <div class="alert alert-info">
                                            <i class="fas fa-info-circle me-2"></i>Para este trámite se requieren los siguientes documentos:
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table requisitos-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Requisito</th>
                                                        <th scope="col">Original</th>
                                                        <th scope="col">Copia</th>
                                                        <th scope="col">Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Acta de nacimiento</td>
                                                        <td><i class="fas fa-check text-success"></i></td>
                                                        <td><i class="fas fa-check text-success"></i></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Identificación oficial</td>
                                                        <td><i class="fas fa-times text-danger"></i></td>
                                                        <td><i class="fas fa-check text-success"></i></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Certificado de secundaria</td>
                                                        <td><i class="fas fa-check text-success"></i></td>
                                                        <td><i class="fas fa-check text-success"></i></td>
                                                        <td></td>                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Comprobante de domicilio</td>
                                                        <td><i class="fas fa-times text-danger"></i></td>
                                                        <td><i class="fas fa-check text-success"></i></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Formato de solicitud</td>
                                                        <td><i class="fas fa-check text-success"></i></td>
                                                        <td><i class="fas fa-times text-danger"></i></td>
                                                        <td><button class="btn btn-sm btn-outline-primary btn-download">Descargar Formato</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary btn-modal" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>