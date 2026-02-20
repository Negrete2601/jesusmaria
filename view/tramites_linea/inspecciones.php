<div class="container-fluid bg-breadcrumb2">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Visitas Domiciliarias</h3>
        <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.php" class="text-white">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-white">Ciudad de Vanguardia</a></li>
            <li class="breadcrumb-item"><a href="javascript:cambiarcont('view/tramites_linea/mejora_regulatoria.php');" class="text-white">Mejora Regulatoria</a></li>
            <li class="breadcrumb-item active text-secondary">Visitas Domiciliarias</li>
        </ol>
    </div>
</div>

<div class="container-fluid country overflow-hidden py-5">
    <div class="container py-5">
        <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 70px;">
            <div style="text-align:justify">
                <div id="main_content">
                    <div class="container">

                        <style>
                            /* Estilos del acordeón (reutilizados para consistencia) */
                            .accordion-button {
                                font-weight: bold;
                                font-size: 1.1rem;
                                color: #333;
                                background-color: #f8f9fa;
                            }
                            .accordion-button:not(.collapsed) {
                                color: #000;
                                background-color: #e9ecef;
                                box-shadow: inset 0 -1px 0 rgba(0,0,0,.125);
                            }
                            
                            /* --- SOLUCIÓN PARA TABLAS SATURADAS --- */
                            
                            /* Contenedor que permite el scroll horizontal */
                            .table-responsive-custom {
                                display: block;
                                width: 100%;
                                overflow-x: auto; /* Habilita scroll horizontal */
                                -webkit-overflow-scrolling: touch; /* Scroll suave en móviles */
                                margin-bottom: 1rem;
                                border: 1px solid #dee2e6;
                            }

                            /* Estilos de la tabla ancha */
                            .wide-table {
                                width: 100%; /* Intenta ocupar el 100% */
                                min-width: 1500px; /* FUERZA que la tabla sea ancha para que no se aplasten las columnas. Ajusta este valor si es necesario. */
                                border-collapse: collapse;
                                font-size: 12px; /* Fuente más pequeña para combatir la saturación */
                            }

                            .wide-table th, .wide-table td {
                                padding: 0.5rem; /* Padding más ajustado (compacto) */
                                vertical-align: top; /* Alineación superior para textos largos */
                                border: 1px solid #dee2e6;
                                white-space: normal; /* Permite que el texto largo haga salto de línea dentro de su celda si es necesario */
                            }

                            /* Encabezados fijos (Sticky Header) */
                            .wide-table thead th {
                                position: sticky;
                                top: 0;
                                background-color: #f1f3f5; /* Color de fondo sólido para que no se traslape el texto al hacer scroll */
                                z-index: 1;
                                font-weight: bold;
                                text-align: center;
                                box-shadow: 0 2px 2px -1px rgba(0,0,0,0.1); /* Pequeña sombra para distinguir el header */
                            }

                            /* Filas cebradas y efecto hover para guiar la vista en tablas anchas */
                            .wide-table tbody tr:nth-of-type(odd) {
                                background-color: rgba(0,0,0,.02);
                            }
                            .wide-table tbody tr:hover {
                                background-color: rgba(0,0,0,.05); /* Resalta la fila que se está leyendo */
                            }
                        </style>

                        <br>

                        <div class="accordion" id="accordionVisitas">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingVisitasUno">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVisitasUno" aria-expanded="true" aria-controls="collapseVisitasUno">
                                        Visitas de Áreas Comerciales
                                    </button>
                                </h2>
                                <div id="collapseVisitasUno" class="accordion-collapse collapse" aria-labelledby="headingVisitasUno" data-bs-parent="#accordionVisitas">
                                    <div class="accordion-body p-0"> <div class="table-responsive-custom">
                                           <table class="wide-table">
                                              <thead>
                                                <tr>
                                                  <th>Nombre</th>
                                                  <th>Modalidad</th>
                                                  <th>Homoclave</th>
                                                  <th>Secretaria responsable</th>
                                                  <th>Tipo de inspección, verificación o visita domiciliaria</th>
                                                  <th>Objetivo</th>
                                                  <th>Periodicidad en la que se realiza</th>
                                                  <th>Especificar qué motiva la inspección, verificación o visita domiciliaria</th>
                                                  <th>Fundamento jurídico de la existencia de la inspección, verificación o visita domiciliaria</th>
                                                  <th>Bien, elemento o sujeto de la inspección, verificación o visita domiciliaria</th>
                                                  <th>Derechos del sujeto regulado</th>
                                                  <th>Obligaciones que debe cumplir el sujeto regulado</th>
                                                  <th>Regulaciones que debe cumplir el sujeto regulado</th>
                                                  <th>Requisitos o documentos que necesita presentar el particular</th>
                                                  <th>Especificar si el inspeccionado debe llenar o firmar algun formato...</th>
                                                  <th>Tiempo aproximado de inspección, verificación o visita domiciliaria</th>
                                                  <th>Pasos a realizar durante la inspección, verificación o visita domiciliaria</th>
                                                  <th>Sanciones que pudieran derivar la inspección</th>
                                                  <th>Facultades, atribuciones y obligaciones del inspector, verificador o visitador</th>
                                                  <th>Servidores públicos facultados para realizar la inspección</th>
                                                  <th>Números telefónicos, dirección y correo electrónico</th>
                                                  <th>Inspecciones, verificaciones o visitas realizadas en año anterior</th>
                                                  <th>Número de inspeccionados sancionados en año anterior</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Verificación de puestos ambulantes y semifijos en vía pública</td>
                                                  <td>Presencial</td>
                                                  <td></td> <td>Secretaria de H. Ayuntamiento del Municipio de Jesús María, Aguascalientes</td>
                                                  <td>Verificación</td>
                                                  <td>Llevar un control ordenado de los puestos semifijos y ambulantes mediante verificaciones constantes que aseguren el cumplimiento de los lineamientos establecidos y el pago correspondiente de derechos.</td>
                                                  <td>Diariamente</td>
                                                  <td>El Departamento podrá realizar visitas de inspección a efecto de verificar el cumplimiento de lo dispuesto en el Reglamento de mercados públicos y de actividades comerciales en la vía pública en el Municipio de Jesús María Aguascalientes asegurando que las actividades comerciales se desarrollen conforme a la normatividad.</td>
                                                  <td>Artículos: 79, 84 y 86 del Reglamento de Mercados Públicos y de actividades comerciales en la vía pública en el Municipio de Jesús María</td>
                                                  <td>El sujeto de la inspección es el comerciante fijo, semifijo o ambulante que realicen actividades comerciales dentro del Municipio de Jesús María</td>
                                                  <td>
                                                    1.- El personal autorizado, deberá mostrar al visitado su gafete del municipio de Jesús María que lo acredita como verificador.<br>
                                                    2. El comerciante tiene derecho a que la inspección esté debidamente fundada y motivada conforme al Reglamento de mercados públicos y de actividades comerciales en la vía pública en el Municipio de Jesús María Aguascalientes.
                                                  </td>
                                                  <td>
                                                    1. Obtener y mantener vigente el permiso expedido por el Departamento de Comercio Semifijo y Mercados.<br>
                                                    2. Dar facilidades al personal autorizado para realizar inspecciones, verificaciones o visitas, entregando la documentación que se le solicite.<br>
                                                    3. Ejercer su actividad en el lugar, horario y con el giro autorizado por el Departamento de Comercios Semifijo y Mercados
                                                  </td>
                                                  <td>Reglamento de mercados públicos y de actividades comerciales en la vía pública en el Municipio de Jesús María Aguascalientes; Ley de ingrsos 2025 del Municipio de Jesús María Aguascalientes</td>
                                                  <td>
                                                    1. Permiso vigente expedido por el Departamento de Comercio semifijo y Mercados.<br>
                                                    2. Comprobante de pago de ejercicio del comercio conforme la Ley de ingrsos 2025 del Municipio de Jesús María Aguascalientes.<br>
                                                    3 Licencia o control sanitario (cuando el giro lo requiera, por venta o preparación de alimentos). expedida por la Instancia de la Salud de Jesús María, Aguascalientes.
                                                  </td>
                                                  <td>Se deja una papeleta para comprobar el pago de derecho del comerciante</td>
                                                  <td>5-10 minutos</td>
                                                  <td>
                                                    1. El personal autorizado, deberá mostrar al visitado su gafete del municipio de Jesús María que lo acredita como verificación<br>
                                                    2. Se procede a verificar el cumplimiento de la ubicación y giro autorizado.<br>
                                                    3. Durante la visita se realiza un citatorio donde se redactan brevemente los hechos observados para que posteriormente el comerciante asista a oficinas para aclaraciones y/o sanciones.
                                                  </td>
                                                  <td>Multa</td>
                                                  <td>
                                                    1.Realizar inspecciones, verificaciones.<br>
                                                    2. El personal autorizado, deberá mostrar al visitado su gafete del municipio de Jesús María que lo acredita como verificador.<br>
                                                    3 Deben conducirse con trato digno, imparcial y profesional, evitando actos de abuso o corrupción.<br>
                                                    4.Pueden revisar permisos, licencias, comprobantes de pago y giro comercial autorizado.<br>
                                                    5. Si se detectan irregularidades, pueden recomendar al Departamento sanciones
                                                  </td>
                                                  <td>Verificadores autorizados que pertenencen al Departamento de Áreas Comerciales, Tianguis y Mercados</td>
                                                  <td>449-963-63-90 Dirección: Morelos #206 Zona Centro Jesús María Aguascalientes</td>
                                                  <td>No aplica</td>
                                                  <td>0</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                        </div>
                                        </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingVisitasDos">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVisitasDos" aria-expanded="false" aria-controls="collapseVisitasDos">
                                        Visitas de Reglamentos
                                    </button>
                                </h2>
                                <div id="collapseVisitasDos" class="accordion-collapse collapse" aria-labelledby="headingVisitasDos" data-bs-parent="#accordionVisitas">
                                    <div class="accordion-body p-0">
                                         <div class="table-responsive-custom">
                                            <table class="wide-table">
                                              <thead>
                                                <tr>
                                                  <th>Nombre</th>
                                                  <th>Modalidad</th>
                                                  <th>Homoclave</th>
                                                  <th>Secretaria responsable</th>
                                                  <th>Tipo de inspección, verificación o visita domiciliaria</th>
                                                  <th>Objetivo</th>
                                                  <th>Periodicidad en la que se realiza</th>
                                                  <th>Especificar qué motiva la inspección, verificación o visita domiciliaria</th>
                                                  <th>Fundamento jurídico de la existencia de la inspección, verificación o visita domiciliaria</th>
                                                  <th>Bien, elemento o sujeto de la inspección, verificación o visita domiciliaria</th>
                                                  <th>Derechos del sujeto regulado</th>
                                                  <th>Obligaciones que debe cumplir el sujeto regulado</th>
                                                  <th>Regulaciones que debe cumplir el sujeto regulado</th>
                                                  <th>Requisitos o documentos que necesita presentar el particular</th>
                                                  <th>Especificar si el inspeccionado debe llenar o firmar algun formato...</th>
                                                  <th>Tiempo aproximado de inspección, verificación o visita domiciliaria</th>
                                                  <th>Pasos a realizar durante la inspección, verificación o visita domiciliaria</th>
                                                  <th>Sanciones que pudieran derivar la inspección</th>
                                                  <th>Facultades, atribuciones y obligaciones del inspector, verificador o visitador</th>
                                                  <th>Servidores públicos facultados para realizar la inspección</th>
                                                  <th>Números telefónicos, dirección y correo electrónico</th>
                                                  <th>Inspecciones, verificaciones o visitas realizadas en año anterior</th>
                                                  <th>Número de inspeccionados sancionados en año anterior</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>Visita de Verificacion.</td>
                                                  <td>Presencial</td>
                                                  <td>Sin Informacion.</td>
                                                  <td>Secretaria de H. Ayuntamiento y Dirección General de Gobierno del Municipio de Jesús Maria, Aguascalientes.</td>
                                                  <td>Visitas de Verificación</td>
                                                  <td>Para efectos de la expedición de un nuevo permiso temporal, provisional o licenca reglamentada.</td>
                                                  <td>Por recorrido diarios de rutina, por atencion a reportes, por quejas y/o denuncias ciudadanas.</td>
                                                  <td>El Departamento de Licencias Reglamentadas tiene como prioridad, siendo una de sus principales funciones, revizar, verificar e inspeccionar que las actividades en los giros reglamentados establecidos  a lo largo y ancho del municipio, esten operando y acatando los estatutos y disposiciones legales dentro del marco normativo del Reglamento para la venta y consumo de bebidas alcoholicas en el Municipio de Jesus Maria.</td>
                                                  <td>Articulo 14 Fracc IV  y 31  del Reglamento para la venta y consumo de Bebidas Alcoholicas en el Municipio de Jesus Maria, Aguascalientes.</td>
                                                  <td>BIENES INMUEBLES QUE ESTEN HABILITADOS COMO ESTABLECIMIENTOS, LOCALES Y LUGARES DONDE SE OPERE BAJO LICENCIAS PARA GIROS REGLAMENTADOS.</td>
                                                  <td>1.- Todo el personal operativo, deberá poner en practica el protocolo de visita para realizar la inspeccion y verificacion, siempre portando su gafete oficial del Municipio de Jesus Maria vigente que lo acredite como verificador del Departamento de Licencias Reglamentadas.<br>2.- La persona con quien se atienda y entienda la diligencia, tendra derecho para nombrar dos testigos, en caso de no hacerlo o de que los designados no acepten fungir como testigos, el verificador podra designarlos.<br>3.- Concluida la visita de inspeccion y verificacion, se le hara entrega de la copia del Acta de inspeccion o verificacion, al interesado.</td>
                                                  <td>1.- Atender  a los verificadores que en ese momento lo visiten para inspeccionar y/o verificar el establecimiento, revizando la documentacion correspondiente, como el permiso y/o la licencia, a fin de garantizar que su operatividad y funcionamiento este apegado a la normatividad aplicable y a los estatutos legales correspondientes que el Municipio de Jesus Maria determina.<br>2.- Tener a la vista, dentro del establecimiento el permiso y/o licencia, asi como los demas documentos que acrediten los pagos correspondientes, los cuales no deberán tener ni presentar raspaduras, tachaduras ni enmendaduras.<br>3.- Conducirse con respeto, honestidad y claridad hacia la autoridad.</td>
                                                  <td>Constitución Politica de los Estados Unidos Mexicanos, Constitución Politica del Estado de Aguascalientes, Ley de Procedimiento Administrativo del Estado de Aguascalientes, Bando de Policía y Buen Gobierno, Reglamento para la Venta y Consumo de Bebidas Alcoholicas en el Municipio de Jesus Maria, Aguascalientes.</td>
                                                  <td>Los documentos que se deben mostrar durante las visitas de revision, verificacion e inspeccion son el permiso y/o licencia correspondientes para acreditar la licita operatividad del establecimiento asi como los comprobantes de  pagos de los docuembtos antes mencionados.</td>
                                                  <td>Acta de Inspección</td>
                                                  <td>El tiempo aproximado no lo podemos determinar por las eventualidades que puedan surgir o no durante las vistitas de inspeccion y/o verificacion.</td>
                                                  <td>1. Al iniciar la visita, el verificador debe identificarse con su gafete oficial, con la persona con quien se esta atendiendo la diligencia<br>2. El verificador informara al propietario, titular o encargado, el motivo de la verificacion, inspeccion o apercibimiento, mostrara y procedea a llenar la documentacion oficial, y posteriormente entregara copia/acuse con firma autografa de la persona ademas de requerir dos testigos a voluntad del interesado, o a peticion del verificador<br>3. Finalmente se procederá a dejar asentadas las firmas del interesado, verificadro y testigos, en las actas de inspeccion, verificación o de apercibimiento.</td>
                                                  <td>Apercibimiento verbal, Apercibimiento por escrito, multa y clausura parcial o total del establecimiento, evento o espectaculo publico y/o privado.</td>
                                                  <td>Estarán autorizados para realizar inspecciones, verificaciones, levantar actas, notificaciones y clausuras de los establecimientos, en caso de cualquier violación a cuarquier artículo del Reglamento del Reglamento de  para la venta y consumo de bedidas alcoholicas del Municipio  de Jesús María</td>
                                                  <td>Verificadores adscrito al Departamento de Licencias Reglamentadas</td>
                                                  <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA, JESUS MARIA, AGUASCALIENTES. NUMERO DE TELEFONO<br>4491534586.</td>
                                                  <td>Se tiene un registro del periodo 2024  un total de 892 visitas de verificacion.</td>
                                                  <td>530.0</td>
                                                </tr>
                                                <tr>
                                                  <td>Visita de Inspeccion.</td>
                                                  <td>Presencial</td>
                                                  <td>Sin Informacion.</td>
                                                  <td>Secretaria de H. Ayuntamiento y Dirección General de Gobierno del Municipio de Jesús Maria, Aguascalientes.</td>
                                                  <td>Visitas de  Inspección,</td>
                                                  <td>Inspeccionar dentro del lugar y/o del establecimiento las medidas de seguridad asi como la no permanencia de menores de edad, en los comercios que se tenga regulado el giro reglamentado.</td>
                                                  <td>Por recorrido diarios de rutina, por atencion a reportes, por quejas y/o denuncias ciudadanas.</td>
                                                  <td>El Departamento de Licencias Reglamentadas tiene como prioridad, siendo una de sus principales funciones, revizar, verificar e inspeccionar que las actividades en los giros reglamentados establecidos  a lo largo y ancho del municipio, esten operando y acatando los estatutos y disposiciones legales dentro del marco normativo del Reglamento para la venta y consumo de bebidas alcoholicas en el Municipio de Jesus Maria.</td>
                                                  <td>Con fundamento en los articulos 14, 16 y 115, fracc. lll de la Constitucion Politica de los Estados Unidos Mexicanos, el articulo 66 de la Constitucion Politica del Estado de Aguascalientes, los articulos 1, 3, 4, 10, 11 y 12 de la Ley de Procedimiento Administrativo del Estado de Aguascalientes, articulos 1, 2, 3 y 12 fraccion IV, del Bando de Policia y Buen Gobierno del Municipio de Jesus Maria, Aguascalientes y los articulo 1 y 12 del Reglamento para la venta y consumo de Bebidas Alcoholicas en el Municipio de Jesus Maria, Aguascalientes.</td>
                                                  <td>BIENES INMUEBLES QUE ESTEN HABILITADOS COMO ESTABLECIMIENTOS, LOCALES Y LUGARES DONDE SE OPERE BAJO LICENCIAS PARA GIROS REGLAMENTADOS.</td>
                                                  <td>1.- Todo el personal operativo, deberá poner en practica el protocolo de visita para realizar la inspeccion y verificacion, siempre portando su gafete oficial del Municipio de Jesus Maria vigente que lo acredite como verificador del Departamento de Licencias Reglamentadas.<br>2.- La persona con quien se atienda y entienda la diligencia, tendra derecho para nombrar dos testigos, en caso de no hacerlo o de que los designados no acepten fungir como testigos, el verificador podra designarlos.<br>3.- Concluida la visita de inspeccion y verificacion, se le hara entrega de la copia del Acta de inspeccion o verificacion, al interesado.</td>
                                                  <td>1.- Atender  a los verificadores que en ese momento lo visiten para inspeccionar y/o verificar el establecimiento, revizando la documentacion correspondiente, como el permiso y/o la licencia, a fin de garantizar que su operatividad y funcionamiento este apegado a la normatividad aplicable y a los estatutos legales correspondientes que el Municipio de Jesus Maria determina.<br>2.- Tener a la vista, dentro del establecimiento el permiso y/o licencia, asi como los demas documentos que acrediten los pagos correspondientes, los cuales no deberán tener ni presentar raspaduras, tachaduras ni enmendaduras.<br>3.- Conducirse con respeto, honestidad y claridad hacia la autoridad.</td>
                                                  <td>Constitución Politica de los Estados Unidos Mexicanos, Constitución Politica del Estado de Aguascalientes, Ley de Procedimiento Administrativo del Estado de Aguascalientes, Bando de Policía y Buen Gobierno, Reglamento para la Venta y Consumo de Bebidas Alcoholicas en el Municipio de Jesus Maria, Aguascalientes.</td>
                                                  <td>Los documentos que se deben mostrar durante las visitas de revision, verificacion e inspeccion son el permiso y/o licencia correspondientes para acreditar la licita operatividad del establecimiento asi como los comprobantes de  pagos de los docuembtos antes mencionados.</td>
                                                  <td>La persona con quien se entienda la diligencia, siendo la visita de inspeccion y verificacion debera anotar su nombre y firmar en el apartado correspondiente del acta de inspeccion, de verificacion o de apercibimiento, según sea el caso.</td>
                                                  <td>El tiempo aproximado no lo podemos determinar por las eventualidades que puedan surgir o no durante las vistitas de inspeccion y/o verificacion.</td>
                                                  <td>1. Al iniciar la visita, el verificador debe identificarse con su gafete oficial, con la persona con quien se esta atendiendo la diligencia<br>2. El verificador informara al propietario, titular o encargado, el motivo de la verificacion, inspeccion o apercibimiento, mostrara y procedea a llenar la documentacion oficial, y posteriormente entregara copia/acuse con firma autografa de la persona ademas de requerir dos testigos a voluntad del interesado, o a peticion del verificador<br>3. Finalmente se procederá a dejar asentadas las firmas del interesado, verificadro y testigos, en las actas de inspeccion, verificación o de apercibimiento.</td>
                                                  <td>Apercibimiento verbal, Apercibimiento por escrito, multa y clausura parcial o total del establecimiento, evento o espectaculo publico y privado.</td>
                                                  <td>levantar actas, notificaciones y clausuras de estos establecimientos en caso de violación a</td>
                                                  <td>Verificadores adscritos al Departamento de Licencias Reglamentadas.</td>
                                                  <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA, JESUS MARIA, AGUASCALIENTES. NUMERO DE TELEFONO<br>4491534586.</td>
                                                  <td>Se tiene un registro del periodo 2024 con un total de 1,695 visitas de inspecciones.</td>
                                                  <td>600.0</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                        </div>
                                        </div>
                                </div>
                            </div>
                            </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>