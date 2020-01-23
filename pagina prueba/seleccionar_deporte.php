<?php
$deporte = $_POST['valor'];

session_start();

switch ($deporte) {
case 1:
$_SESSION['deporte'] = "1";
echo 'futbol';
break;
case 2:
$_SESSION['deporte'] = "2";
echo 'futbol sala';
break;
case 3:
$_SESSION['deporte'] = "3";
echo 'baloncesto';
break;
case 4:
$_SESSION['deporte'] = "4";
echo 'balonmano';
break;
}