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
                <div class="row">
                   <p style="font-weight: 600;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non justo euismod, blandit mi eu, lobortis enim. Nullam eu nulla et elit efficitur finibus. Fusce efficitur interdum ullamcorper. Vestibulum et maximus nulla. Cras ac euismod diam. Aenean quam urna, tempus ac est sed, condimentum dapibus nisl. Maecenas justo enim, ultrices at massa vel, suscipit pharetra nisi. Donec at commodo lacus, pulvinar efficitur ligula. Nullam pretium eleifend faucibus. Fusce eu consequat nibh.
                   Sed odio metus, suscipit eu erat vel, sollicitudin efficitur tortor. Aenean sit amet auctor dui. Suspendisse dignissim, nibh dictum fermentum blandit, orci diam cursus est, eu rutrum sapien odio a nisl. Pellentesque scelerisque quam id malesuada commodo. Sed placerat, tortor in laoreet accumsan, ex massa convallis felis, eget varius lorem tellus sit amet sapien. Integer id urna commodo, pretium ipsum a, lacinia ipsum. Nullam bibendum commodo purus et sollicitudin. Maecenas egestas mattis scelerisque. Pellentesque semper lorem dolor, sit amet feugiat justo venenatis id. Morbi tincidunt ullamcorper augue eget pulvinar. Etiam fringilla, massa aliquet commodo congue, libero dui blandit ligula, ac faucibus turpis arcu id quam. Vivamus a lorem quis est ullamcorper dignissim. Cras eros tellus, rutrum id maximus in, malesuada a enim. Aliquam quis ante et lacus gravida ultricies quis eu mi. Nullam eget justo nibh. Aenean a bibendum felis.</p>
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
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 wow fadeInDown sobre" data-wow-delay="0.1s">                    
                    <div class="card news-card" onclick="cambiarcont()" style="cursor: pointer;">
                        <img src="img/Recurso 49.png" class="card-img" alt="Fondo" >
                        <div class="card-img-overlay d-flex flex-column align-items-center  text-center">
                            <img src="img/boletines/925_boletin_1.jpeg" class="mb-3" width="100" height="100" alt="Miniatura" style="width: 75%; height: auto;">
                            <h4 class="card-title">PRESENTA EL ALCALDE DE JM EL PROGRAMA DEL SEXTO FESTIVAL “DE CHICAHUAL A CALAVERA"</h4>
                            <p class="card-text">El presidente municipal, José Antonio Arámbula López presentó este día el programa general del sexto Festival de Chicahual a Calavera “Más vivo que nunca”, mismo que se llevará a cabo del ...</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4 col-xl-4 wow fadeInDown sobre" data-wow-delay="0.1s">                    
                    <div class="card news-card" onclick="cambiarcont()" style="cursor: pointer;">
                        <img src="img/Recurso 49.png" class="card-img" alt="Fondo" >
                        <div class="card-img-overlay d-flex flex-column align-items-center  text-center">
                            <img src="img/boletines/925_boletin_1.jpeg" class="mb-3" width="100" height="100" alt="Miniatura" style="width: 75%; height: auto;">
                            <h4 class="card-title">PRESENTA EL ALCALDE DE JM EL PROGRAMA DEL SEXTO FESTIVAL “DE CHICAHUAL A CALAVERA"</h4>
                            <p class="card-text">El presidente municipal, José Antonio Arámbula López presentó este día el programa general del sexto Festival de Chicahual a Calavera “Más vivo que nunca”, mismo que se llevará a cabo del ...</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4 col-xl-4 wow fadeInDown sobre" data-wow-delay="0.1s">                    
                    <div class="card news-card" onclick="cambiarcont()" style="cursor: pointer;">
                        <img src="img/Recurso 49.png" class="card-img" alt="Fondo" >
                        <div class="card-img-overlay d-flex flex-column align-items-center  text-center">
                            <img src="img/boletines/925_boletin_1.jpeg" class="mb-3" width="100" height="100" alt="Miniatura" style="width: 75%; height: auto;">
                            <h4 class="card-title">PRESENTA EL ALCALDE DE JM EL PROGRAMA DEL SEXTO FESTIVAL “DE CHICAHUAL A CALAVERA"</h4>
                            <p class="card-text">El presidente municipal, José Antonio Arámbula López presentó este día el programa general del sexto Festival de Chicahual a Calavera “Más vivo que nunca”, mismo que se llevará a cabo del ...</p>
                        </div>
                    </div>
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