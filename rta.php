<html>
    <head>
        <meta charset="utf-8">
        <title> Test Desarrollo Web Junior Básico</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
<body>

<?php
    if(isset($_POST['btnE'])){
        $nom = $_POST['nom'];
        $u = $_POST['uno'];
        $dos = $_POST['dos'];
        $tres = $_POST['tres'];
        $c = $_POST['cuatro'];
        $cinco = $_POST['cinco'];
        $seis = $_POST['seis'];
        $siete = $_POST['siete'];
        $ocho = $_POST['ocho'];
        $nueve = $_POST['nueve'];
        $diez = $_POST['diez'];
        $once = $_POST['once'];
        $doce = $_POST['doce'];
        $trece = $_POST['trece'];
        $catorce = $_POST['catorce'];
        $quince = $_POST['quince'];

        if($u == "<?php ?>"){
            $uno = "1";
        }else {
            $uno = "0";
        }
        if($c == "."){
            $cuatro = "1";
        }else {
            $cuatro = "0";
        }

        $cuenta = $uno + $dos + $tres + $cuatro + $cinco + $seis + $siete + $ocho + $nueve + $diez + $once + $doce + $trece + $catorce + $quince;

        $destino = "desarrollador@asisteingenieria.com, ivan.davila@asisteingenieria.com";
        $nombre = $nom;
        $asunto = "Test Desarrollador Web Junior";
        $mensaje = "Total de respuestas correctas" . $cuenta . "/15";
        $respuestas = "1. " . $uno . " || 2. " .
        $dos . " || 3. " .
        $tres . " || 4. " .
        $cuatro . " || 5. " .
        $cinco . " || 6. " .
        $seis . " || 7. " .
        $siete . " ||  8. " .
        $ocho . " || 9. " .
        $nueve . " || 10. " .
        $diez . " || 11. " .
        $once . " || 12. " .
        $doce . " || 13. " .
        $trece . " || 14. " .
        $catorce . " || 15. " .
        $quince;
        $contenido = "Nombre: " . $nombre . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje . "\nRespuestas: " . $respuestas;
        // mail($destino,"Contacto", $contenido);

        echo $respuestas;
    }

    echo "<div class=\"jumbotron\">
        <h2>La cantidad de respuestas correctas "  . $cuenta . "/15 </h2>
        <p>Gracias por tu participación, a nuestro correo se envió tu respuesta.</p>
    </div>";
?>

    <a class="btn btn-outline-success" href="index.php">Regresar</a>

</body>
</html>