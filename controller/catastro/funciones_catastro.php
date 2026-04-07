<?php
include('../../controller/exe.php');
function get_detalle_cuenta($cuenta)
{
	$sql = "SELECT cuenta, tipo, m2_terreno, valor_unitario, valor_terreno, m2_construidos, valor_superficie, valor_construccion, valor_catastral
				FROM catastro
			WHERE cuenta LIKE '%".$cuenta."%'";
	$result = query_row_id($sql);
	return $result;
}