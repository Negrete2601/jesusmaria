<?php

///PARA VER LOS ERRORES DE PHP COMENTAR LA SIGUIENTE LINEA
//error_reporting(0);
function get_ultimas_noticias()
{
	require('../../controller/conexion.php');
	$query = "SELECT DISTINCT(b.idboletin), b.numero, b.titulo, b.texto, b.url
		FROM boletines AS b
 WHERE 1 ORDER BY b.idboletin DESC limit 2;";
	$result = mysqli_query($conexion,$query);
	return($result);
}

function get_ver_todos_boletines($anio)
{
	require('../../controller/conexion.php');
	$query = "SELECT b.idboletin, b.num_boletin, b.titulo, b.texto, bf.url, b.idboletin, b.numero FROM boletines b, boletines_fotos bf WHERE b.idboletin = bf.idboletin AND YEAR(alta) = '".$anio."' AND fecha_texto > '2019-10-13' ORDER BY b.idboletin DESC";
	$result = mysqli_query($conexion,$query);
	return($result);
}

function get_ver_boletin($idboletin)
{
	require('../../controller/conexion.php');
	$query = "SELECT b.num_boletin, b.titulo, b.texto, b.idboletin, b.numero, b.fecha_texto FROM boletines b WHERE b.idboletin = ".$idboletin;
	
	$result = mysqli_query($conexion,$query);
	$result = mysqli_fetch_array($result, MYSQLI_ASSOC);
	return($result);
}

function get_ver_boletin_fotos($idboletin)
{
    require('../../controller/conexion.php');
	$query = "SELECT * FROM boletines_fotos WHERE idboletin = ".$idboletin;
	$result = mysqli_query($conexion,$query);
	$result = mysqli_fetch_array($result, MYSQLI_ASSOC);
	return($result);
}
//////////////////////////////Fin Funciones Programa
?>