<?php

//Extracción de datos

//Ejemplo 1 Muestra los primeros 5 caracteres de testo
$post = 'Este es un post de prueba que puedes ver en una pagina';
$extraer = substr($post, 0, 5);
echo $extraer;

//Ejemplo 2 eliminar espacios
$data = "gitJose";
$conver = trim($data);
echo $conver;