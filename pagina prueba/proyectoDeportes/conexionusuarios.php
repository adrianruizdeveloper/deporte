<?php

try {
      $user = "root";  // usuario con el que se va conectar con MySQL
      $pass = "";  // contraseña del usuario 
      $dbname = "usuarios";  //nombre de la base de datos
      $db = new PDO("mysql:host=localhost; dbname=$dbname", $user, $pass);  //conectar con MySQL y SELECCIONAR LA BBDD 
      $db = null;  // cerrar la conexión
    } catch (PDOException $e) {  // Si hubieran errores de conexión, se captura un objeto de tipo PDOException
        print "<p>Error: NO SE PUDO CONECTAR AL SERVIDOR MySQL o a la BASE DE DATOS.</p>\n";
        print "<p>Error: " . $e->getMessage() . "</p>\n";  // mensaje de excepción
        exit();
    }
?>
