<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Presidencia municipal de Jesús María</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/477a7a7e11.js" crossorigin="anonymous"></script>

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-primary px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-5 text-center text-lg-start mb-lg-0">
            <div class="d-flex">
                <a href="#" class="text-muted me-4"><i class="fas fa-envelope text-secondary me-2"></i>Example@gmail.com</a>
                <a href="#" class="text-muted me-0"><i class="fas fa-phone-alt text-secondary me-2"></i>+01234567890</a>
            </div>
        </div>
        <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href=""><i class="fab fa-youtube fw-normal text-secondary"></i></a>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="#" class="text-muted me-2"> Soporte</a><small> / </small>
                <a href="#" class="text-muted mx-2"> Ayuda</a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
        
        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="display-5 text-secondary m-0"><img src="img/brand-logo.png" class="img-fluid" alt=""></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Inicio</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">¡Mi orgullo, mi gente!</span></a>
                            <div class="dropdown-menu m-0">
                            <?php
                            echo '
                                <a href="javascript:cambiarcont(\'view/miorgullo/historia.php\');" class="dropdown-item">Historia</a>
                                
                                <a href="javascript:cambiarcont(\'view/miorgullo/escudo.php\');" class="dropdown-item">Escudo</a>
                               
                                <a href="javascript:cambiarcont(\'view/miorgullo/datos.php\');" class="dropdown-item">Datos Relevantes</a>
                                <a href="javascript:cambiarcont(\'view/miorgullo/mision.php\');" class="dropdown-item">Visión</a>
                                <a href="javascript:cambiarcont(\'view/miorgullo/mision.php\');" class="dropdown-item">Misión</a>
                                <a href="javascript:cambiarcont(\'view/miorgullo/valores.php\');" class="dropdown-item">Valores y Principios</a>
                                 ';
                            ?>
                              <!-- Submenú para Revista El Chicahual -->
                        <div class="dropdown-submenu">
                            <a href="#" class="dropdown-item dropdown-toggle">Revista El Chicahual</a>
                            <div class="dropdown-menu">
                                <a href="recursos/MiOrgullo/ElChicahual2.pdf" target="_blank" class="dropdown-item">El Chicahual No2</a>
                                <a href="recursos/MiOrgullo/ElChicahual3.pdf" target="_blank" class="dropdown-item">El Chicahual No3</a>
                                <a href="recursos/MiOrgullo/ElChicahual4.pdf" target="_blank" class="dropdown-item">El Chicahual No4</a>
                                <a href="recursos/MiOrgullo/ElChicahual5.pdf" target="_blank" class="dropdown-item">El Chicahual No5</a>
                                <a href="recursos/MiOrgullo/ElChicahual6.pdf" target="_blank" class="dropdown-item">El Chicahual No5</a>
                            </div>
                        </div>
                                
                                
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Gobierno</span></a>
                            <div class="dropdown-menu show" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="recursos/gobierno/Plan_de_Desarrollo_municipal_JM_2019-2021.pdf" target="_blank">Plan de Desarrollo Municipal 2019-2021</a>
				          <a class="dropdown-item" href="recursos/gobierno/Plan_de_Desarrollo_municipal_JM_2021-2024.pdf" target="_blank">Plan de Desarrollo Municipal 2021-2024</a>
    			          <a class="dropdown-item" href="recursos/gobierno/D.O.DISTRIBUCIONDEFONDOSFISMDFYFOTAMUNDF3970.pdf" target="_blank">D.O. DISTRIBUCIÓN DE FONDOS FISMDF Y FOTAMUNDF 3970</a>
    			          <?php
                            echo '
                         <a href="javascript:cambiarcont(\'view/gobierno/cabildo.php\');" class="dropdown-item">Cabildo</a>
                           
    			          <a class="dropdown-item" href="recursos/gobierno/convocatoria%20cabildo%20abierto_compressed.pdf" target="_blank">Cabildo Abierto</a>
    			          <a href="javascript:cambiarcont(\'view/gobierno/gabinete.php\');" class="dropdown-item">Gabinete</a>
                          
    			          <a class="dropdown-item" href="recursos/gobierno/MIR2020.PDF" target="_blank">Matriz de Indicadores de Resultados 2020</a>
    			          <a class="dropdown-item" href="recursos/gobierno/MIR2021.PDF" target="_blank">Matriz de Indicadores de Resultados 2021</a>
    			          <a class="dropdown-item" href="recursos/gobierno/ReporteMIR2021.pdf" target="_blank">Reporte de Avance de los indicadores 2021</a>
    			          <a href="javascript:cambiarcont(\'view/gobierno/directorio.php\');" class="dropdown-item">Directorio</a>
    			          <a href="javascript:cambiarcont(\'view/gobierno/sala_prensa.php\');" class="dropdown-item">Sala de prensa</a>
                          
    			          <a class="dropdown-item" href="/informe" target="_blank">Informe de Gobierno</a>
    			          <a class="dropdown-toggle dropdown-item" href="#" id="licitacionesLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Licitaciones</a>
				          <div class="dropdown-menu" aria-labelledby="licitacionesLink">
				          <a href="javascript:cambiarcont(\'view/gobierno/.php\');" class="dropdown-item">Obras Publicas</a>
				          </div>
				          
				         <a href="javascript:cambiarcont(\'view/gobierno/buzon.php\');" class="dropdown-item">Buzón</a>
                        
				        </div>
                        </div>
                        <div class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle bjm" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				          Trámites en línea
				        </a>
				        <div class="dropdown-menu show" aria-labelledby="navbarDropdownMenuLink">
                         <a class="dropdown-item" href="https://jesusmaria.recaudacion.net/SIM/predial.jsp" target="_blank">Pago de Predial</a>
				          <a class="dropdown-item" href="https://jesusmaria.recaudacion.net/SIM/datosTimbrado.jsp" target="_blank">Factura en Línea</a>
                          <a href="javascript:cambiarcont(\'view/tramites_linea/dependencias.php\');" class="dropdown-item">Dependencias</a>
                          <a href="javascript:cambiarcont(\'view/tramites_linea/cartografia.php\');" class="dropdown-item">Cartografía</a>
                           ';
                            ?>
				          <a class="dropdown-item" href="http://desarrollo-economico.jesusmaria.gob.mx/" target="_blank">Bolsa de trabajo</a>
				          <a class="dropdown-item" href="javascript:pagecontent('view/tramites_linea/mejora_regulatoria.php');">Agenda Regulatoria</a>
				          <a class="dropdown-item" href="http://juventud.jesusmaria.gob.mx/" target="_blank">Servicio Social y Prácticas Profesionales</a>
				          <a class="dropdown-item" href="http://jesusmaria.gob.mx/estrado/" target="_blank">Estrado Electrónico</a>
				          <a class="dropdown-item" href="http://jesusmaria.gob.mx/directorio_empresarial/" target="_blank">Directorio Empresarial</a>
				          <a class="dropdown-item" href="http://jesusmaria.gob.mx/cedeco/" target="_blank">Talleres CEDECOS</a>
				        </div>
                        </div>
                        <?php
                            echo '
                       <a href="javascript:cambiarcont(\'view/tramites_linea/mejora_regulatoria.php\');" class="nav-item nav-link">Mejora Regulatoria</a>
                        ';
                            ?>
                        <a href="https://turismo.jesusmaria.gob.mx/" class="nav-item nav-link" target="_blank">Turismo</a>
                        <a href="https://transparencia.jesusmaria.gob.mx/#/" class="nav-item nav-link">Transparecia</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Consulta Evaluación</span></a>
                            <div class="dropdown-menu m-0">
                                <a href="feature.html" class="dropdown-item">Feature</a>
                                <a href="countries.html" class="dropdown-item">Countries</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="training.html" class="dropdown-item">Training</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->


        <div class="main-content">

				<div class="main-content-inner" id="body_content" name="body_content"></div>
			</div>

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-secondary me-2"></i>
                                <a class="btn mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Opening Time</h4>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Mon - Friday:</h6>
                                <p class="text-white mb-0">09.00 am to 07.00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Satday:</h6>
                                <p class="text-white mb-0">10.00 am to 05.00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Vacation:</h6>
                                <p class="text-white mb-0">All Sunday is our vacation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-secondary mb-4">Our Services</h4>
                            <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Business</a>
                            <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Evaluation</a>
                            <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Migrate</a>
                            <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Study</a>
                            <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Counselling</a>
                            <a href="#" class=""><i class="fas fa-angle-right me-2"></i> Work / Career</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-secondary mb-4">Newsletter</h4>
                            <p class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="position-relative mx-auto rounded-pill">
                                <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span ><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        function cambiarcont(pagina)
			{
			    $("#body_content").html("<img src='img/exit.gif' class='img-responsive center-block' alt='Cargando...' />");
			    $("#body_content").load(pagina);
				$("#body_content").fadeIn(10000);
			}
        $(document).ready(function() {
				
				    	$("#body_content").html("<img src='img/exit.gif' class='img-responsive center-block' alt='Cargando...' />");
					    $('#body_content').load('view/miorgullo/inicio.php');
						$("#body_content").fadeIn(10000);
				    	
			});
    </script>
    </body>

</html>