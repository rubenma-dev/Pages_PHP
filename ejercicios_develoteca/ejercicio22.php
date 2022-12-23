<?php

$frutas = array("m"=>"Manzanas","p"=>"Peras","u"=>"Uvas");

print_r($frutas);

echo $frutas ["m"]."<br/>";

foreach($frutas as $indice=>&$valor){

    echo "El valor " .$valor." Tiene el indice:".$indice."<br/>";

    // echo $frutas[$indice]."<br/>";

}

?>