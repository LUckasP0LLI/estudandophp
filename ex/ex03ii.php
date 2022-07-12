<?php
class Convert{
     public $texto;
     public function convertLower($text){
        return strtolower($text);
        
     }
}
$obj = new Convert;

echo($obj->convertLower("CLEBER MACHADO"));
