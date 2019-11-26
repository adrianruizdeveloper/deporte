<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>calendario</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles_calendario.css">
     <!-- Cabecera y pie-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/styles_cabecera.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/styles.css">
     <link rel="stylesheet" href="assets/css/Navigation-with-Button_cabecera.css">
        <?php include 'conexionproyecto.php';
    $consulta="SELECT idpartido, fecha_cal,local_cal,goleslocal_cal,visitante_cal,golesvisitante_cal,idestadio_cal FROM calendario";

    ?>


</head>

<body>
                <?php include 'cabecera.php'; ?>

    <div class="table-responsive" id="calendario">
        <table class="table">
            <thead>
                <tr>
                    <th>Jornada</th>
                    <th>Fecha</th>
                    <th>Local</th>
                    <th>Goles</th>
                    <th>VS</th>
                    <th>Goles</th>
                    <th>Vistante</th>
                    <th>Estadio</th>
                </tr>
            </thead>
            <tbody>


            <?php

            // Se crea un bucle que se repetirá tantas veces como filas tenga la consulta.
            foreach ($db->query($consulta) as $fila) {
                $Jornada = $fila['idpartido'];
                $Fecha = $fila['fecha_cal'];
                $Local = $fila['local_cal'];
                $GolesL = $fila['goleslocal_cal'];
                $GolesV = $fila['golesvisitante_cal'];
                $Visitante = $fila['visitante_cal'];
                $Estadio = $fila['idestadio_cal'];
            //$localvisitante = "Select nombre_eq from equipo where idequipo=".$equipo.";";

                    /*function localVisitante($equipo){
                        foreach ($db->query($localvisitante) as $fila) {
                        $hola = $fila['nombre_eq'];

                    }
                    return $hola;
                }*/
                $consulta2 = "Select nombre_eq from equipo where idequipo=".$Local.";";
                //$consulta2 = "Select nombre_eq from equipo where idequipo=".localvisitante($Local).";";
                $consulta3 = "Select nombre_eq from equipo where idequipo=".$Visitante.";";
                //$consulta3 = "Select nombre_eq from equipo where idequipo=".localvisitante($Visitante).";";
                $consulta4 = "Select * from estadio where idestadio=".$Estadio.";";
                foreach ($db->query($consulta2) as $fila) {
                   $Local2 = $fila['nombre_eq'];

                }
                foreach ($db->query($consulta3) as $fila) {
                   $Vistante2 = $fila['nombre_eq'];

                }
                foreach ($db->query($consulta4) as $fila) {
                    $estadio2 = $fila['nombre_estadio'];

                }
                ?>
                <!-- Se crea una fila de la tabla con los datos obtenidos -->
                <tr><td><?php echo ($Jornada); ?></td>
                    <td><?php echo ($Fecha); ?></td>
                    <td><?php echo ($Local2); ?></td>
                    <td><?php echo ($GolesL); ?></td>
                    <td><?php echo ("VS"); ?></td>
                    <td><?php echo ($GolesV); ?></td>
                    <td><?php echo ($Vistante2); ?></td>
                    <td><?php echo ($estadio2); ?></td>

                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>


           <?php include 'pie.php'; ?>

</body>

</html>



