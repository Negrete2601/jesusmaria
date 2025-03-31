<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Presidencia Municipal de Jesús María</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- FAVICON -->
        <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/svg+xml" href="img/favicon/favicon.svg" />
		<link rel="shortcut icon" href="img/favicon/favicon.ico" />
		<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png" />
		<link rel="manifest" href="img/favicon/site.webmanifest" />

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/dataTables.css">

        <!-- Template Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body style="font-family: 'Arial', sans-serif;">
    	<!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
        <!-- Spinner End -->

		<!-- Topbar Start -->
		<div class="container-fluid bg-primary px-5 d-none d-lg-block" style="background-color: #0d4f8c!important;">
		    <div class="row gx-0 align-items-center">
		        <div class="col-lg-5 text-center text-lg-start mb-lg-0">
		            <div class="d-flex">
		            	<a href="tel:4499650088" class="me-0" style="color: white;"><i class="fa-solid fa-square-phone text-secondary me-2"></i>449 965 00 88</a>
		            </div>
		        </div>
		        <div class="col-lg-4 text-center text-lg-end">
		            <div class="d-inline-flex align-items-center" style="height: 45px;">
		            </div>
		        </div>
		        <div class="col-lg-3 row-cols-1 text-center text-lg-end mb-2 mb-lg-0">
		            <div class="d-inline-flex align-items-center" style="justify-content: flex-end; height: 45px;">
		                <a class="btn btn-sm" href="https://www.facebook.com/JesusMariaMunicipio/" target="_blank" style="color: white; font-size: 1.5rem;"><i class="fa-brands fa-facebook"></i></a>
		                <a class="btn btn-sm" href="https://www.instagram.com/jesusmaria_municipio/" target="_blank" style="color: white; font-size: 1.5rem;"><i class="fa-brands fa-instagram"></i></a>
		                <a class="btn btn-sm" href="https://www.tiktok.com/@municipiojm" target="_blank" style="color: white; font-size: 1.5rem;"><i class="fa-brands fa-tiktok"></i></a>
		                <a class="btn btn-sm" href="" target="_blank" style="color: white; font-size: 1.5rem;"><i class="fa-brands fa-x-twitter fw-normal text-secondary"></i></a>
		                <a class="btn btn-sm" href="https://www.youtube.com/channel/UCsrgM_afF4yD2xLY8y3fC_g" target="_blank" style="color: white; font-size: 1.5rem;"><i class="fab fa-youtube fw-normal text-secondary"></i></a>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Topbar End -->
        
        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0" style="background-color: #ededec !important;">
                <a href="" class="navbar-brand p-0">
                    <h1 class="display-5 text-secondary m-0"></h1><img src="img/brand-logo.png" class="img-fluid" alt="">
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        
                        <a href="index.php" class="nav-item nav-link active">Inicio</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Ciudad de Vanguardia</span></a>
                            <div class="dropdown-menu m-0">                            
                                <a href="javascript:cambiarcont('view/miorgullo/historia.php');" class="dropdown-item">Historia</a>                                
                                <a href="javascript:cambiarcont('view/miorgullo/escudo.php');" class="dropdown-item">Escudo</a>                               
                                <a href="javascript:cambiarcont('view/miorgullo/datos.php');" class="dropdown-item">Datos Relevantes</a>
                                <a href="javascript:cambiarcont('view/miorgullo/mision.php');" class="dropdown-item">Visión</a>
                                <a href="javascript:cambiarcont('view/miorgullo/mision.php');" class="dropdown-item">Misión</a>
                                <a href="javascript:cambiarcont('view/miorgullo/valores.php');" class="dropdown-item">Valores y Principios</a>                                 
                              	<!-- Submenú para Revista El Chicahual -->
		                        <div class="dropdown-submenu">
		                            <a href="#" class="dropdown-item dropdown-toggle">Revista El Chicahual</a>
		                            <div class="dropdown-menu m-0">
		                                <a href="estaticos/2020/revista/ElChicahual2.pdf" target="_blank" class="dropdown-item">El Chicahual No2</a>
		                                <a href="estaticos/2020/revista/ElChicahual3.pdf" target="_blank" class="dropdown-item">El Chicahual No3</a>
		                                <a href="estaticos/2020/revista/ElChicahual4.pdf" target="_blank" class="dropdown-item">El Chicahual No4</a>
		                                <a href="estaticos/2020/revista/ElChicahual5.pdf" target="_blank" class="dropdown-item">El Chicahual No5</a>
		                                <a href="estaticos/2020/revista/ElChicahual6.pdf" target="_blank" class="dropdown-item">El Chicahual No5</a>
		                            </div>
		                        </div>                                
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Gobierno</span></a>
                            <div class="dropdown-menu show" aria-labelledby="navbarDropdownMenuLink">
					          	<a class="dropdown-item" href="estaticos/2022/plan/Plan_de_Desarrollo_municipal_JM_2021-2024.pdf" target="_blank">Plan de Desarrollo Municipal 2021-2024</a>
	    			          	<a class="dropdown-item" href="estaticos/2020/D.O.DISTRIBUCIONDEFONDOSFISMDFYFOTAMUNDF3970.pdf" target="_blank">D.O. Distribución de Fondos FISMDF Y FOTAMUNDF 3970</a>
	    			          	<!-- <a href="javascript:cambiarcont('view/gobierno/cabildo.php');" class="dropdown-item">Cabildo</a> -->	                           
		    			        <a class="dropdown-item" href="estaticos/2022/convocatoria%20cabildo%20abierto_compressed.pdf" target="_blank">Cabildo Abierto</a>
		    			        <!-- <a href="javascript:cambiarcont('view/gobierno/gabinete.php');" class="dropdown-item">Gabinete</a> -->
		                        <a class="dropdown-item" href="estaticos/2020/mir/MIR2020.PDF" target="_blank">Matriz de Indicadores de Resultados 2020</a>
		    			        <a class="dropdown-item" href="estaticos/2021/mir/MIR2021.PDF" target="_blank">Matriz de Indicadores de Resultados 2021</a>
		    			        <a class="dropdown-item" href="estaticos/2021/mir/gobierno/ReporteMIR2021.pdf" target="_blank">Reporte de Avance de los indicadores 2021</a>
		    			        <a href="javascript:cambiarcont('view/gobierno/directorio.php');" class="dropdown-item">Directorio</a>
		    			        <a href="javascript:cambiarcont('view/sala_prensa/sala_prensa.php');" class="dropdown-item">Sala de prensa</a>
		                        <a class="dropdown-item" href="/informe" target="_blank">Informe de Gobierno</a>
						        <a href="javascript:cambiarcont('view/gobierno/buzon.php');" class="dropdown-item">Buzón de Sugerencias</a>	                        
		    			        <div class="dropdown-submenu">
		                            <a href="#" class="dropdown-item dropdown-toggle">Licitaciones</a>
		                            <div class="dropdown-menu m-0">
		                                <a href="javascript:cambiarcont('view/gobierno/licitaciones.php');" class="dropdown-item">Obras Públicas</a>
		                            </div>
		                        </div>
					        </div>
                        </div>
                        <div class="nav-item dropdown">
					        <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Trámites en línea</span></a>
					        <div class="dropdown-menu show" aria-labelledby="navbarDropdownMenuLink">
	                         <a class="dropdown-item" href="https://jesusmaria.recaudacion.net/SIM/predial.jsp" target="_blank">Pago de Predial</a>
					          <a class="dropdown-item" href="https://jesusmaria.recaudacion.net/SIM/datosTimbrado.jsp" target="_blank">Factura en Línea</a>
	                          <a href="javascript:cambiarcont('view/tramites_linea/cartografia.php');" class="dropdown-item">Cartografía</a>
					          <a class="dropdown-item" href="http://desarrollo-economico.jesusmaria.gob.mx/" target="_blank">Bolsa de trabajo</a>
					          <a class="dropdown-item" href="javascript:cambiarcont('view/tramites_linea/agenda_regulatoria.php');">Agenda Regulatoria</a>
					          <a class="dropdown-item" href="http://juventud.jesusmaria.gob.mx/" target="_blank">Servicio Social y Prácticas Profesionales</a>
					          <a class="dropdown-item" href="http://jesusmaria.gob.mx/estrado/" target="_blank">Estrado Electrónico</a>
					          <a class="dropdown-item" href="http://jesusmaria.gob.mx/directorio_empresarial/" target="_blank">Directorio Empresarial</a>
					          <a class="dropdown-item" href="http://jesusmaria.gob.mx/cedeco/" target="_blank">Talleres CEDECOS</a>
					          <a class="dropdown-item" href="javascript:pedirFolio();">Consultar Estatus de su Petición</a>

					        </div>
                        </div>
                        <a href="javascript:cambiarcont('view/tramites_linea/mejora_regulatoria.php');" class="nav-item nav-link">Mejora Regulatoria</a>
                        
                      <a href="https://transparencia.jesusmaria.gob.mx" target="_blank" class="nav-item nav-link">Transparecia</a>                        
                    </div>
                    
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <!-- CONTENIDO DE LAS PAGINAS HIJAS -->
        <div class="main-content">
			<div class="main-content-inner" id="body_content" name="body_content"></div>
			<div id="load_modal_dependencias"></div>
			<div id="load_modal_info"></div>
		</div>

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
	        <div class="pre-footer">			
				<div class="emblem">                        
					<a href="javascript:cambiarcont('view/miorgullo/inicio.php');">
						<img src="./img/logo_v.png" class="imagenpie">
					</a>           
				</div>
				
				<div class="mapa">
					<div>
						<div>
							<span>Ciudad de Vanguardia</span>
							<ul>
								<a href="javascript:pagecontent('view/miorgullomigente/historia.php');">
									<li>Historia</li>
									
								</a>

								<a href="javascript:pagecontent('view/miorgullomigente/escudo.php');">
									<li>Escudo</li>
									
								</a>

								<a href="javascript:pagecontent('view/miorgullomigente/datos_relevantes.php');">
									<li>Datos Relevantes</li>
									
								</a>

								<a href="javascript:pagecontent('view/miorgullomigente/vision.php');">
									<li>Visión</li>
									
								</a>

								<a href="javascript:pagecontent('view/miorgullomigente/mision.php');">
									<li>Misión</li>
									
								</a>

								<a href="javascript:pagecontent('view/miorgullomigente/valores_principios.php');">
									<li>Valores y Principios</li>
									
								</a>
							</ul>
						</div>
					</div>

					<div>
						<div>
							<span>Gobierno</span>
							<ul>
								<a href="estaticos/2020/plan/Plan_de_Desarrollo_municipal_JM_2019-2021.pdf" target="_blank">
									<li>PDM 2019-2021</li>
									
								</a>
								
								<a href="estaticos/2022/plan/Plan_de_Desarrollo_municipal_JM_2021-2024.pdf" target="_blank">
									<li>PDM 2021-2024</li>
									
								</a>
								
								<a href="javascript:pagecontent('view/gobierno/cabildo.php');">
									<li>Cabildo</li>
									
								</a>

								<a href="javascript:pagecontent('view/gobierno/gabinete.php');">
									<li>Gabinete</li>
									
								</a>

								<a href="javascript:pagecontent('view/gobierno/directorio.php');">
									<li>Directorio</li>
									
								</a>
								
								<a href="javascript:pagecontent('view/buzon/buzon.php');">
									<li>Buzón de sugerencias</li>
									
								</a>
							</ul>
						</div>
					</div>
						
					<div>
						<div>
							<span>Trámites en línea</span>
							<ul>
							    <a onclick="info_predial();">
		    					    <li>Predial</li>
		    					</a>

								<a href="javascript:pagecontent('view/tramites_linea/dependencias.php');">
									<li>Dependencias</li>
								</a>

								<a href="javascript:pagecontent('view/tramites_linea/cartografia.php');">
									<li>Cartografía</li>
								</a>
								
								<a href="javascript:pagecontent('view/tramites_linea/mejora_regulatoria.php');">
									<li>Agenda Regulatoria</li>
								</a>
								<a href="http://juventud.jesusmaria.gob.mx/" target="_blank"><li>Servicio Social y Prácticas Profesionales</li></a>
						        <a href="http://jesusmaria.gob.mx/estrado/" target="_blank"><li>Estrado Electrónico</li></a>
						        <a href="http://jesusmaria.gob.mx/directorio_empresarial/" target="_blank"><li>Directorio Empresarial</li></a>
							</ul>
							
						</div>
					</div>

					<div>
						<div>
							<a href="javascript:pagecontent('view/tramites_linea/cartografia.php');" target="_blank">Transparencia</a>
						</div>
					</div>	
				</div>

				<div class="social">
		                <a class="btn btn-outline-light btn-square me-2 icon-footer" href="https://www.facebook.com/JesusMariaMunicipio/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
		                <a class="btn btn-outline-light btn-square me-2 icon-footer" href="https://x.com/Jesus_Maria_" target="_blank"><i class="fa-brands fa-x-twitter fw-normal text-secondary"></i></a>
		                <a class="btn btn-outline-light btn-square me-2 icon-footer" href="https://www.instagram.com/jesusmaria_municipio/" target="_blank"><i class="fab fa-instagram fw-normal text-secondary"></i></a>
		                <a class="btn btn-outline-light btn-square me-2 icon-footer" href="https://www.youtube.com/channel/UCsrgM_afF4yD2xLY8y3fC_g" target="_blank"><i class="fab fa-youtube fw-normal text-secondary"></i></a>
		                <a class="btn btn-outline-light btn-square me-2 icon-footer" href="https://www.tiktok.com/@municipiojm" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
				</div>
			</div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
		<div class="container-fluid copyright py-3" style="border-top: 1px solid #dee2e6;">
		    <div class="container">
		        <div class="row text-center" style="">
		        	<div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-2"></div>
		        	<div class="col-12 col-md-4 col-lg-4 col-xl-4 mb-2">
		        		<img src="img/lcopy.png" style="width: 80%;">
		        	</div>
		            <div class="col-12">
		                <span>
		                    Municipio de Jesús María 2024 - 2027
		                </span>
		            </div>
		            <div class="col-12">
		                <span>
		                    Calle Emiliano Zapata No. 109 - Colonia Centro, Jesús María, Aguascalientes - C.P. 20920
		                </span>
		            </div>
		            <div class="col-12">
		                <span>
		                    &copy; 2025 Coordinación de Innovación Tecnológica del Municipio de Jesús María · Todos los derechos reservados
		                </span>
		            </div>
		        </div>
		    </div>
		</div>
		<div class="col-12 pieimg">
			<img src="img/pie.png">
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
	    <script type="text/javascript" charset="utf8" src="js/dataTables.js"></script>
		<script src="https://kit.fontawesome.com/477a7a7e11.js" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	    <!-- Template Javascript -->
	    <script src="js/main.js"></script>
	    <script>
	        function cambiarcont(pagina)
			{
			    $("#body_content").html('<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"><div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only">Cargando...</span></div></div>');
			    $("#body_content").load(pagina);
				$("#body_content").fadeIn(10000);
			}
	        $(document).ready(function() {
					
				$("#body_content").html('<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"><div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status"><span class="sr-only">Cargando...</span></div></div>');
				$('#body_content').load('view/miorgullo/inicio.php');
				$("#body_content").fadeIn(10000);
					    	
			});

			function fill_modal_dependencias(id_dependencia){
				var xmlhttp;

		        if (window.XMLHttpRequest){
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp=new XMLHttpRequest();
		        }
		        
		        else{// code for IE6, IE5
		            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		        }

		        xmlhttp.onreadystatechange=function(){
		            
		            if (xmlhttp.readyState==4 && xmlhttp.status==200){
		                //document.getElementById("loading").innerHTML = ''; // Hide the image after the response from the
		                document.getElementById("load_modal_dependencias").innerHTML=xmlhttp.responseText;
		                //waitingDialog.hide();
		                $('#modal_dependencia').modal('show');
		                tablas();
		            }
		        }

		        //id = $(id_dependencia).attr("id");
		        var datos_modal = "id_dependencia="+id_dependencia;

		        //waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
		        xmlhttp.open("POST","./model/dependencias/modal_dependencias.php",true);
		        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		        xmlhttp.send(datos_modal);
		    }	 

		    function fill_modal_info(id_tramite){
				var xmlhttp;

		        if (window.XMLHttpRequest){
		            // code for IE7+, Firefox, Chrome, Opera, Safari
		            xmlhttp=new XMLHttpRequest();
		        }
		        
		        else{// code for IE6, IE5
		            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		        }

		        xmlhttp.onreadystatechange=function(){
		            
		            if (xmlhttp.readyState==4 && xmlhttp.status==200){
		                //document.getElementById("loading").innerHTML = ''; // Hide the image after the response from the
		                document.getElementById("load_modal_info").innerHTML=xmlhttp.responseText;
		                //waitingDialog.hide();
		                $('#modal_info').modal('show');
		                modales_abrir_cerrar();
		            }
		        }

		        
		        var datos_modal = "id_tramite="+id_tramite;

		        //waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
		        xmlhttp.open("POST","./model/dependencias/modal_info.php",true);
		        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		        xmlhttp.send(datos_modal);
		    }

		    function modales_abrir_cerrar(){

		    	$('#modal_info').on('shown.bs.modal', function (e) {
					$('#modal_dependencia').modal('toggle');
				});

				$('#modal_info').on('hidden.bs.modal', function (e) {
					$('#modal_dependencia').modal('toggle');
				});
			}

			function close_modal(modal){
				var id_modal= "#"+modal;
				console.log(id_modal);
				$(id_modal).modal('hide');
			}

			function tablas(){
				$(document).ready( function () {
				    //$('#table_dependencias').DataTable();
				    $('#table_dependencias').DataTable({
				        responsive: true
				      });
				});
			}

			function pedirFolio() {
		        Swal.fire({
		            title: "Ingrese el folio",
		            text: "Favor de ingresar el folio de su petición",
		            input: "text",
		            inputPlaceholder: "Escriba el folio aquí",
		            showCancelButton: true,
		            confirmButtonText: "Consultar",
		            cancelButtonText: "Cancelar",
		            inputValidator: (value) => {
		                if (!value) {
		                    return "Debe ingresar un folio";
		                }
		            }
		        }).then((result) => {
		            if (result.isConfirmed) {
		                let folio = result.value;

		                // Simulando petición AJAX con setTimeout (Reemplaza con tu AJAX real)
		                setTimeout(() => {
		                    let estatus = obtenerEstatus(folio); // Simulación de respuesta

		                    Swal.fire({
		                        title: "Estatus del folio",
		                        text: `El estatus del folio ${folio} es: ${estatus}`,
		                        icon: "info"
		                    });
		                }, 1000);
		            }
		        });
		    }

		    // Simulación de función para obtener estatus (debería venir de tu backend)
		    function obtenerEstatus(folio) {
		        const estados = ["Pendiente", "Aprobado", "Rechazado", "En proceso"];
		        return estados[Math.floor(Math.random() * estados.length)];
		    }
	    </script>
    </body>
</html>