<?php
include('../../controller/exe_tramites.php');
function get_secretarias()
{	
	$sql="SELECT id, secretaria,icono
			FROM secretarias
			WHERE status = 1";

	$result = queryst($sql);

	return $result;
}

function get_dependencias()
{	
	$sql="SELECT id, secretaria
			FROM secretarias
			WHERE status = 1";

	$result = queryst($sql);

	return $result;
}

function get_tramites_dependenciat($id_dependencia)
{
	
	$sql ="SELECT t.id, t.nombre, s.secretaria, t.documento_obtenido, t.telefono
				FROM tramites AS t, secretarias AS s
			WHERE t.id_secretaria = $id_dependencia AND s.id = $id_dependencia AND t.status = 1";

	$result = queryst($sql);

	return $result;
}