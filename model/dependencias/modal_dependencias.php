<?php
  include('fill.php');
  $id_dependencia = $_POST['id_dependencia'];
  $tramites_dependencia = fill_tramites_dependencia($id_dependencia);
  $tr_tramites_dependencia = fill_tr_tramites_dependencia($tramites_dependencia);
?>

<!-- Modal -->
<div class="modal fade" id="modal_dependencia" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" style="max-width: 90% !important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Trámites</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="close_modal('modal_dependencia')">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="message-list-container">
            <div class="message-list" id="message-list">
              <div>
                <table id="table_dependencias" class="table-striped" style="width: 100%; overflow-x: scroll;">
                  <thead>
                    <tr>
                      <th hidden>
                        <label class="pos-rel">
                          <input type="checkbox" class="ace" />
                          <span class="lbl"></span>
                        </label>
                      </th>

                      <th hidden></th>

                      <th style="min-width: 200.3px !important;">
                        <i class="fa fa-book"></i>
                        Nombre del trámite
                      </th>

                      <th class="hidden-xs" style="min-width: 156.017px !important;">
                        <i class="fa fa-briefcase"></i>
                        Dependencia
                      </th>

                      <th class="hidden-xs" style="min-width: 256.9px !important;">
                        <i class="fas fa-file-alt"></i>
                        Documento que se obtiene
                      </th>

                      <th class="hidden-xs" style="min-width: 130.333px !important;">
                        <i class="fa fa-phone"></i>
                        Teléfono
                      </th>

                      <th style="min-width: 131.583px !important;">
                        <i class="fa fa-cogs"></i>
                        Acciones
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    
                   <?=$tr_tramites_dependencia;?>

                  </tbody>
                </table>

              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="close_modal('modal_dependencia')"><i class="fas fa-times"></i> Cerrar</button>
      </div>
    </div>
  </div>
</div>
