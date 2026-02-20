<style>
    .item {
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }     
    
    /* Estilo para los botones dentro de los modales */
    .btn-año {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        color: #0d4f8c;
        font-weight: 500;
        margin-bottom: 10px;
        transition: 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 12px;
    }
    .btn-año:hover {
        background-color: #0d4f8c;
        color: white;
    }
    .modal-title {
        color: white;
    }

    /* --- MEJORA DE TEXTO --- */
    .text-justify {
        text-align: justify;
        line-height: 1.8;
        font-weight: 500; /* Texto un poco más grueso */
        color: #333;
    }
    .text-justify strong {
        font-weight: 700;
        color: #0d4f8c;
    }
    .lista-puntos li {
        padding: 5px 0;
        display: flex;
        align-items: center;
        font-weight: 600; /* Items de lista más gruesos */
    }
    .lista-puntos li i {
        color: #0d4f8c;
        margin-right: 10px;
        font-size: 0.9rem;
    }

    /* --- ESTILOS PARA FLECHAS DEL CARRUSEL --- */
    .owl-nav {
        display: flex;
        justify-content: space-between;
        position: absolute;
        top: 50%;
        width: 100%;
        transform: translateY(-50%);
        pointer-events: none; /* Permite hacer clic en los items de abajo si es necesario */
    }
    .owl-prev, .owl-next {
        pointer-events: auto;
        background: #0d4f8c !important; /* Color institucional */
        color: white !important;
        width: 40px;
        height: 40px;
        border-radius: 50% !important;
        transition: 0.3s;
        display: flex !important;
        align-items: center;
        justify-content: center;
    }
    .owl-prev { margin-left: -20px; }
    .owl-next { margin-right: -20px; }
    .owl-prev:hover, .owl-next:hover {
        background: #C1D100 !important; /* Color secundario (verde) */
        color: #0d4f8c !important;
    }
</style>

<div class="container-fluid bg-breadcrumb2">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">
            Planeación Estratégica
        </h3>
        <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.php" class="text-white">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-white">Gobierno</a></li>
            <li class="breadcrumb-item active text-secondary">Planeación Estratégica</li>
        </ol>    
    </div>
</div>

<div class="puntitos text-center py-4">
    <img src="img/separador.png" alt="Separador">
</div>

<div class="container-fluid py-5">
    <div class="container"> 
        <div class="linea mb-5"></div>       
        <div class="row g-5 align-items-center">
            <div class="col-md-4 d-none d-md-block wow fadeInLeft" data-wow-delay="0.1s">
                <div class="rounded text-center">
                    <img src="img/desc_planeacion.svg" class="img-fluid border-bottom border-5" alt="Icono Planeación" style="width: 80%;">
                </div>
            </div>
            
            <div class="col-12 col-md-8 wow fadeInRight" data-wow-delay="0.3s">
                <p class="mb-4 text-justify">
                    La <strong>planeación estratégica</strong>, en el ámbito de la gestión pública, se concibe como un proceso sistemático que orienta la definición de prioridades, la asignación de recursos y la coordinación de acciones gubernamentales para la atención de problemas públicos, con el propósito de alcanzar objetivos claramente definidos y generar resultados verificables que aporten valor público a la sociedad.
                </p>
                
                <p class="mb-2 text-justify">
                    Bajo este enfoque, la planeación estratégica se articula con el modelo de <strong>Gestión para Resultados (GpR)</strong>, el cual centra su atención en el desempeño institucional, la eficacia de las políticas públicas y la mejora continua de la acción gubernamental, teniendo como pilares fundamentales:
                </p>
                
                <ul class="lista-puntos list-unstyled">
                    <li><i class="fas fa-caret-right"></i> Planeación orientada a resultados</li>
                    <li><i class="fas fa-caret-right"></i> Presupuesto Basado en Resultados (PbR)</li>
                    <li><i class="fas fa-caret-right"></i> Gestión financiera, auditoría y adquisiciones</li>
                    <li><i class="fas fa-caret-right"></i> Gestión de programas y proyectos</li>
                    <li><i class="fas fa-caret-right"></i> Seguimiento y evaluación del desempeño</li>
                </ul>

                <p class="mb-0 text-justify">
                    Derivado de lo anterior, el municipio de <strong>Jesús María</strong> presenta este apartado institucional como un instrumento ciudadano donde se podrán encontrar documentos de interés público tales como: informes de gobierno, planes municipales de desarrollo, indicadores estratégicos de los programas presupuestarios, entre otros.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="container position-relative">
        <div class="linea mb-5"></div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">            
            <div class="p-4 text-center mx-2 item" data-bs-toggle="modal" data-bs-target="#modalInformes">
                <img src="img/planeacion/informes.svg" alt="Informes de Gobierno" class="mb-4">
            </div>

            <div class="p-4 text-center mx-2 item" data-bs-toggle="modal" data-bs-target="#modalPlanes">
                <img src="img/planeacion/plan_municipal.svg" alt="Planes Municipales" class="mb-4">
            </div>

            <div class="p-4 text-center mx-2 item" data-bs-toggle="modal" data-bs-target="#modalMatrices">
                <img src="img/planeacion/matrices.svg" alt="Matrices (MIR)" class="mb-4">
            </div>

            <div class="p-4 text-center mx-2 item" data-bs-toggle="modal" data-bs-target="#modalEvaluaciones">
                <img src="img/planeacion/evaluaciones.svg" alt="Evaluaciones" class="mb-4">
            </div>

            <div class="p-4 text-center mx-2 item">
                <img src="img/planeacion/fichas.svg" alt="Fichas de Monitoreo" class="mb-4">
            </div>

            <div class="p-4 text-center mx-2 item">
                <img src="img/planeacion/presupuesto.svg" alt="Presupuesto Participativo" class="mb-4">
            </div>

            <div class="p-4 text-center mx-2 item">
                <img src="img/planeacion/normatividad.svg" alt="Normatividad" class="mb-4">
            </div>
        </div>
        <div class="linea mt-5"></div>
    </div>
