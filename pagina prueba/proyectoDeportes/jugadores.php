<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>jugadores</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles_jugadores.css"> 
    <!-- Cabecera y pie-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/styles_cabecera.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
      <?php include 'cabecera.php'; ?>
    <?php include 'conexionproyecto.php'; ?>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li>Real Madrid</li>
                        <li>Barcelona</li>
                        <li>Getafe</li>
                        <li>Villanueva del Arzobispo</li>
                    </ul>
                </div>
                <div class="col-md-8"><select><optgroup label="This is a group"><option value="12" selected="">This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select>    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Adrián</td>
                    <td>Ruiz Martínez</td>
                </tr>
                 <thead>
                <tr>
                    <th>Alias</th>
                    <th>Equipo</th>
                </tr>
            </thead>
                <tr>
                    <td>peta</td>
                    <td>Villanueva del Arzobispo</td>
                </tr>
                                 <thead>
                <tr>
                    <th>Nacionalidad</th>
                    <th>Número</th>
                </tr>
            </thead>
                <tr>
                    <td>Español</td>
                    <td>8</td>
                </tr>
                                 <thead>
                <tr>
                    <th>Fecha Nacimiento</th>
                    <th>Liga</th>
                </tr>
            </thead>
                <tr>
                    <td>13/07/2000</td>
                    <td>Liga Santander</td>
                </tr>
                                 <thead>
                <tr>
                    <th>Foto</th>
                </tr>
            </thead>
                <tr>
                    <td><img/></td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
            </div>
        </div>
    </div>
<?php include 'pie.php'; ?>
</body>

</html>