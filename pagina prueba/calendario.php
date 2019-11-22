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
                <tr>
                    <td>1</td>
                    <td>21/11/2019</td>
                    <td>Villacarrillo</td>
                    <td>0</td>
                    <td>VS</td>
                    <td>9</td>
                    <td>Villanueva del arzobispo</td>
                    <td>La Victoria</td>
                </tr>
            </tbody>
        </table>
    </div>
           <?php include 'pie.php'; ?>

</body>

</html>