<?php namespace Controllers;

use Models\Paciente as Paciente;

class pacienteController{
    private $paciente;

    public function __construct(){
        $this->paciente = new Paciente();
    }

    public function index(){
        $this->paciente->listar();
    }
    public function gestionPaciente(){
        #En acción se debe colocar agregar, modificar, eliminar
        #descomentar la siguiente instrucción y colocar cualquiera de las opciones de arriba
       
        #$_REQUEST['accion'] = ""
        if($_REQUEST['accion'] == "agregar"){
            
            # Controlador que accede a agregar paciente
            $this->paciente->set("nombre","jose");
            $this->paciente->set('apellido','useche');
            $this->paciente->set('cedula','12334123');
            $this->paciente->set('diagnostico','este diagnostico es de prueba');
            $this->paciente->add();
        }
        elseif ($_REQUEST['accion'] == "modificar") {
            # code...
            $this->paciente->set('id',2);
            $this->paciente->set("nombre","pepito");
            $this->paciente->set('apellido','usechin');
            $this->paciente->set('cedula','98765432');
            $this->paciente->set('diagnostico','este diagnostico es de prueba otra');
            $this->paciente->add();
        }
        elseif ($_REQUEST['accion'] == "eliminar") {
            # code...
            $this->paciente->set('id',1);
            $this->paciente->delete(); 
        }
    }
    
}

?>