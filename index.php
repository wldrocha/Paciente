<?php 
//use Models\Paciente as Paciente;
//echo "hola";
//require_once 'Models/Paciente.php';

require_once "Config/Autoload.php";
Config\Autoload::run();
use Models\Paciente as Paciente;

$paciente = new Paciente();
$hola = $paciente->add();
echo $hola;

?>