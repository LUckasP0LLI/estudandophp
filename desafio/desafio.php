<?php
class Animal{
     public $nome;
     public $especie;
     public $peso;
     public $tamanho;
          public function definirEspecie(){
               echo"Imprimindo Especie<hr>";
          }
 
}
$obj = new Animal;
$obj->definirEspecie();
$obj->nome = "Cobra";
$obj->especie = "Sucuri";
$obj->peso= 0.7;
$obj->tamanho = 1.75;
echo" $obj->nome<hr>";
echo" $obj->especie<hr>";
echo" $obj->peso<hr>";
echo" $obj->tamanho<hr>";

?>