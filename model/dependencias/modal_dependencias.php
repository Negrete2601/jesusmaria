<?php
  include('fill.php');
  $id_dependencia = $_POST['id_dependencia'];
  $icono = $_POST['icono'];
  $tramites_dependencia = fill_tramites_dependencia($id_dependencia);
  $tr_tramites_dependencia = fill_tr_tramites_dependencia($tramites_dependencia, $icono);
?>

<link href="css/modal_dependencias.css" rel="stylesheet">
<div class="modal fade" id="modal_dependencia" tabindex="-1" aria-labelledby="modalDependenciasLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDependenciasLabel">
                    <i class="<?=$_POST['icono']?> me-2"></i>Trámites de la <?=$_POST['secretaria']?>
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
                    <?=$tr_tramites_dependencia;?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary btn-modal" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>