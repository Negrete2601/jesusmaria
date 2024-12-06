<?php
    include('../../controller/funciones.php'); 
    include('../../model/sala_prensa/fill_content_table.php');
    
    $idboletin = $_GET['id'];
    $nota = fill_content_table_ver_boletin($idboletin);
    $foto = fill_content_table_ver_boletin_fotos($idboletin);
?>
        <div class="container-fluid bg-breadcrumb2">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s"><?= $nota['titulo']?></h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="javascript:cambiarcont('view/sala_prensa/sala_prensa.php');" class="text-white">Sala de prensa</a></li>
                    <li class="breadcrumb-item active text-secondary">Boletín <?= $nota['numero']?></li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
          <!-- Sala de prensa -->
        <div class="container-fluid training bg-light overflow-hidden py-5">
        <div class="container mt-5">
<?php


        if($foto['idboletin'] >= 356)
        {
        	$ruta = 'img/boletines/'.$foto['url'];
        }else{
        	$ruta = 'http://jesusmaria.gob.mx/JesusMaria/'.$foto['url'];
        }

echo '
        
        <div class="col-md-12 text-justify">
            <br>
            <div align="center">
                <img class="img-fluid" src="'.$ruta.'" class="thumbnail img_boletin">
            </div>
            <br>
            <p class="text-right"><i>'.formato_fecha($nota['fecha_texto']).'</i></p>
            <br>
                '.$nota['texto'].'
        </div>
        <br>
        <br>
        <br>

        ';
?>
</div>