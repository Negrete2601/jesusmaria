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

<!-- Puntitos -->
<div class="puntitos">
    <img src="img/separador.png" alt="Separador">
</div>

<!-- Paginas externas -->
<div class="container-fluid contact overflow-hidden pb-2">
    <div class="container py-5">
        <div class="linea"></div>        
        <div class="office pt-5">
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-6 col-lg-4 col-xl-6 wow fadeInDown sobre" data-wow-delay="0.1s">
                    <a href="https://jesusmaria.recaudacion.net/SIM/predial.jsp" target="_blank"><img src="img/predial.png" class="img-fluid rounded" alt=""></a>
                </div>
                <div class="col-6 col-md-6 col-lg-4 col-xl-6 wow fadeInDown sobre" data-wow-delay="0.1s">
                    <a href="https://www.capasjm.gob.mx/" target="_blank"><img src="img/capas.png" class="img-fluid rounded" alt=""></a>
                </div>           
            </div>
        </div>
    </div>
</div>

<!-- Semblanza -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="linea"></div>
        <div style="padding-top: 2%;"></div>
        <div class="row g-5">
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="bg-light rounded">
                    <img src="img/cesar.png" class="img-fluid w-100 border-bottom border-5" alt="Image">
                </div>
            </div>
            <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                <h1 class="display-5 mb-4 semblanza">César Medina</h1>
                <h4 class="display-5 mb-2 semblanza" style="font-size: 1.5rem;">Gobierno Municipal de Jesús María 2025–2027</h4>
                <div class="row">
                    <p style="font-weight: 300;color: #0b4e8b; line-height: 1.2;">
                        Me gusta trabajar y dar lo mejor de mí en todo lo que hago, convencido de que la actitud frente a los retos marca el resultado.
                        Mi carrera en el servicio público va más allá del deber cumplir, es más bien por la convicción de hacer de Jesús María una Ciudad de Vanguardia con la experiencia que he adquirido en distintas áreas operativas y administrativas.
                        <br><br>
                        El Gobierno de Jesús María trabaja con una visión clara: construir una ciudad más cercana, justa, ordenada y sustentable. Bajo una administración comprometida con el servicio público, se impulsan políticas públicas centradas en el desarrollo sostenible y el bienestar social.
                        <br><br>
                        La experiencia en distintas áreas operativas y administrativas se traduce hoy en una gestión que apuesta por la modernización, la inclusión y la justicia social, con base en cuatro ejes rectores:
                    </p>
                    <ul style="font-weight: 300; color: #0b4e8b;line-height: 1.2;padding-left: 2rem;">
                        <li><strong style="font-weight: 600;">Jesús María cercano e incluyente:</strong> que promueve la participación ciudadana, la igualdad y el acceso equitativo a los servicios públicos.</li>
                        <li><strong style="font-weight: 600;">Jesús María en paz y con justicia:</strong> enfocado en la seguridad, la legalidad y la construcción de una comunidad con valores.</li>
                        <li><strong style="font-weight: 600;">Jesús María competitivo, ordenado y sustentable:</strong> que impulsa el crecimiento económico, el orden urbano y el cuidado del medio ambiente.</li>
                        <li><strong style="font-weight: 600;">Jesús María, gobierno honesto, inteligente e innovador:</strong> que prioriza la transparencia, el uso eficiente de los recursos y la transformación digital de los servicios públicos.</li>
                    </ul>
                    <p style="font-weight: 300; color: #0b4e8b;line-height: 1.2;">
                        Esta administración tiene como propósito consolidar un gobierno cercano, eficaz y responsable, que trabaje todos los días para mejorar la calidad de vida de quienes habitan Jesús María.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Mas buscados -->
<div class="container-fluid contact overflow-hidden pb-2">
    <div class="container py-5">
        <div class="linea"></div>        
        <div class="office pt-5">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
                <h4 class="titulo display-5 mb-4">Trámites mas buscados</h4>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-6 col-lg-4 col-xl-3 wow fadeInDown sobre" data-wow-delay="0.1s" onclick="fill_modal_info(74);">
                    <img src="img/noficial.png" class="img-fluid rounded" alt="">
                </div>
                <div class="col-6 col-md-6 col-lg-4 col-xl-3 wow fadeInDown sobre" data-wow-delay="0.1s" onclick="fill_modal_info(72);">
                    <img src="img/construccion.png" class="img-fluid rounded" alt="">
                </div>
                <div class="col-6 col-md-6 col-lg-4 col-xl-3 wow fadeInDown sobre" data-wow-delay="0.1s" onclick="fill_modal_info(1);">
                    <img src="img/apertura.png" class="img-fluid rounded" alt="">
                </div>
                <div class="col-6 col-md-6 col-lg-4 col-xl-3 wow fadeInDown sobre" data-wow-delay="0.1s" onclick="fill_modal_dependencias(6);">
                    <img src="img/uso.png" class="img-fluid rounded" alt="">
                </div>           
            </div>
        </div>
        <div class="linea"></div>
    </div>
