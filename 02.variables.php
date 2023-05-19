<?php 

#variable string
$hija = "ariadne";
echo "esta vasriable es un string: $hija";
echo "<br> </br>";

#variable number
$numero = 3;
echo "esta es una variable numero: $numero";
echo "<br> </br>";

#variable booleana
$booleana = true ;
echo "es una variable booleana : $booleana";
echo "<br> </br>";

#arrays
$metodo_array = array("ariadne", "laia", "mama");
echo "este es el segundo valor de mi primer array: $metodo_array[1]";
echo "<br> </br>";


#arrays con propiedades 
$verduras = array("propiedad1" => "el valor de la primera propiedad", "propiedad2" => "el valor de la segunda propiedad" , 
"propiedad3" => "el valor de la tercera propiedad");

echo "$verduras[propiedad1] del array";
echo "<br> </br>";

#variables objeto 
$objeto = (object)["propiedad1" => "valor de la prop 1", "propiedad2" => "valor de la propiedad 2"];
echo "$objeto->propiedad1 de mi primer objeto";
?>