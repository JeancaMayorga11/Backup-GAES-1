<?php
class Estudiante{
    public $nombre;
    public $apellido;
    public $fecha;
    public $senaCarrera;
    public $id;
    // Contructor para inicializar los atributos.
    public function __construct(){
        $this->nombre = "";
        $this->apellido = "";
        $this->fecha = null;
        $this->senaCarrera = null;
        $this->id = null;
    }
    // Funcion para crear estudiante.
    public function crearEstudiante($nombre, $apellido, $fecha, $senaCarrera, $identificacion){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fecha = $fecha;
        $this->senaCarrera = $senaCarrera;
        $this->id = $identificacion;
        return [$this->nombre,$this->apellido];
    }
    // Funcion para consultar datos estudiante.
    public function consultarDatos($identificacion){
        if($this->validarDatos($identificacion)){
            echo "<br>Nombre: ".$this->nombre;
            echo "<br>Apellido: ".$this->apellido;
            echo "<br>N° Documento: ".$this->id;
            echo "<br>Fecha: ".$this->fecha;
            echo "<br>Carrera Sena: ".$this->senaCarrera;       
        }
    }
    // Funcion para validar datos.
    public function validarDatos($identificacion){
            if($identificacion == $this->id){
                return true;
            }else{
                echo "<br>Datos incorrectos!";
                return false;
            }
    }
    // Funcion para actualizar datos.
    function updateDatos($nombre, $apellido, $fecha, $identificacion){
        if($this->validarDatos($identificacion)){
            $this->$nombre = $nombre;
            $this->$apellido = $apellido;
            $this->$fecha = $fecha;
            echo "<br>Datos actualizados correctamente";
            return [$nombre,$apellido];
        }else{
            echo "<br>El documento ingresado es incorrecto!";
        }
    }  
    // Metodo para calcular la edad del estudiante.
    public function calcular_Edad($fecha){
        $fecha_a = date_create(date('Y-m-d')); // Se crean los objetos de fechas
        $fecha = date_create($fecha);
        $edad = date_diff($fecha_a,$fecha); // Se realiza la diferencia.
        return $edad->y; // Se retorna la edad calculada desde las mismas fechas.
    }
}
$c = new Estudiante();
$c->calcular_Edad('1995-05-19');
?>