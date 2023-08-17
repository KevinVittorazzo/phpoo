<?php
    class Retangulo{
        // atributos da classe Retângulo
        public $largura;
        public $altura;


        //Métodos
        function __construct($largura, $altura){
            $this->largura = $largura;
            $this->altura = $altura;
        }
        
        function calcular_area(){
            return "<br> A área do retângulo é: ".$this->largura * $this->altura;
        }

        function calcular_perimetro(){
            return "<br> O perímetro do retângulo é: ".$this->largura*2 + $this->altura*2;
        }
}
?>
