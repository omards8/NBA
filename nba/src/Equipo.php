<?php
  /**
   *
   */
  class Equipo
  {
    private $conexion=null;
    private $nombre;
    private $ciudad;
    private $conferencia;
    private $division;

    function __construct()
    {
    }

    public function comprobarCampos($post){
      $error=null;
      if(!isset($_POST)||!isset($_POST["Nombre"])||!isset($_POST["Ciudad"])||!isset($_POST["Conferencia"])||!isset($_POST["Division"])){
        $error="";
      }elseif($_POST["Nombre"]==""){
        $error="No has introducido el Nombre";
      }elseif($_POST["Ciudad"]==""){
        $error="No has introducido la Ciudad";
      }elseif($_POST["Conferencia"]==""){
        $error="No has introducido la Conferencia";
      }elseif($_POST["Division"]==""){
        $error="No has introducido la Division";
      }else{
        $error=false;
        $this->nombre=$post["Nombre"];
        $this->ciudad=$post["Ciudad"];
        $this->conferencia=$post["Conferencia"];
        $this->division=$post["Division"];
      }
      return $error;
    }
    public function conectar(){
      $this->conexion = new mysqli("localhost", "root", "", "nba");
      if ($this->conexion->connect_errno) {
          echo "Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
      }
    }
    public function insertarEquipo($post){

      $consulta="INSERT INTO `equipos` (`Nombre`, `Ciudad`, `Conferencia`, `Division`)
                  VALUES ('$this->nombre', '$this->ciudad', '$this->conferencia', '$this->division')";
      $this->conexion->query($consulta);
    }
    public function listarEquipos()
    {
      $consulta="SELECT * from equipos";
      $resultado=$this->conexion->query($consulta);
      return $resultado;
    }
  }

  ?>
