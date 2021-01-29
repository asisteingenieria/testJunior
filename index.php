<html>
    <head>
        <meta charset="utf-8">
        <title> Test Desarrollo Web Junior Básico</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script language="JavaScript">
        function click() {
        if (event.button==2) {
        alert('Inteligente pero la prueba no está difícil así que !contesta!')
        }
        }
        document.onmousedown=click;
        </script>
    </head>
<body oncontextmenu="return false">

    <!---
        ######################################################
        ######################################################
        
        Obviamente el código no está oculto del todo y sabemos que en internet tenemos un montón de lugares para encontrarlo.
        Toma pantallazo de esto y ya no hará falta contestar la prueba.

        Felicidades.

        ######################################################
        ######################################################
    --->

    <div class="jumbotron">
        <h1>Test Asiste</h1>
        <h2>Desarrollador Web Junior</h2>
        <p>Test básico de conocimiento para el cargo de desarrollador web junior. Preguntas abiertas y de multiple respuesta organizadas en desplegables.</p>
    </div>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form action="rta.php" method="post">
                <input class="form-control" type="text" name="nom" placeholder="Nombre Completo">
                <label>¿Cómo se abre y se cierra un bloque de código PHP?</label>
                <input class="form-control" type="text" name="uno" placeholder="Respuesta abierta">
                <label>¿Símbolo para empezar el nombre de una variable en PHP?</label>
                <select class="form-control" name="dos">
                    <option value="0">%</option>
                    <option value="0">&</option>
                    <option value="0">#</option>
                    <option value="1">$</option>
                </select>
                <label>¿Cuál de las siguientes variables está declarada de forma correcta?</label>
                <select class="form-control" name="tres">
                    <option value="0">var n = 2;</option>
                    <option value="0">$n = 2:</option>
                    <option value="1">$n = 2;</option>
                    <option value="0">n == 2;</option>
                </select>
                <label>¿Cuál símbolo se usa para concatenar?</label>
                <input class="form-control" type="text" name="cuatro" placeholder="Respuesta abierta">
                <label>¿Qué imprime este script?</label></br>
                <pre><code>
                $lista = array();
                $lista[] = array('nombre' => 'Carlos' , 'edad' => 19 );
                $lista[] = array('nombre' => 'Jorge' , 'edad' => 25, 'profesion' => 'Profesor' );
                $lista[] = array('nombre' => 'Ana' , 'edad' => 32 );
                $cadena = $lista[2][0].' '. $lista[0][1].' '.$lista[1][2];
                echo $cadena;</code></pre>
                <select class="form-control" name="cinco">
                    <option value="0">Jorge Carlos Profesor</option>
                    <option value="1">Ana Carlos 25</option>
                    <option value="0">Ana 19 Profesor</option>
                    <option value="0">Ninguna de las anteriores</option>
                </select>
                <label>¿Cuál control debe crearse en un formulario para enviar la información proporcionada por el usuario?</label>
                <select class="form-control" name="seis">
                    <option value="0">Control Text</option>
                    <option value="0">Control Radio</option>
                    <option value="0">Control Select</option>
                    <option value="1">Control Submit</option>
                </select>
                <label>Para poder probar documentos php sin conexión a internet es necesario instalar un servidor web de manera local</label>
                <select class="form-control" name="siete">
                    <option value="1">Verdadero</option>
                    <option value="0">Falso</option>
                </select>
                <label>¿Cómo se llama la aplicación visual que nos permite crear y manipular bases de datos sin necesidad de tener un conocimiento profundo de MySQL?</label>
                <select class="form-control" name="ocho">
                    <option value="0">Apache</option>
                    <option value="1">phpMyAdmin</option>
                    <option value="0">PHP</option>
                    <option value="0">DreamWeaver</option>
                </select>
                <label>Sentencia utilizada para eliminar una base de datos MySQL</label>
                <select class="form-control" name="nueve">
                    <option value="0">DELEATE DATABASE</option>
                    <option value="1">DROP DATABASE</option>
                    <option value="0">TRUNCATE DATABASE</option>
                    <option value="0">ALTER DATABASE</option>
                </select>
                <label>Linea correcta para mostrar las columnas dentro de una tabla (Omita las comillas)</label>
                <select class="form-control" name="diez">
                    <option value="0">SELECT * FROM "nombreTabla";</option>
                    <option value="0">SHOW FROM "nombreTabla";</option>
                    <option value="0">SELECT "nombreTabla" FROM "nombreDB";</option>
                    <option value="1">SHOW COLUMNS FROM "nombreTabla.nombreDB"; </option>
                </select>
                <label>Línea de código para llamar información desde un .php a otro.</label>
                <select class="form-control" name="once">
                    <option value="1">include('nombre.php');</option>
                    <option value="0">include = "nombre.php";</option>
                    <option value="0">call('nombre.php');</option>
                    <option value="0">include('nombre.php')</option>
                </select>
                <label>¿En una hoja .css se pueden usar valores negativos en un padding?</label>
                <select class="form-control" name="doce">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
                <label>¿Cuál es la forma más eficiente de aplicar estilos css?</label>
                <select class="form-control" name="trece">
                    <option value="1">Hola de estilos externa</option>
                    <option value="0">En línea</option>
                    <option value="0">Mediante PHP</option>
                    <option value="0">Incrustado en la cabecera</option>
                </select>
                <label>Modo de mostrar fecha actual en PHP</label>
                <select class="form-control" name="catorce">
                    <option value="0">echo "Y-m-a";</option>
                    <option value="1">echo "Y-m-d";</option>
                    <option value="0">echo = Y-m-a;</option>
                    <option value="0">printf == "Y-m-d";</option>
                </select>
                <label>¿Cómo definir color rojo de un texto en css?</label>
                <select class="form-control" name="quince">
                    <option value="0">color:red;</option>
                    <option value="0">color:#FF0000;</option>
                    <option value="0">color:rgb(255,0,0);</option>
                    <option value="1">Todas las anteriores</option>
                </select>
                <input class="form-control btn btn-outline-success" type="submit" name="btnE" placeholder="Enviar">    
            </form>
            </div>
        </div>
    </div>

</body>
</html>