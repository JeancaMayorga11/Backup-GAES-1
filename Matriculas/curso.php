<?php
class Curso{
    public $cursos;
    public $valor_curso;
    // Inicializar listta de cursos.
    public function __construct(){
        $this->cursos = ["Python","PHP","C#","Java"];
        $this->valor_curso = 0;
    }
    // Consultar curso y sus valores.
    public function consultar_Curso($opciones){
        if('Python' == $this->cursos[0]){
            $this->valor_curso = 150000;
            $curso = $this->cursos[0];
        }else if('PHP' == $this->cursos[1]){
            $this->valor_curso = 100000;
            $curso = $this->cursos[1];
        }else if('C#' == $this->cursos[2]){
            $this->valor_curso = 180000;
            $curso = $this->cursos[2];
        }else if('Java' == $this->cursos[3]){
            $this->valor_curso = 200000;
            $curso = $this->cursos[3];
        }


        echo "<br>El curso ".$curso." esta por un valor de $".$this->valor_curso;
    }
    // Funcion para escoger un curso.
    public function asignar_Curso($opcion){
        $lista = [];
        if($opcion == $this->cursos[0]){
            $this->valor_curso = 150000;
            $curso = $this->cursos[0];
            $lista = [$curso,$this->valor_curso];
        }else if($opcion == ($this->cursos[1])){
            $this->valor_curso = 100000;
            $curso = $this->cursos[1];
            $lista = [$curso,$this->valor_curso];
        }else if($opcion == $this->cursos[2]){
            $this->valor_curso = 180000;
            $curso = $this->cursos[2];
            $lista = [$curso,$this->valor_curso];
        }else if($opcion == $this->cursos[3]){
            $this->valor_curso = 200000;
            $curso = $this->cursos[3];
            $lista = [$curso,$this->valor_curso];
        }
        return $lista;
    }
}
?>