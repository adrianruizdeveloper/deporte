<?php

require ('../conexionproyecto.php');
error_reporting(E_ERROR);
$id_eq = $_GET['id_eq'];

$query = "SELECT idjugador FROM jugador WHERE provincia_id = '$id_provincia' ORDER BY municipio" ;
$resultado = $mysqli->query($query);
$html="[";
while($row = $resultado->fetch_assoc())
{
    $html.= "{\"value\":".$row['id'].",\"label\":\"".$row['municipio']."\"},";
}
$html.=  "]";
$html=str_replace(",]","]", $html);
echo $html;
