<?php

$saludo = "Hola!";
$booleana = true;
$numero = 3;
$array = array("primer valor", "segundo valor");
$array_con_props = array("primer valor" => "valor del primer valor", "segundo valor" => "valor del segundo valor" )

var_dump($array_con_props); # => array(2)
var_dump($booleana); # => boolean(true)
var_dump($saludo); # => string(5)
#imprime el tipo de variable que es y la longitud del mismo en caso de ser string o integer
#en caso de ser booleana imprime el valor

?>