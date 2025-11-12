 <!-- Header Start -->
 <div class="container-fluid bg-breadcrumb2">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Buzón de sugerencias</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php" class="text-white">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white">Gobierno</a></li>
                    <li class="breadcrumb-item active text-secondary">Buzón de sugerencias</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

       

        

        <!-- Countries We Offer Start -->
        <div class="container-fluid country overflow-hidden py-5">
            <div class="container py-5">
                <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
                        <div style="text-align:justify">
                                    <div id="main_content">
                                    <div class="container">
                                        <br>
                                        <p class="text-justify">
                                        <small>Para atender tu reporte, queja, denuncia o sugerencia, por favor ingresa tu nombre y correo electrónico en el siguiente formulario, para solicitudes de información en materia de Transparencia, por favor dar clic en el siguiente hipervínculo &lt;<b><a href="http://transparencia.jesusmaria.gob.mx/#/" target="_blank">Ir a sitio</a></b>&gt;.</small>
                                        </p>

                                        <form method="post" id="form_buzon" novalidate="novalidate">	  	
                                            <div class="form-row">	    
                                                <div class="form-group col-md-6">
                                                <label for="nombre">Nombre <font color="red">*</font></label>
                                                <input type="text" class="form-control error" id="nombre" name="nombre" placeholder="Ingresar nombre aquí..." required="true" aria-required="true" aria-invalid="true"><label id="nombre-error" class="error" for="nombre">Ingresar nombre del solicitante.</label>
                                                </div>

                                                <div class="form-group col-md-6">
                                                <label for="email">Correo Electrónico <font color="red">*</font></label>
                                                <input type="email" class="form-control error" id="email" name="email" placeholder="Ingresar correo electrónico aquí..." required="true" aria-required="true"><label id="email-error" class="error" for="email">Ingresar correo electrónico.</label>
                                                </div>
                                            </div>

                                            <div class="form-row">	    
                                                <div class="form-group col-md-6">
                                                <label for="domicilio">Domicilio</label>
                                                <input type="text" class="form-control valid" id="domicilio" name="domicilio" placeholder="Ingresar su domicilio aquí...">
                                                </div>

                                                <div class="form-group col-md-6">
                                                <label for="telefono">Teléfono <font color="red">*</font></label>
                                                <input type="number" class="form-control error" id="telefono" name="telefono" placeholder="Ingresar número de teléfono aquí..." required="true" aria-required="true"><label id="telefono-error" class="error" for="telefono">Este Campo es Obligatorio.</label>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="idtipoasunto">Tipo de asunto <font color="red">*</font></label>
                                                    <select class="form-control error" id="idtipoasunto" name="idtipoasunto" required="" aria-required="true">
                                                        <option value="">Seleccionar</option>
                                                        <option value="1">Reporte</option>
                                                        <option value="2">Sugerencia</option>
                                                        <option value="3">Otro</option>
                                                    </select><label id="idtipoasunto-error" class="error" for="idtipoasunto">Seleccionar asunto.</label>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="descripcion">Descripción <font color="red">*</font></label>
                                                    <textarea class="form-control error" id="descripcion" name="descripcion" placeholder="Ingrese la descripción aquí..." aria-required="true" aria-invalid="true"></textarea><label id="descripcion-error" class="error" for="descripcion">Ingresar descripción.</label>
                                                    <div style="text-align: center;">
                                                        <small><i>
                                                            Describir el detalle del asunto, no olvidar mencionar información importante como: el nombre del trámite, la fecha, el lugar y dependencia.
                                                        </i></small>
                                                    </div>
                                                </div>
                                            </div>	

                                            <div class="form-row">
                                                <div class="form-group" style="margin: auto; padding-bottom: 10px;">
                                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                                </div>
                                            </div>	  
                                        </form>	
                                    </div>
                                    

                                    <script>
                                    $("#form_buzon").validate(
                                    {
                                        success: "valid",
                                        rules: 
                                            {
                                                nombre: {
                                                    required: true,
                                                    minlength: 10
                                                },

                                                email: {
                                                    required: true
                                                },
                                                
                                                idtipoasunto: {
                                                    required: true
                                                },
                                                
                                                descripcion: {
                                                    required: true,
                                                    minlength: 10
                                                },
                                                
                                                domicilio: {
                                                    minlength: 10
                                                },
                                                
                                                telefono: {
                                                    required: true,
                                                    minlength: 10
                                                }
                                            },
                                        messages: 
                                            {
                                                nombre: {
                                                    required: "Ingresar nombre del solicitante.",
                                                    minlength: "Nombre demasiado corto."	
                                                },

                                                email: {
                                                    required: "Ingresar correo electrónico."
                                                },
                                                
                                                idtipoasunto: {
                                                    required: "Seleccionar asunto."
                                                },
                                                
                                                descripcion: {
                                                    required: "Ingresar descripción.",
                                                    minlength: "Descripción deemasiado corta."
                                                },
                                            },
                                            
                                        submitHandler: function()
                                        {
                                            //alert("Submitted!");
                                            var parametros = 
                                            {		               
                                                "nombre" : $('#nombre').val(),
                                                "email" : $('#email').val(),
                                                "idtipoasunto" : $('#idtipoasunto').val(),
                                                "descripcion" : $('#descripcion').val(),
                                                "domicilio" : $('#domicilio').val(),
                                                "telefono" : $('#telefono').val(),
                                            };
                                            
                                            $.ajax(
                                            {
                                                data:  parametros,
                                                url:   '../../model/buzon/register_buzon.php',
                                                type:  'post',
                                                
                                                success:  function (data) 
                                                {
                                                    var datadiv = data.split(",", 5);
                                                    var mensaje = datadiv[0];
                                                    /*var para1 = datadiv[1];
                                                    var para2 = datadiv[2];
                                                    var para3 = datadiv[3];							
                                                    var para4 = datadiv[4];	
                                                    var para5 = datadiv[5];	*/
                                                                                    
                                                    if (mensaje=='correcto')
                                                    {
                                                        swal({
                                                            title: "Reporte enviado correctamente",
                                                            text: "Se le dará seguimiento a su reporte",
                                                            icon: "success",
                                                            button: "Continuar"
                                                        }).then((value) => {
                                                            if(value){
                                                                window.location="index.php";
                                                            }
                                                        });					
                                                    }
                                                
                                                    if (mensaje=='error')
                                                    {
                                                        swal({
                                                            title: "Error",
                                                            text: "El reporte no se pudo enviar, favor de intentar más tarde.",
                                                            icon: "warning",
                                                            button: "Continuar"
                                                        }).then((value) => {
                                                            if(value){
                                                                window.location="index.php";
                                                            }
                                                        });	
                                                    }
                                                }
                                            });
                                        }
                                    });
                                    </script></div>
                        </div>
                </div>
                
            </div>
        </div>
        <!-- Countries We Offer End -->