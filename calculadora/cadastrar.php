<?php
class Media{
     public $nota1;
     public $nota2;
     public $media;
 
          public function calculaMedia(){
               if(isset($_POST['send'])){
                     if(is_numeric($_POST['Nota1']) && is_numeric( $_POST['Nota2'])){
                         $this->nota1 = $_POST['Nota1'];
                         $this->nota2 = $_POST['Nota2'];
                         $this->media = ($this->nota1 + $this->nota2)/2;
                         echo "<h1>A sua media foi: $this->media</h1>";
               }
                     else{
                    echo "<h1>Por favor digite um número!<h1>";
               }
              
          }
          }
          }