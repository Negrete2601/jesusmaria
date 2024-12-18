<?php
    require("../../model/dependencias/fill.php");
    $dependencias = fill_secretarias();
    $tr_dependencias = fill_tr_dependencias($dependencias);
    $tr_dependencias_table = fill_tr_dependencias_table($dependencias);
    require("../../model/banners/fill.php");
    $banners = fill_banner();
    $tr_banner = fill_tr_banner($banners);
?>
 <!-- Carousel Start -->
 <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                
                <div class="carousel-inner" role="listbox">
                   <?=$tr_banner?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-secondary wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-secondary wow fadeInRight" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
         <!-- Contact Start -->
        <div class="container-fluid contact overflow-hidden pb-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h5 class="sub-title text-primary px-3">Trámites</h5>
                    </div>
                    <h1 class="display-5 mb-4">Más buscados</h1>
                </div>
                <div class="office pt-5">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s" onclick="fill_modal_info(74);">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/n_o.png" class="img-fluid w-100 rounded" alt="">
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s" onclick="fill_modal_info(72);">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/permiso.png" class="img-fluid w-100 rounded" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s" onclick="fill_modal_info(1);">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/sare.png" class="img-fluid w-100 rounded" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s" onclick="fill_modal_dependencias(6);">
                            <div class="office-item p-4">
                                <div class="office-img mb-4">
                                    <img src="img/uso_suelo.png" class="img-fluid w-100 rounded" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
         <!-- About Start -->
        <div class="container-fluid counter-facts2 py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="bg-light rounded">
                            <img src="img/brand-logo.png" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                            <img src="img/rectificacion.png" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image">
                        </div>
                    </div>
                    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
    <h5 class="sub-title pe-3">Trámites</h5>
    <h1 class="display-5 mb-4">Por dependencia:</h1>
    <div class="row">
        <?=$tr_dependencias?>
    </div>
</div>

                </div>
            </div>
        </div>
        <!-- About End -->   
          <!-- Features Start -->
        <div class="container-fluid features overflow-hidden py-5 colorfond">
            <div class="container" >
                <div class="row g-4 justify-content-center text-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="btn btn-secondary rounded-pill" href="javascript:cambiarcont('view/gobierno/buzon.php');"> 
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <i class="fas fa-envelope fa-4x text-primary"></i>
                            </div>
                            <div class="feature-content d-flex flex-column">
                               <h5 class="mb-3">Buzón de Quejas</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="btn btn-secondary rounded-pill" href="https://wa.me/524495427445?text=Hola, estoy interesado en más información." target="_blank">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <i class="fab fa-whatsapp fa-4x text-primary"></i>
                            </div>
                            <div class="feature-content d-flex flex-column">                                
                                 <h5 class="mb-3">WhatsApp</h5>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="btn btn-secondary rounded-pill" href="https://jesusmaria.recaudacion.net/SIM/predial.jsp" target="_blank">
                        <div class="feature-item text-center p-4">
                            <div class="feature-icon p-3 mb-4">
                                <i class="fas fa-credit-card fa-4x text-primary"></i>
                            </div>
                            <div class="feature-content d-flex flex-column">                                
                                <h5 class="mb-3">Pagar Predial</h5>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->
          <!-- Counter Facts Start -->
            <div class="container-fluid counter-facts py-5">
                <div class="container py-5">
                    <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary px-3">Paginas</h5>
                        </div>
                        <h1 class="display-5 mb-4">Oficiales</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                            <a href="https://www.facebook.com/JesusMariaMunicipio/" target="_blank">
                                <div class="counter">
                                    <div class="counter-icon">
                                        <i class="fa-brands fa-facebook"></i>

                                    </div>
                                    <div class="counter-content">
                                        <h3>Municipio de jesus maria</h3>
                                        <div class="d-flex align-items-center justify-content-center"></div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                            <a href="https://www.facebook.com/CapasJesusMaria/" target="_blank">
                                <div class="counter">
                                    <div class="counter-icon">
                                        <i class="fa-brands fa-facebook"></i>
                                    </div>
                                    <div class="counter-content">
                                        <h3>CAPAS Jesús María</h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                            <a href="https://www.facebook.com/JesusMariaDIF/" target="_blank">
                                <div class="counter">
                                    <div class="counter-icon">
                                        <i class="fa-brands fa-facebook"></i>
                                    </div>
                                    <div class="counter-content">
                                        <h3>DIF Jesús María&nbsp;&nbsp;&nbsp;&nbsp; </h3>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                            <a href="https://turismo.jesusmaria.gob.mx/" target="_blank">
                                <div class="counter">
                                    <div class="counter-icon">
                                        <i class="fa-solid fa-globe"></i>
                                    </div>
                                    <div class="counter-content">
                                        <h3>Turismo Jesús María</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Facts End --> 
         

        
          <!-- Services Start -->
        <div class="container-fluid service overflow-hidden pt-5">
            <div class="container py-5">
                <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h1 class="sub-title text-primary px-3">ENTÉRATE</h1>
                    </div>
                </div>
                <div class="row g-4">
                    <?php require('../../model/sala_prensa/ultimas.php');?>                    
                </div>
            </div>
        </div>
        <!-- Services End -->
