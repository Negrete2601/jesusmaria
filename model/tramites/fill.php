<?php
	include("../../controller/tramites/funciones_tramites.php");
	function detalle_tramite($id)
	{
        $detalle_tramite = get_detalle_tramite($id);
        
        return $detalle_tramite;
	}
	
	function fill_requisitos($id)
	{
	    $requisitos_tramite = get_requisitos_tramite($id);
        
        return $requisitos_tramite;
	}
	
	function fill_tramites_secretaria()
	{
	    $tramite = get_tramite_secretaria();
        
        return $tramite;
	}