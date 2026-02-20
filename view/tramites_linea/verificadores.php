<div class="container-fluid bg-breadcrumb2">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Verificadores</h3>
        <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.php" class="text-white">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-white">Ciudad de Vanguardia</a></li>
            <li class="breadcrumb-item"><a href="javascript:cambiarcont('view/tramites_linea/mejora_regulatoria.php');" class="text-white">Mejora Regulatoria</a></li>
            <li class="breadcrumb-item active text-secondary">Verificadores</li>
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
                            /* Estilos de la tabla */
                            table {
                                border-collapse: collapse;
                                width: 100%;
                                font-size: 13px; /* Letra un poco más pequeña para que quepan todos los datos */
                            }

                            th, td {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                                vertical-align: middle;
                            }

                            th {
                                background-color: #f2f2f2;
                                font-weight: bold;
                                text-align: center;
                                vertical-align: middle;
                            }

                            .photo-cell img {
                                max-width: 70px; /* Ajuste de tamaño de foto */
                                height: auto;
                                display: block;
                                margin: 0 auto;
                                border-radius: 4px;
                            }
                            
                            /* Estilos del acordeón */
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
                        </style>

                        <br>

                        <div class="accordion" id="accordionVerificadores">

                            <div class="accordion-item">
                                <h2 class="accordion-header " id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Verificadores de Áreas Comerciales (Comercio Semifijo y Mercados)
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionVerificadores">
                                    <div class="accordion-body" style="overflow-x:auto;">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Fotografía</th>
                                                    <th>Nombre completo</th>
                                                    <th>Núm. Empleado</th>
                                                    <th>Cargo</th>
                                                    <th>Sujeto Obligado</th>
                                                    <th>Unidad Administrativa</th>
                                                    <th>Domicilio, Teléfono y Correo</th>
                                                    <th>Vigencia</th>
                                                    <th>Documento</th>
                                                    <th>Funciones</th>
                                                    <th>Superior Jerárquico</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/areas/1.png" alt="Rosa María Aceves"></td>
                                                    <td>ROSA MARÍA ACEVES TISCAREÑO</td>
                                                    <td>1</td>
                                                    <td>Verificador y recaudador</td>
                                                    <td>Secretaría del H. Ayuntamiento</td>
                                                    <td>Departamento de Comercio Semifijo y Mercados</td>
                                                    <td>Calle Morelos #205 Zona Centro. Tel: 449-963-63-90</td>
                                                    <td>1 Año</td>
                                                    <td>Oficio de comisión</td>
                                                    <td>Verificación de puestos ambulantes y semifijos en vía pública</td>
                                                    <td>C. Concepción Carmona de los Ángeles. Tel: 449-108-52-04</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/areas/2.png" alt="Perla Rebeca Garza"></td>
                                                    <td>PERLA REBECA GARZA NAVA</td>
                                                    <td>2</td>
                                                    <td>Verificador y recaudador</td>
                                                    <td>Secretaría del H. Ayuntamiento</td>
                                                    <td>Departamento de Comercio Semifijo y Mercados</td>
                                                    <td>Calle Morelos #205 Zona Centro. Tel: 449-963-63-90</td>
                                                    <td>1 Año</td>
                                                    <td>Oficio de comisión</td>
                                                    <td>Verificación de puestos ambulantes y semifijos en vía pública</td>
                                                    <td>C. Concepción Carmona de los Ángeles. Tel: 449-108-52-04</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/areas/3.png" alt="Claudia Betsabe Cruz"></td>
                                                    <td>CLAUDIA BETZABED CRUZ TORRES</td>
                                                    <td>3</td>
                                                    <td>Verificador y recaudador</td>
                                                    <td>Secretaría del H. Ayuntamiento</td>
                                                    <td>Departamento de Comercio Semifijo y Mercados</td>
                                                    <td>Calle Morelos #205 Zona Centro. Tel: 449-963-63-90</td>
                                                    <td>1 Año</td>
                                                    <td>Oficio de comisión</td>
                                                    <td>Verificación de puestos ambulantes y semifijos en vía pública</td>
                                                    <td>C. Concepción Carmona de los Ángeles. Tel: 449-108-52-04</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/areas/4.png" alt="J. Ricardo Pichardo"></td>
                                                    <td>J. RICARDO PICHARDO MEDINA</td>
                                                    <td>4</td>
                                                    <td>Verificador y recaudador</td>
                                                    <td>Secretaría del H. Ayuntamiento</td>
                                                    <td>Departamento de Comercio Semifijo y Mercados</td>
                                                    <td>Calle Morelos #205 Zona Centro. Tel: 449-963-63-90</td>
                                                    <td>1 Año</td>
                                                    <td>Oficio de comisión</td>
                                                    <td>Verificación de puestos ambulantes y semifijos en vía pública</td>
                                                    <td>C. Concepción Carmona de los Ángeles. Tel: 449-108-52-04</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/areas/5.png" alt="Jose Ines Negrete"></td>
                                                    <td>JOSE INES NEGRETE</td>
                                                    <td>5</td>
                                                    <td>Verificador y recaudador</td>
                                                    <td>Secretaría del H. Ayuntamiento</td>
                                                    <td>Departamento de Comercio Semifijo y Mercados</td>
                                                    <td>Calle Morelos #205 Zona Centro. Tel: 449-963-63-90</td>
                                                    <td>1 Año</td>
                                                    <td>Oficio de comisión</td>
                                                    <td>Verificación de puestos ambulantes y semifijos en vía pública</td>
                                                    <td>C. Concepción Carmona de los Ángeles. Tel: 449-108-52-04</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/areas/6.png" alt="Luis Manuel Casas"></td>
                                                    <td>LUIS MANUEL CASAS CABRAL</td>
                                                    <td>6</td>
                                                    <td>Verificador y recaudador</td>
                                                    <td>Secretaría del H. Ayuntamiento</td>
                                                    <td>Departamento de Comercio Semifijo y Mercados</td>
                                                    <td>Calle Morelos #205 Zona Centro. Tel: 449-963-63-90</td>
                                                    <td>1 Año</td>
                                                    <td>Oficio de comisión</td>
                                                    <td>Verificación de puestos ambulantes y semifijos en vía pública</td>
                                                    <td>C. Concepción Carmona de los Ángeles. Tel: 449-108-52-04</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/areas/7.png" alt="Ma. Cecilia Romero"></td>
                                                    <td>MA. CECILIA ROMERO MUNGUIA</td>
                                                    <td>7</td>
                                                    <td>Verificador y recaudador</td>
                                                    <td>Secretaría del H. Ayuntamiento</td>
                                                    <td>Departamento de Comercio Semifijo y Mercados</td>
                                                    <td>Calle Morelos #205 Zona Centro. Tel: 449-963-63-90</td>
                                                    <td>1 Año</td>
                                                    <td>Oficio de comisión</td>
                                                    <td>Verificación de puestos ambulantes y semifijos en vía pública</td>
                                                    <td>C. Concepción Carmona de los Ángeles. Tel: 449-108-52-04</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/areas/8.png" alt="Brenda Judith Gutierrez"></td>
                                                    <td>BRENDA JUDITH GUTIERREZ RODRIGUEZ</td>
                                                    <td>8</td>
                                                    <td>Verificador y recaudador</td>
                                                    <td>Secretaría del H. Ayuntamiento</td>
                                                    <td>Departamento de Comercio Semifijo y Mercados</td>
                                                    <td>Calle Morelos #205 Zona Centro. Tel: 449-963-63-90</td>
                                                    <td>1 Año</td>
                                                    <td>Oficio de comisión</td>
                                                    <td>Verificación de puestos ambulantes y semifijos en vía pública</td>
                                                    <td>C. Concepción Carmona de los Ángeles. Tel: 449-108-52-04</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/areas/9.png" alt="Sandra Suarez Ortega"></td>
                                                    <td>SANDRA SUAREZ ORTEGA</td>
                                                    <td>9</td>
                                                    <td>Verificador y recaudador</td>
                                                    <td>Secretaría del H. Ayuntamiento</td>
                                                    <td>Departamento de Comercio Semifijo y Mercados</td>
                                                    <td>Calle Morelos #205 Zona Centro. Tel: 449-963-63-90</td>
                                                    <td>1 Año</td>
                                                    <td>Oficio de comisión</td>
                                                    <td>Verificación de puestos ambulantes y semifijos en vía pública</td>
                                                    <td>C. Concepción Carmona de los Ángeles. Tel: 449-108-52-04</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/areas/10.png" alt="Laura Itzayana Valdez"></td>
                                                    <td>LAURA ITZAYANA VALDEZ CAÑEDO</td>
                                                    <td>10</td>
                                                    <td>Verificador y recaudador</td>
                                                    <td>Secretaría del H. Ayuntamiento</td>
                                                    <td>Departamento de Comercio Semifijo y Mercados</td>
                                                    <td>Calle Morelos #205 Zona Centro. Tel: 449-963-63-90</td>
                                                    <td>1 Año</td>
                                                    <td>Oficio de comisión</td>
                                                    <td>Verificación de puestos ambulantes y semifijos en vía pública</td>
                                                    <td>C. Concepción Carmona de los Ángeles. Tel: 449-108-52-04</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/areas/11.png" alt="Marcelino Lopez Gonzalez"></td>
                                                    <td>MARCELINO LOPEZ GONZALEZ</td>
                                                    <td>11</td>
                                                    <td>Verificador y recaudador</td>
                                                    <td>Secretaría del H. Ayuntamiento</td>
                                                    <td>Departamento de Comercio Semifijo y Mercados</td>
                                                    <td>Calle Morelos #205 Zona Centro. Tel: 449-963-63-90</td>
                                                    <td>1 Año</td>
                                                    <td>Oficio de comisión</td>
                                                    <td>Verificación de puestos ambulantes y semifijos en vía pública</td>
                                                    <td>C. Concepción Carmona de los Ángeles. Tel: 449-108-52-04</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/areas/12.png" alt="Griselda Yoshilne Jaime"></td>
                                                    <td>GRISELDA YOSHELINE JAIME VALDEZ</td>
                                                    <td>12</td>
                                                    <td>Verificador y recaudador</td>
                                                    <td>Secretaría del H. Ayuntamiento</td>
                                                    <td>Departamento de Comercio Semifijo y Mercados</td>
                                                    <td>Calle Morelos #205 Zona Centro. Tel: 449-963-63-90</td>
                                                    <td>1 Año</td>
                                                    <td>Oficio de comisión</td>
                                                    <td>Verificación de puestos ambulantes y semifijos en vía pública</td>
                                                    <td>C. Concepción Carmona de los Ángeles. Tel: 449-108-52-04</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Verificadores de Reglamentos (Licencias Reglamentadas)
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionVerificadores">
                                    <div class="accordion-body" style="overflow-x:auto;">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Fotografía</th>
                                                    <th>Nombre completo</th>
                                                    <th>Clave Empleado</th>
                                                    <th>Cargo</th>
                                                    <th>Sujeto Obligado</th>
                                                    <th>Unidad Administrativa</th>
                                                    <th>Domicilio y Contacto</th>
                                                    <th>Vigencia</th>
                                                    <th>Documento</th>
                                                    <th>Funciones</th>
                                                    <th>Superior Jerárquico</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/1.png" alt="Juan Diego Zamarripa"></td>
                                                    <td>JUAN DIEGO ZAMARRIPA LOERA</td>
                                                    <td>Sin número</td>
                                                    <td>COORDINADOR DE VERIFICADORES</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>COORDINAR, REVISAR, SUPERVISAR Y ORGANIZAR LOS GRUPOS...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/2.png" alt="Claudia Cristina Parra"></td>
                                                    <td>CLAUDIA CRISTINA PARRA VALENCIANO</td>
                                                    <td>SHA-LRV-011</td>
                                                    <td>VERIFICADORA</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>VERIFICACIÓN DE ESTABLECIMIENTOS E INMUEBLES COMERCIALES...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/3.png" alt="Diego Armando Luevano"></td>
                                                    <td>DIEGO ARMANDO LUEVANO RODRIGUEZ</td>
                                                    <td>Sin número</td>
                                                    <td>VERIFICADOR</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>VERIFICACIÓN DE ESTABLECIMIENTOS E INMUEBLES COMERCIALES...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/4.png" alt="Gerardo Garcia Sandoval"></td>
                                                    <td>GERARDO GARCIA SANDOVAL</td>
                                                    <td>SHA-LRV-007</td>
                                                    <td>VERIFICADOR</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>VERIFICACIÓN DE ESTABLECIMIENTOS E INMUEBLES COMERCIALES...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/5.png" alt="Jose Manuel Duron"></td>
                                                    <td>JOSE MANUEL DURON GUERRERO</td>
                                                    <td>SHA-LRV-003</td>
                                                    <td>VERIFICADOR</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>VERIFICACIÓN DE ESTABLECIMIENTOS E INMUEBLES COMERCIALES...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/6.png" alt="Arturo Garcia Torres"></td>
                                                    <td>ARTURO GARCIA TORRES</td>
                                                    <td>SHA-LRV-002</td>
                                                    <td>VERIFICADOR</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>VERIFICACIÓN DE ESTABLECIMIENTOS E INMUEBLES COMERCIALES...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/7.png" alt="Javier Lucio Torales"></td>
                                                    <td>JAVIER LUCIO TORALES</td>
                                                    <td>SHA-LRV-002</td>
                                                    <td>VERIFICADOR</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>VERIFICACIÓN DE ESTABLECIMIENTOS E INMUEBLES COMERCIALES...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/8.png" alt="Rafael De Luna"></td>
                                                    <td>RAFAEL DE LUNA DE LUNA</td>
                                                    <td>SHA-LRV-005</td>
                                                    <td>VERIFICADOR</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>VERIFICACIÓN DE ESTABLECIMIENTOS E INMUEBLES COMERCIALES...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/9.png" alt="Ezequiel Ramirez"></td>
                                                    <td>EZEQUIEL RAMIREZ DE LUNA</td>
                                                    <td>SHA-LRV-009</td>
                                                    <td>VERIFICADOR</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>VERIFICACIÓN DE ESTABLECIMIENTOS E INMUEBLES COMERCIALES...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/10.png" alt="Luis Fernando Guerrero"></td>
                                                    <td>LUIS FERNANDO GUERRERO GALLEGOS</td>
                                                    <td>SHA-LRV-006</td>
                                                    <td>VERIFICADOR</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>VERIFICACIÓN DE ESTABLECIMIENTOS E INMUEBLES COMERCIALES...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/11.png" alt="Cesar Alejandro Lara"></td>
                                                    <td>CESAR ALEJANDRO LARA ZUÑIGA</td>
                                                    <td>Sin número</td>
                                                    <td>VERIFICADOR</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>VERIFICACIÓN DE ESTABLECIMIENTOS E INMUEBLES COMERCIALES...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/12.png" alt="Jose Alvarez De La Cruz"></td>
                                                    <td>JOSE ALVAREZ DE LA CRUZ</td>
                                                    <td>SHA-LRV-004</td>
                                                    <td>VERIFICADOR</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>VERIFICACIÓN DE ESTABLECIMIENTOS E INMUEBLES COMERCIALES...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/13.png" alt="David Silva Muñoz"></td>
                                                    <td>DAVID SILVA MUÑOZ</td>
                                                    <td>Sin número</td>
                                                    <td>VERIFICADOR</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>VERIFICACIÓN DE ESTABLECIMIENTOS E INMUEBLES COMERCIALES...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/reglamentos/14.png" alt="Juan Jose Maldonado"></td>
                                                    <td>JUAN JOSE MALDONADO MEDINA</td>
                                                    <td>Sin número</td>
                                                    <td>VERIFICADOR</td>
                                                    <td>SECRETARÍA DEL H. AYUNTAMIENTO DEL MUNICIPIO DE JESUS MARIA</td>
                                                    <td>DEPARTAMENTO DE LICENCIAS REGLAMENTADAS</td>
                                                    <td>BLVD. PASEOS DEL CHICAHUAL NO. 401, COL. DEPORTIVA. Tel: 449-963-54-04</td>
                                                    <td>Indefinido (2024-2027)</td>
                                                    <td>GAFETE</td>
                                                    <td>VERIFICACIÓN DE ESTABLECIMIENTOS E INMUEBLES COMERCIALES...</td>
                                                    <td>MARCO JOSUE RODRIGUEZ HERRERA</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Verificadores de Protección Civil
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionVerificadores">
                                    <div class="accordion-body" style="overflow-x:auto;">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Fotografía</th>
                                                    <th>Nombre</th>
                                                    <th>Dependencia</th>
                                                    <th>Departamento</th>
                                                    <th>Número de carta credencial</th>
                                                    <th>Domicilio</th>
                                                    <th>Facultades y/o Funciones</th>
                                                    <th>Contacto de la dependencia</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="photo-cell"><img src="./img/verificadores/p_civil/1.png" alt="Ernesto Martínez Esquivel"></td>
                                                    <td>Ernesto Martínez Esquivel</td>
                                                    <td>Secretaria del H. Ayuntamiento</td>
                                                    <td>Protección Civil</td>
                                                    <td>Folio Gafete 008</td>
                                                    <td>Calle Abasolo, esquina calle Beltrán 315, colonia centro</td>
                                                    <td>Cumplimentar las Inspecciones y Verificaciones que se le son consignadas y Notificador.</td>
                                                    <td>4499639921 <br> proteccioncivl_jesusmaria@outlook.com</td>
                                                </tr>
                                                <tr>
                                                  <td class="photo-cell"><img src="./img/verificadores/p_civil/2.png" alt="Laura Guadalupe Martin"></td>
                                                  <td>Laura Guadalupe Martin Ruvalcaba</td>
                                                  <td>Secretaria del H. Ayuntamiento</td>
                                                  <td>Protección Civil</td>
                                                  <td>Folio Gafete 003</td>
                                                  <td>Calle Abasolo, esquina calle Beltrán 315, colonia centro</td>
                                                  <td>Inspección y Verificación, agendar las inspecciones y verificaciones de acuerdo al tiempo de vencimiento...</td>
                                                  <td>4499639921<br>proteccioncivl_jesusmaria@outlook.com</td>
                                                </tr>
                                                <tr>
                                                  <td class="photo-cell"><img src="./img/verificadores/p_civil/3.png" alt="Erika Susana Ledezma"></td>
                                                  <td>Erika Susana Ledezma Moran</td>
                                                  <td>Secretaria del H. Ayuntamiento</td>
                                                  <td>Protección Civil</td>
                                                  <td>Folio Gafete 002</td>
                                                  <td>Calle Abasolo, esquina calle Beltrán 315, colonia centro</td>
                                                  <td>Inspección y Verificación, revisión de programas internos de protección civil...</td>
                                                  <td>4499639921<br>proteccioncivl_jesusmaria@outlook.com</td>
                                                </tr>
                                                <tr>
                                                  <td class="photo-cell"><img src="./img/verificadores/p_civil/4.png" alt="Humberto Ramón Esparza"></td>
                                                  <td>Humberto Ramón Esparza</td>
                                                  <td>Secretaria del H. Ayuntamiento</td>
                                                  <td>Protección Civil</td>
                                                  <td>Folio Gafete 005</td>
                                                  <td>Calle Abasolo, esquina calle Beltrán 315, colonia centro</td>
                                                  <td>Inspección y Verificación, atención a reportes de emergencia.</td>
                                                  <td>4499639921<br>proteccioncivl_jesusmaria@outlook.com</td>
                                                </tr>
                                                <tr>
                                                  <td class="photo-cell"><img src="./img/verificadores/p_civil/5.png" alt="Julio Cesar Vargas"></td>
                                                  <td>Julio Cesar Vargas Rosado</td>
                                                  <td>Secretaria del H. Ayuntamiento</td>
                                                  <td>Protección Civil</td>
                                                  <td>Folio Gafete 010</td>
                                                  <td>Calle Abasolo, esquina calle Beltrán 315, colonia centro</td>
                                                  <td>Inspección y Verificación, atención a reportes de emergencia.</td>
                                                  <td>4499639921<br>proteccioncivl_jesusmaria@outlook.com</td>
                                                </tr>
                                                <tr>
                                                  <td class="photo-cell"><img src="./img/verificadores/p_civil/6.png" alt="Blanca Araceli Estrada"></td>
                                                  <td>Blanca Araceli Estrada Ramírez</td>
                                                  <td>Secretaria del H. Ayuntamiento</td>
                                                  <td>Protección Civil</td>
                                                  <td>Folio Gafete 012</td>
                                                  <td>Calle Abasolo, esquina calle Beltrán 315, colonia centro</td>
                                                  <td>Inspección y Verificación, atención a reportes de emergencia.</td>
                                                  <td>4499639921<br>proteccioncivl_jesusmaria@outlook.com</td>
                                                </tr>
                                                <tr>
                                                  <td class="photo-cell"><img src="./img/verificadores/p_civil/7.png" alt="Luis Enrique Padilla"></td>
                                                  <td>Luis Enrique Padilla Tapia</td>
                                                  <td>Secretaria del H. Ayuntamiento</td>
                                                  <td>Protección Civil</td>
                                                  <td>Folio Gafete 011</td>
                                                  <td>Calle Abasolo, esquina calle Beltrán 315, colonia centro</td>
                                                  <td>Inspección y Verificación, atención a reportes de emergencia.</td>
                                                  <td>4499639921<br>proteccioncivl_jesusmaria@outlook.com</td>
                                                </tr>
                                                <tr>
                                                  <td class="photo-cell"><img src="./img/verificadores/p_civil/8.png" alt="Jaqueline del Rosario"></td>
                                                  <td>Jaqueline del Rosario Martínez Esquivel</td>
                                                  <td>Secretaria del H. Ayuntamiento</td>
                                                  <td>Protección Civil</td>
                                                  <td>Folio Gafete 016</td>
                                                  <td>Calle Abasolo, esquina calle Beltrán 315, colonia centro</td>
                                                  <td>Inspección y Verificación, atención a reportes de emergencia.</td>
                                                  <td>4499639921<br>proteccioncivl_jesusmaria@outlook.com</td>
                                                </tr>
                                                <tr>
                                                  <td class="photo-cell"><img src="./img/verificadores/p_civil/9.png" alt="Gabriel Jauregui Manriquez"></td>
                                                  <td>Gabriel Jauregui Manriquez</td>
                                                  <td>Secretaria del H. Ayuntamiento</td>
                                                  <td>Protección Civil</td>
                                                  <td>Folio Gafete 013</td>
                                                  <td>Calle Abasolo, esquina calle Beltrán 315, colonia centro</td>
                                                  <td>Inspección y Verificación, atención a reportes de emergencia.</td>
                                                  <td>4499639921<br>proteccioncivl_jesusmaria@outlook.com</td>
                                                </tr>
                                                <tr>
                                                  <td class="photo-cell"><img src="./img/verificadores/p_civil/10.png" alt="María Guadalupe Ledesma"></td>
                                                  <td>María Guadalupe Ledesma Herrera</td>
                                                  <td>Secretaria del H. Ayuntamiento</td>
                                                  <td>Protección Civil</td>
                                                  <td>Folio Gafete 014</td>
                                                  <td>Calle Abasolo, esquina calle Beltrán 315, colonia centro</td>
                                                  <td>Inspección y Verificación, atención a reportes de emergencia.</td>
                                                  <td>4499639921<br>proteccioncivl_jesusmaria@outlook.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
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