</div>

<!-- Tramites todos -->
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row g-2">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="titulo display-5 mb-4">Trámites por dependencia</h4>
            </div>
            <div class="col-md-4 d-none d-md-block wow fadeInLeft" data-wow-delay="0.1s">
                <div class="rounded">
                    <img src="img/tramites.png" class="img-fluid border-bottom border-5" alt="Image" style="width: 70%;">
                </div>
            </div>
            <div class="col-12 col-md-8 wow fadeInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                <div class="row">
                    <?=$tr_dependencias?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Buzon, Whats y Predial -->
<div class="container-fluid contact overflow-hidden pb-2">
    <div class="container py-5">
        <div class="linea"></div>        
        <div class="office pt-5">
            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-4 col-lg-4 col-xl-4 wow fadeInDown sobre" data-wow-delay="0.1s" onclick="cambiarcont('view/gobierno/buzon.php');">
                    <img src="img/buzon.png" class="img-fluid rounded" alt="">
                </div>
                <div class="col-6 col-md-4 col-lg-4 col-xl-4 wow fadeInDown sobre" data-wow-delay="0.1s">
                    <a href="https://wa.me/524492090412" target="_blank"><img src="img/whats.png" class="img-fluid rounded " alt="" ></a>
                </div>          
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 wow fadeInDown sobre" data-wow-delay="0.1s">
                    <div class="d-flex justify-content-center"><a class="whats" href="https://jesusmaria.recaudacion.net/SIM/predial.jsp" target="_blank"><img src="img/pagopre.png" class="img-fluid rounded " alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Facebooks -->
<div class="container-fluid contact overflow-hidden pb-2">
    <div class="container py-5">
        <div class="linea"></div>        
        <div class="office pt-5">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" >
                <h4 class="titulo display-5 mb-4">Páginas oficiales</h4>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-6 col-lg-4 col-xl-3 wow fadeInDown sobre" data-wow-delay="0.1s">
                    <a href="https://www.facebook.com/JesusMariaMunicipio/" target="_blank"><img src="img/face.png" class="img-fluid rounded" alt=""></a>
                </div>
                <div class="col-6 col-md-6 col-lg-4 col-xl-3 wow fadeInDown sobre" data-wow-delay="0.1s">
                    <a href="https://www.facebook.com/CapasJesusMaria/" target="_blank"><img src="img/facecapas.png" class="img-fluid rounded" alt=""></a>
                </div>
                <div class="col-6 col-md-6 col-lg-4 col-xl-3 wow fadeInDown sobre" data-wow-delay="0.1s">
                    <a href="https://www.facebook.com/JesusMariaDIF/" target="_blank"><img src="img/facedif.png" class="img-fluid rounded" alt=""></a>
                </div>
                <div class="col-6 col-md-6 col-lg-4 col-xl-3 wow fadeInDown sobre" data-wow-delay="0.1s">
                    <a href="https://turismo.jesusmaria.gob.mx/" target="_blank"><img src="img/facetur.png" class="img-fluid rounded" alt=""></a>
                </div>           
            </div>
            </div>
        </div>
        <!-- Puntitos -->
        <div class="puntitos">
            <img src="img/separador.png" alt="Separador">
        </div>
    </div>
</div>

<!-- Noticias -->
<div class="container-fluid contact overflow-hidden pb-2">
    <div class="container py-5">
        <div class="linea"></div>        
        <div class="office pt-5">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" >
                <h4 class="titulo display-5 mb-4">Entérate</h4>
            </div>
            <div class="row g-4 justify-content-center">

                <?php require("../../model/sala_prensa/ultimas.php");?>   
            
            </div>
            </div>
        </div>
        <!-- Puntitos -->
        <div class="puntitos">
            <img src="img/separador.png" alt="Separador">
        </div>
    </div>
</div>