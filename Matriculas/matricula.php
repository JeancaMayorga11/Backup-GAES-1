
<?php


class Matricula{

    public $nombre_e;
    public $apellido_e;
    public $curso_nombre;
    public $valor_curso;
    public $adso;



    public function __construct($nombre, $apellido, $curso_nombre, $valor_curso, $adso){
        $this->nombre_e = $nombre;
        $this->apellido_e = $apellido;
        $this->curso_nombre = $curso_nombre;
        $this->valor_curso = $valor_curso;
        $this->adso = $adso;
    }



     public function Mostrar_matricula(){
        echo "<link rel='stylesheet' href='controlador.css'>";
        echo "<center><div class='resul_01'>";
        echo "<br>Nombre estudiante: ".$this->nombre_e;
        echo "<br>Apellido estudiante: ".$this->apellido_e;
        echo "<br>Curso estudiante: ".$this->curso_nombre;
        echo "<br>Costo a pagar del Curso: ".$this->valor_curso;
        echo "<br>Base de informatica a estudiar: ".$this->adso;

    }
}

?>
