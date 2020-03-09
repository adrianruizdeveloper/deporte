<?php
include '../../conexionusuarios.php';
$msg = "";
//Se recoge los datos que introduce el usuario se guarda en una variable para que no se pueda usar la insercion sql
$usuario_registro = trim($_POST['usuario_registro']);
$nombre_registro = trim($_POST['nombre_registro']);
$apellidos_registro = trim($_POST['apellidos_registro']);
$correo_registro = trim($_POST['correo_registro']);
$contrasena_registro = trim($_POST['contrasena_registro']);
$contrasena_registro2 = trim($_POST['contrasena_registro2']);
$fecha_nac = $_POST['fecha_nac_registro'];
$fecha_nac = dateformat($fecha_nac);
$numero_telf = trim($_POST['num_telf_registro']);
$futbol_select = trim($_POST['futbol_registro']);

$futbol_sala_select = trim($_POST['futbol_sala_registro']);
$baloncesto_select = trim($_POST['baloncesto_registro']);
$balonmano_select = trim($_POST['balonmano_registro']);
echo "<script>alert(\"hols\");</script>";
//Se comprueba que la costraseña sea algo segura y iguales
if (strlen($contrasena_registro) < 6) {
    echo ("La costraseña tiene que tener minimo 6 carapteres");
} else if ($contrasena_registro != $contrasena_registro2) {
    echo ("Las costraseñas tiene que ser iguales");
} else {
    $hora = date("Y-m-d H:i:s");
    $contraseña = password_hash($contrasena_registro, PASSWORD_DEFAULT);
    //Se encripta la contraseña
    $sql_contrasena = $db2->prepare("INSERT INTO contrasenas(contrasena,fecha_modificacion) VALUES (:contrasena_registro,' $hora ');");
    $sql_contrasena->bindParam('contrasena_registro', $contraseña, PDO::PARAM_STR);
    $sql_contrasena->execute();
    $consulta_contraseña = "Select id_contrasena from contrasenas where contrasena = \"$contraseña\" AND  fecha_modificacion = \"$hora\";";
    $idcontra = 0;
    foreach ($db2->query($consulta_contraseña) as $fila) {
        $idcontra = $fila['id_contrasena'];
    }
    //Se introduce los datos seguros en la base de datos
    $sql_usuario = $db2->prepare("INSERT INTO usuarios(usuario,nombre_usu,apellido_usu,fecha_nac_usu, n_telefono_usu, email,id_contrasena_usu) VALUES (:usuario_registro,:nombre_registro,:apellidos_registro, :fecha_nac , :numero_telf , :correo_registro,  $idcontra);");
    $sql_usuario->bindParam('usuario_registro', $usuario_registro, PDO::PARAM_STR);
    $sql_usuario->bindParam('nombre_registro', $nombre_registro, PDO::PARAM_STR);
    $sql_usuario->bindParam('apellidos_registro', $apellidos_registro, PDO::PARAM_STR);
    $sql_usuario->bindParam('fecha_nac', $fecha_nac, PDO::PARAM_STR);
    $sql_usuario->bindParam('numero_telf', $numero_telf, PDO::PARAM_STR);
    $sql_usuario->bindParam('correo_registro', $correo_registro, PDO::PARAM_STR);
    $sql_usuario->execute();

    $query = "select usuario,id_usuario from usuarios where usuario=:username";
    $stmt = $db2->prepare($query);
    $stmt->bindParam('username', $usuario_registro, PDO::PARAM_STR);
    $stmt->execute();
    $count = $stmt->rowCount();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $usuario = $row['id_usuario'];
//Se introduce los campos que ha marcado en la base de datos
    $sql2 = $db2->prepare("INSERT INTO deportes_sel(id_usuario_dep, futbol_dep, baloncesto_dep, futbol_sala, balonmano_dep) VALUES (:usuario,:futbol, :baloncesto, :futbol_sala, :balonmano);");
    $sql2->bindParam('usuario', $usuario, PDO::PARAM_STR);
    $sql2->bindParam('futbol', $futbol_select, PDO::PARAM_STR);
    $sql2->bindParam('baloncesto', $baloncesto_select, PDO::PARAM_STR);
    $sql2->bindParam('futbol_sala', $futbol_sala_select, PDO::PARAM_STR);
    $sql2->bindParam('balonmano', $balonmano_select, PDO::PARAM_STR);
    $sql2->execute();
    echo ("OK");
}

function dateformat($fecha)
{
    $fecha = strtotime($fecha);
    //Cambia el formato para que se pueda introducir en la base da datos
    return date(date('Y', $fecha) . "-" . date('m', $fecha) . "-" . date('d', $fecha));
}

?>

