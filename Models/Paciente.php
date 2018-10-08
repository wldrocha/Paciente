<?php namespace Models;

    class Paciente{
        private $id;
        private $nombre;
        private $apellido;
        private $cedula;
        private $diagnostico;
        private $conexion;

        public function __construct(){
            $this->conexion = new Conexion();
        }

        public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }
        
        public function get($atributo){
            return $this->$atributo;
        }
        
        public function listar(){
            $sql = "SELECT * FROM paciente";
            return $this->conexion->consultaRetorno($sql);
        }
        public function add(){

            $sql = "SELECT id_paciente WHERE nombre = '{$this->cedula}'";
            if ($this->conexion->consultaRetorno($sql)->num_rows > 0){
                $msj ="El nombre de la Carrera que introdujo ya existe, por tanto no se introdujo";
            }else{
                $sql = "INSERT INTO paciente VALUES('','{$this->nombre}','{$this->apellido}','{$this->cedula}','{$this->diagnostico}')";
                if($this->conexion->consultaSimple($sql)){
                    $msj = "Paciente agregado Satisfactoriamente!";
                    $alert = "success";
                }else{
                    $msj = "No se pudo agregar su Carrera";
                }
                if(empty($alert)){
                    $datos['alert'] = "danger";
                }
                if(isset($msj)){
                $datos = array();
                $datos['alert'] = $alert;
                $datos['msj'] = $msj;
                return $datos;
                }
            }
            
                

        }
        public function edit(){
            $sql = "DELETE FROM paciente WHERE id_carrera = '{$this->id}'";
				if($this->conexion->consultaSimple($sql)){
					$msj = "Carrera Eliminado satisfactoriamente";
					$alert = "success";
				}else{
					$msj = "No se pudo completar la eliminación del Carrera";
					$alert = "danger";
				}
					if(isset($msj)){
					$datos = array();
					$datos['alert'] = $alert;
					$datos['msj'] = $msj;
					}
					return $datos;
        }
        public function delete(){
            $sql = "";
        }

    }
?>