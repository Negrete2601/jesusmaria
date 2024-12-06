<?php
include('../../controller/funciones.php'); 
include('../../model//sala_prensa/fill_table.php');
?>

<div class="container-fluid bg-breadcrumb2">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Sala de prensa</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Gobierno</a></li>
                    <li class="breadcrumb-item active text-secondary">Sala de prensa</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->
          <!-- Sala de prensa -->
        <div class="container-fluid training bg-light overflow-hidden py-5">
        <div class="container mt-5">

  <div class="tab-content" id="myTabContent">
    
    <div class="tab-pane fade show active" id="2021" role="tabpanel" aria-labelledby="home-tab">
       
      <div role="tabpanel" class="tab-pane active" id="2021">
        <?php $anio  = 2021; include('tab.php'); $anio = ''; ?>
      </div>

    </div>
     <div class="tab-pane fade" id="2020" role="tabpanel" aria-labelledby="profile-tab">
        
        <div role="row">
          <?php $anio  = 2020; include('tab.php'); $anio = ''; ?>
        </div>
      
    </div>
    <div class="tab-pane fade" id="2019" role="tabpanel" aria-labelledby="profile-tab">
        
        <div role="row">
          <?php $anio  = 2019; include('tab.php'); $anio = ''; ?>
        </div>
      
    </div>

 

  </div>

  <div>
  
  </div>