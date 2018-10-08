<?php namespace Models;

	class Conexion{

		private $server;
		private $user;
		private $pass;
		private $db;
		private $conexion;

		public function __construct(){
            $this->server="localhost";
            $this->user="root";
            $this->pass="21584775";
            $this->db="prueba";
            $this->conexion = new \mysqli($this->server, $this->user, $this->pass, $this->db);
            $this->conexion->query('SET CHARACTER SET UTF8');

            if($this->conexion->connect_error){
                echo "Problemas con la conexion";
            }
		}

		public function consultaSimple($sql){
            $this->conexion->query($sql);
            if($this->conexion->affected_rows < 1){
                $this->conexion->rollback();
                return 0;
            }else{
                return 1;
            }

		}
		public function consultaRetorno($sql){
            if($datos = $this->conexion->query($sql)){
                return $datos;
            }
		}

		public function __destruct(){
            $this->conexion->close();
		}
	}
 ?>