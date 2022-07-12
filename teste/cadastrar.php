<?php
class Media{
     public $nota1;
     public $nota2;
     public $media;
 
          public function calculaMedia(){
               if(isset($_POST['send'])){
               $this->nota1 = $_POST['Nota1'];
               echo "<h1>A sua media foi:  $this->nota1</h1>";
          }
          }
          }
?>