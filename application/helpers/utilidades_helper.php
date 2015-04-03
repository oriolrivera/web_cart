<?php
/*
helper para saludar
*/
if(!function_exists("saludo"))
{
	function saludo()
	{
		return "hola desde mi helper";
	}
}
/*
helper para formatear fecha
*/
if(!function_exists("fecha_cadena"))
{
	function fecha_cadena()
	{
		$dia=date("w");
		$day=date("d");
		$mes=date("m");
		switch ($dia) 
		{
			case '0':
				$dia="Domingo";
			break;
			case '1':
				$dia="Lunes";
			break;
			case '2':
				$dia="Martes";
			break;
			case '3':
				$dia="Miércoles";
			break;
			case '4':
				$dia="Jueves";
			break;
			case '5':
				$dia="Viernes";
			break;
			case '6':
				$dia="Sábado";
			break;
			
		}
		switch ($mes) 
		{
			case '01':
				$mes="Enero";
			break;
			case '02':
				$mes="Febrero";
			break;
			case '03':
				$mes="Marzo";
			break;
			case '04':
				$mes="Abril";
			break;
			case '05':
				$mes="Mayo";
			break;
			case '06':
				$mes="Junio";
			break;
			case '07':
				$mes="Julio";
			break;
			case '08':
				$mes="Agosto";
			break;
			case '09':
				$mes="Septiembre";
			break;
			case '10':
				$mes="Octubre";
			break;
			case '11':
				$mes="Noviembre";
			break;
			case '12':
				$mes="Diciembre";
			break;
			
			
		}
		$fecha=$dia." ".$day." de ".$mes." de ".date("Y");
		return $fecha;


	}
}

