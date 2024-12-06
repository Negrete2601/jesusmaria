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

            <!-- Paginación en la parte superior -->
  <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center mb-4">
          <li class="page-item"><a class="page-link" href="#" data-page="1">2024</a></li>
          <li class="page-item"><a class="page-link" href="#" data-page="2">2023</a></li>
          <li class="page-item"><a class="page-link" href="#" data-page="3">2022</a></li>
          <li class="page-item"><a class="page-link" href="#" data-page="4">2021</a></li>
      </ul>
  </nav>

  <div id="page-content">
    <div id="page-1" class="page">
        <h1>Año 2024</h1>
        <div class="row">
            <?php $anio  = 2024; include('tab.php'); $anio = ''; ?>
        </div>
    </div>

    <div id="page-2" class="page">
        <h1>Año 2023</h1>
        <div class="row">
            <?php $anio  = 2023; include('tab.php'); $anio = ''; ?>
        </div>
    </div>

    <div id="page-3" class="page">
        <h1>Año 2022</h1>
        <div class="row">
            <?php $anio  = 2022; include('tab.php'); $anio = ''; ?>
        </div>
    </div>

    <div id="page-4" class="page">
        <h1>Año 2021</h1>
        <div class="row">
            <?php $anio  = 2021; include('tab.php'); $anio = ''; ?>
        </div>
    </div>
  </div>

</div>

<script>
        document.querySelectorAll('.page-link').forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();

                // Ocultar todas las páginas
                document.querySelectorAll('.page').forEach(page => page.classList.add('d-none'));

                // Mostrar la página seleccionada
                const pageId = this.getAttribute('data-page');
                document.getElementById(`page-${pageId}`).classList.remove('d-none');
            });
        });
    </script>