</div>

<div class="modal fade" id="modalInformes" tabindex="-1" aria-labelledby="modalInformesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalInformesLabel">Informes de Gobierno</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p class="text-muted text-center mb-4">Seleccione el Informe que desea consultar</p>
                <div class="row text-center">
                    <div class="col-6"><a href="estaticos/planeacion/informes/1° INFORME 2024-2027.pdf" target="_blank" class="btn btn-año w-100">1° Informe 2024-2027</a></div>
                    <div class="col-6"><a href="estaticos/planeacion/informes/3° INFORME 2021-2024.pdf" target="_blank" class="btn btn-año w-100">3° Informe 2021-2024</a></div>
                    <div class="col-6"><a href="estaticos/planeacion/informes/2° INFORME 2021-2024.pdf" target="_blank" class="btn btn-año w-100">2° Informe 2021-2024</a></div>
                    <div class="col-6"><a href="estaticos/planeacion/informes/1° INFORME 2021-2024.pdf" target="_blank" class="btn btn-año w-100">1° Informe 2021-2024</a></div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalPlanes" tabindex="-1" aria-labelledby="modalPlanesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalPlanesLabel">Plan Municipal de Desarrollo</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p class="text-muted text-center mb-4">Seleccione el Plan que desea consultar</p>
                <div class="row text-center">
                    <div class="col-6"><a href="estaticos/planeacion/informes/1° INFORME 2024-2027.pdf" target="_blank" class="btn btn-año w-100">PMD 2025-2027</a></div>
                    <div class="col-6"><a href="estaticos/planeacion/informes/3° INFORME 2021-2024.pdf" target="_blank" class="btn btn-año w-100">PMD 2021-2024</a></div>
                    <div class="col-6"><a href="estaticos/planeacion/informes/2° INFORME 2021-2024.pdf" target="_blank" class="btn btn-año w-100">PMD 2017-2019</a></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEvaluaciones" tabindex="-1" aria-labelledby="modalEvaluacionesLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalEvaluacionesLabel">Evaluaciones de Desempeño</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p class="text-muted text-center mb-4">Listado de evaluaciones y archivos disponibles</p>
                <div class="row g-3">
                    <?php
                    $directorio = "../../estaticos/planeacion/evaluaciones/";                  

                    if (is_dir($directorio)) {
                        $archivos = scandir($directorio);
                        $conteo = 0;
                        foreach ($archivos as $archivo) {
                            if ($archivo !== '.' && $archivo !== '..' && strtolower(pathinfo($archivo, PATHINFO_EXTENSION)) == 'pdf') {
                                $conteo++;
                                $nombreVisible = str_replace(".pdf", "", $archivo);
                                echo "<div class=\"col-6 col-md-4 col-lg-3\">
                                        <a href=\"{$directorio}{$archivo}\" target=\"_blank\" class=\"btn btn-año w-100\">
                                            <i class=\"fas fa-file-pdf text-danger\"></i>
                                            <small style=\"font-size: 0.75rem;\">{$nombreVisible}</small>
                                        </a>
                                    </div>";
                            }
                        }
                        if ($conteo == 0) echo "<p class='text-center'>No hay archivos disponibles por el momento.</p>";
                    } else {
                        echo "<p class='text-center text-danger'>La carpeta de evaluaciones no existe o la ruta es incorrecta.</p>";
                    }
                    ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalMatrices" tabindex="-1" aria-labelledby="modalMatricesLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalInformesLabel">Matrices de Indicadores</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p class="text-muted text-center mb-4">Seleccione el documento que desea consultar</p>
                <div class="row text-center">
                    <div class="col-6"><a href="#" target="_blank" class="btn btn-año w-100">MIR 2025</a></div>
                    <div class="col-6"><a href="estaticos/planeacion/matrices/MIR 2024.pdf" target="_blank" class="btn btn-año w-100">MIR 2024</a></div>
                    <div class="col-6"><a href="#" target="_blank" class="btn btn-año w-100">MIR 2023</a></div>
                    <div class="col-6"><a href="#" target="_blank" class="btn btn-año w-100">MIR 2022</a></div>
                    <div class="col-6"><a href="estaticos/planeacion/matrices/MIR 2021.pdf" target="_blank" class="btn btn-año w-100">MIR 2021</a></div>
                    <div class="col-6"><a href="estaticos/planeacion/matrices/MIR 2020.pdf" target="_blank" class="btn btn-año w-100">MIR 2020</a></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(".testimonial-carousel").owlCarousel({
            autoplay: false,
            smartSpeed: 1000,
            center: false,
            dots: true,
            loop: true,
            margin: 25,
            nav : true,
            navText: [
                '<i class="fas fa-chevron-left"></i>',
                '<i class="fas fa-chevron-right"></i>'
            ],
            responsive: {
                0:{ items:1 },
                576:{ items:1 },
                768:{ items:2 },
                992:{ items:3 }
            }
        });
    });
</script>