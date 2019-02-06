<?php 
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', "http://localhost/Administracion/");
//use Models\Paciente as Paciente;
//echo "hola";
//require_once 'Models/Paciente.php';

require_once "Config/Autoload.php";
Config\Autoload::run();
Config\Enrutador::run(new Config\Request());


?>