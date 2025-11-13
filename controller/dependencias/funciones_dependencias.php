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
	
	$sql ="SELECT t.id, t.nombre, t.clave, t.usuarios, t.costo, t.tiempo, t.vigencia, t.oficina, t.domicilio, t.horario, t.resolucion, t.email, s.secretaria, t.documento_obtenido, t.telefono, t.observaciones
				FROM tramites AS t, secretarias AS s
			WHERE t.id_secretaria = $id_dependencia AND s.id = $id_dependencia AND t.status = 1";

	$result = queryst($sql);

	return $result;
}

function get_requisitos_tramite($id_tramite)
{
	$sql = "SELECT id, requisito, documento, original, copia
				FROM requisitos
			WHERE id_tramite = $id_tramite AND status = 1";

	$result = queryst($sql);

	return $result;
}