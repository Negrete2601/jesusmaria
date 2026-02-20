<?php
include("../../controller/sala_prensa/funciones_boletines.php");
function fill_boletines()
{
    $boletines = get_boletines_api();
    $result =format_boletin($boletines);
    return $result;
}

function format_boletin($boletines)
{
    $response = [
                    'success' => true,
                    'noticias' => []
                ];

    foreach ($boletines as $boletin) 
    {
        $response['noticias'][] = [
                                    'id' => $boletin['numero'],
                                    'tiutlo' => strip_tags($boletin['titulo']),
                                    'descripcion' => strip_tags($boletin['texto']),
                                    'image' => 'https://jesusmaria.gob.mx/img/boletines/' . $boletin['url']
                                    ];
    }

    header('Content-Type: application/json');
    $result = json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    
    return ($result);
}