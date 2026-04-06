<?php

if(isset($_POST['cuenta'])) {
    $cuenta = $_POST['cuenta'];
    $result = '
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
                                <td class="fw-bold text-dark">'.$cuenta.'</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Tipo de Terreno</th>
                                <td class="fw-bold">Urbano Habitacional</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Superficie de Terreno (m²)</th>
                                <td class="fw-bold">250.00 m²</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Valor Unitario</th>
                                <td class="fw-bold text-success">$ 1,500.00</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Valor del Terreno</th>
                                <td class="fw-bold text-success">$ 375,000.00</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Metros Construidos (m²)</th>
                                <td class="fw-bold">185.20 m²</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Valor de la Construcción</th>
                                <td class="fw-bold text-success">$ 875,000.00</td>
                            </tr>
                            <tr>
                                <th class="ps-4 text-muted">Valor de la Superficie</th>
                                <td class="fw-bold text-success">$ 375,000.00</td>
                            </tr>
                            <tr class="table-primary">
                                <th class="ps-4 fs-5 text-primary">Valor Catastral Total</th>
                                <td class="fs-5 fw-bold text-primary">$ 1,250,000.00</td>
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
    echo $result;
} else {
    echo "Petición no válida.";
}
?>