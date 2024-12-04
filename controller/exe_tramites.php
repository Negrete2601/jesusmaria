<?php

function queryst($sql)
{
	include('conexion_tramites.php');

	$result = mysqli_query($conexion, $sql);

	return $result;
}

function query_num_rowst($sql)
{
	include('conexion_tramites.php');	

	$result = mysqli_query($conexion, $sql);

	$result = mysqli_num_rows($result);

	return $result;
}

function query_last_idt($sql)
{
	include('conexion_tramites.php');

	$result = mysqli_query($conexion, $sql);

	$result = mysqli_insert_id($conexion);

	return $result;
}

function query_row_idt($sql)
{
	include('conexion_tramites.php');

	$result = mysqli_query($conexion, $sql);

	$result = mysqli_fetch_array($result, MYSQLI_ASSOC);

	return $result;
}