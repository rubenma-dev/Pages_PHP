<?php

$nombreArchivo="archivo.txt";
$contenidoArchivo="Hola, saludos";

$archivoACrear=fopen($nombreArchivo,"w");

fwrite($archivoACrear,$contenidoArchivo);
fclose($archivoACrear);

?>