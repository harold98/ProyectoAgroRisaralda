<?php 
	/**
	* Archivo que redirecciona al contenido que se va incrustar dentro de la header y el footer
	**/
	if ($_GET['menu']=='ingreso') {
		require_once('Componentes/ingreso.php');
	}if ($_GET['menu']=='registro') {
		require_once('Componentes/registro.php');
	}if ($_GET['menu']=='home') {
		require_once('Componentes/home.php');
	} 
 ?>