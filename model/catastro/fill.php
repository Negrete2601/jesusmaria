<?php
include('../../controller/catastro/funciones_catastro.php');

$cuenta = get_detalle_cuenta($_POST['cuenta']);
if($cuenta) 
{
    echo '
    <div class="col-lg-8 animate__animated animate__fadeInUp">
        <div class="card border-0 shadow-lg">
            <div class="card-header bg-primary text-white p-3 text-center">
                <h5 class="mb-0 text-white"><i class="fas fa-file-invoice-dollar me-2"></i> Información Catastral</h5>
            </div>
            
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <tbody>
                            <tr>
                                <th class="w-50 ps-4 text-muted">Cuenta Catastral Consultada</th>
                                <td class="fw-bold text-dark">'.$cuenta['cuenta'].'</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Tipo de Terreno</th>
                                <td class="fw-bold">'.$cuenta['tipo'].'</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Superficie de Terreno (m²)</th>
                                <td class="fw-bold">'.number_format($cuenta['m2_terreno'], 2).' m²</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Valor Unitario</th>
                                <td class="fw-bold text-success">$ '.number_format($cuenta['valor_unitario'], 2).'</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Valor del Terreno</th>
                                <td class="fw-bold text-success">$ '.number_format($cuenta['valor_terreno'], 2).'</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Metros Construidos (m²)</th>
                                <td class="fw-bold">'.number_format($cuenta['m2_construidos'], 2).' m²</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Valor de la Construcción</th>
                                <td class="fw-bold text-success">$ '.number_format($cuenta['valor_construccion'],2).'</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Valor de la Superficie</th>
                                <td class="fw-bold text-success">$ '.number_format($cuenta['valor_superficie'], 2).'</td>
                            </tr>
                            <tr class="table-primary">
                                <th class="ps-4 fs-5 text-primary">Valor Catastral Total</th>
                                <td class="fs-5 fw-bold text-primary">$ '.number_format($cuenta['valor_catastral'], 2).'</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="card-footer bg-white text-center p-4">
                <button class="btn btn-outline-secondary me-2" onclick="document.getElementById(\'cuenta_catastral\').value=\'\'; document.getElementById(\'resultado_catastro\').innerHTML=\'\';">
                    <i class="fas fa-redo me-2"></i>Nueva Consulta
                </button>
                <button class="btn btn-primary" onclick="window.print()">
                    <i class="fas fa-print me-2"></i>Imprimir Resultado
                </button>
            </div>
        </div>
    </div>';    
} else {
    echo "Petición no válida.";
}
?>