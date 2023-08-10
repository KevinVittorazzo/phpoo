<?php
    require ("Pessoa.php");
    require ("Retangulo.php");
    class Fruta{
        // atributos
        private $nome;
        public $cor;

        //Métodos
        function __construct($nome, $cor){
            $this->nome = $nome;
            $this->cor = $cor;
        }

        /* Usando com médoto"set"
        function set_name($nome){
            $this->nome = $nome;
        }*/

        function get_name(){
            return $this->nome;
        }

        /* Usando com método "set"
        function get_cor($cor){
            $this->cor = $cor;
        }*/

        function get_cor(){
            return $this->cor;
        }
}
// criando um objeto para Fruta
$maca = new Fruta("maca_crocante","marrom");
$banana = new Fruta("banana_chips","amarelo");

// criando um objeto para Pessoa
$aluno1 = new Pessoa("Vinicius dos Santos Tavares","18", "Professor de Inglês");
$aluno2 = new Pessoa("Maria Carolina Soares Costa","17","Monitora de linguagem de programação");

//criando um objeto para Retangulo
$retangulo = new Retangulo(2, 4);

/* criando objeto com "set"
$maca->set_name("maca_crocante");
$banana->set_name("banana_chips");
*/

//print $maca->nome;
print $maca->get_name();
print "<br>".$maca->get_cor();
print "<br>".$banana->get_name();
print "<br>".$banana->get_cor();

print "<br>".$aluno1->apresentar();
print "<br>".$aluno2->apresentar();


print "<br>".$retangulo->calcular_area();
print "<br>".$retangulo->calcular_perimetro();
?>