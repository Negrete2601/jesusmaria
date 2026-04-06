<style>
    @media print {
        /* Ocultar todo el contenido de la página por defecto */
        body * {
            visibility: hidden;
        }
        
        /* Hacer visible SOLO el contenedor de resultados y todo lo que esté dentro de él */
        #resultado_catastro, #resultado_catastro * {
            visibility: visible;
        }
        
        /* Posicionar el contenedor en la esquina superior izquierda de la hoja para que no salga en blanco arriba */
        #resultado_catastro {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        /* Opcional: Ocultar los botones dentro del div para que no se impriman en el papel */
        #resultado_catastro .card-footer, 
        #resultado_catastro button {
            display: none !important;
        }
    }
</style>
<div class="container-fluid bg-breadcrumb2">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Consulta de Cuenta Catastral</h1>
        <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.php" class="text-white">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-white">Trámites en Línea</a></li>
            <li class="breadcrumb-item active text-secondary">Cuenta Catastral</li>
        </ol>    
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-white rounded shadow-sm p-5">
                    <p class="mb-4" style="color:white">Ingrese su clave o cuenta catastral para consultar los detalles del predio.</p>
                    
                    <div class="input-group input-group-lg mb-3">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="fas fa-map-marked-alt text-primary"></i>
                        </span>
                        <input type="text" id="cuenta_catastral" class="form-control border-start-0" 
                               placeholder="Ej. 01-001-001-000" aria-label="Cuenta Catastral">
                        <button class="btn btn-primary px-4" type="button" onclick="buscarCuentaCatastral()">
                            <i class="fas fa-search me-2"></i> Consultar
                        </button>
                    </div>
                    <div id="catastro_error" class="alert alert-danger d-none mt-3 animate__animated animate__fadeIn"></div>
                </div>
            </div>
        </div>

        <div id="resultado_catastro" class="row justify-content-center mt-5">
            </div>
    </div>
</div>
<script>
    $(document).on('input', '#cuenta_catastral', function (e) {
        let valor = $(this).val().replace(/\D/g, '');
        valor = valor.substring(0, 15);
        let formateado = '';
        
        for (let i = 0; i < valor.length; i++) {
            if (i === 2 || i === 4 || i === 6 || i === 9 || i === 12) {
                formateado += '-';
            }
            formateado += valor[i];
        }
        $(this).val(formateado);
    });

    function buscarCuentaCatastral() {
        var cuenta = $("#cuenta_catastral").val().trim();

        if (cuenta === "" || cuenta.length < 20) {
            Swal.fire({
                title: "Formato incompleto",
                text: "Por favor, ingrese los 15 dígitos de su cuenta catastral válida.",
                icon: "warning",
                confirmButtonColor: "#2f8f25",
                confirmButtonText: "Aceptar"
            });
            return;
        }

        // Mostrar spinner de carga en el contenedor de resultados
        $("#resultado_catastro").html(`
            <div class="col-12 text-center py-5">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status"></div>
                <p class="mt-3 text-muted">Buscando en los registros...</p>
            </div>
        `);
        
        $("#catastro_error").addClass('d-none');
        
        $.post("./model/catastro/fill.php", {
            cuenta: cuenta 
        })
        .done(function(response) {
            if (response.trim() === "error") {
                $("#resultado_catastro").html("");
                $("#catastro_error").html('<i class="fas fa-exclamation-circle me-2"></i> No se encontró información relacionada con la cuenta: <strong>' + cuenta + '</strong>').removeClass('d-none');
            } else {
                $("#resultado_catastro").hide().html(response).fadeIn(800);
            }
        })
        .fail(function() {
            $("#resultado_catastro").html("");
            Swal.fire("Error de conexión", "No se pudo comunicar con el servidor catastral.", "error");
        });
    }

    // Permitir búsqueda al presionar "Enter"
    $(document).on('keypress', '#cuenta_catastral', function(e) {
        if(e.which == 13) {
            buscarCuentaCatastral();
        }
    });
</script>