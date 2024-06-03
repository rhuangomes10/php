<?php 
class Carro{

    private $nome;
    private $marca;
    private $cor;
    private $data_de_fabricacao;
    private $modelo;

    function ligar(){
        echo "Ligado"; 
    }
    function get_cor(){
        return $this->cor;
    }

    function set_cor($cor){
        $this->cor = $cor;
    }

    function get_modelo(){
        return $this->modelo;
}
    function set_modelo($modelo){
    $this->modelo = $modelo;
}

function get_marca(){
    return $this->marca;
}
function set_marca($marca){
    $this->marca = $marca;
}
}
$carro_brenno = new Carro();
$carro_brenno->set_cor("Azul");
$carro_brenno->set_marca("Toyota");
$carro_brenno->set_modelo("Hilux");

?>