<?php
// Se crea clase que tomara y evaluara los descuentos.
class Descuentos{
    // Inicializar los metodos.
    public $edad;
    public $valor;
    public $aprendiz;
    public $adso;
    public $curso;

    public function __construct(){
        $this->edad = 0;
        $this->valor = 0;
        $this->aprendiz = null;
        $this->adso = null;
        $this->curso = null;
    }


    //Validar edad
    public function d_Edad(){
        $des = 0;
        if($this->edad >= 16 && $this->edad < 20){
            $des = $this->valor*0.10;
        }else if($this->edad >= 20 && $this->edad < 25){
            $des = $this->valor*0.05;
        }else if($this->edad < 16 || $this->edad > 25){
        }
        return $des;
    }
    // Funcion para validar si estudia en ADSO.
    public function d_Addso(){
        $des1 = 0;
        if($this->adso == 1){
            $des1 = $this->valor*0.15;
        }
        return $des1;
    }
    // Funcion para validar descuento si pertenece al sena
    public function d_Pertenece(){
        $des2 = 0;
        if($this->aprendiz == 1){
            $des2 = $this->valor*0.35;
        }else{
            $des2 = $this->valor*0.25;
            $this->adso = 0; // Si no pertenece al sena ,  no puede pertenecer a ADSO.
        }
        return $des2;
    }


    // Metodo para almacenar los datos recogidos de el formulario.
    public function generar_Descuento($edad, $aprendiz, $adso, $valor){
        $this->edad = $edad;
        $this->aprendiz = $aprendiz;
        $this->adso = $adso;
        $this->valor = $valor;
    }
}
// $des = new Descuentos();
// $des->generar_Descuento(18,1,1,100000);
// $des->Estructura();
// $d_edad = $des->d_Edad();
// $d_aprendiz = $des->d_Pertenece();
// $d_adso = $des->d_Addso();

// echo "<br>".$d_edad;
// echo "<br>".$d_adso;
// echo "<br>".$d_aprendiz;

?>