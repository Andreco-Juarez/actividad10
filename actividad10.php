<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = $_POST["nombre"];
        $apePat = $_POST["apePat"];
        $apeMat = $_POST["apeMat"];
        $sexo = $_POST["genero"];
        $edad = $_POST["edad"];
        $correo = $_POST["correo"];
        $tel = $_POST["Tel"];
        $cel = $_POST["Cel"];
        $escuela = $_POST["escuela"];
        $prom = $_POST["prom"];
        $primeraOpc = $_POST["primeraOpc"];
        $segundaOpc = $_POST["segundaOpc"];
        echo "<table border = '1'>";
            echo "<thead height='200'>";
                echo "<tr>";
                    echo"<th colspan='4' align='center'><h1>Solicitud de ingresos a la universidad</h1></th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";
                    echo "<td align='center'>$apePat</td>";
                    echo "<td align='center'>$apeMat</td>";
                    echo "<td colspan='2' align='center'>$nombre</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td align='center'><strong><u>Apellido paterno</u></strong></td>";
                    echo "<td align='center'><strong><u>Apellido materno</u></strong></td>";
                    echo "<td colspan='2' align='center'><strong><u>Nombre (s)</u></strong></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td align='center'><strong><u>Sexo:</u></strong></td>";
                    echo "<td align='center'>$sexo</td>";
                    echo "<td align='center'><strong><u>Edad:</u></strong></td>";
                    echo "<td align='center'>$edad</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan='2' align='center'>$correo</td>";
                    echo "<td align='center'>$tel</td>";
                    echo "<td align='center'>$cel</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan='2' align='center'><strong><u>Correo electónico</u></strong></td>";
                    echo "<td align='center'><strong><u>Teléfono</u></strong></td>";
                    echo "<td align='center'><strong><u>Celular</u></strong></td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td align='center'><strong><u>Escuela de procedencia</u></strong></td>";
                    echo "<td align='center'>$escuela</td>";
                    echo "<td align='center'><strong><u>Promedio:</u></strong></td>";
                    echo "<td align='center'>$prom</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan='2' align='center'><strong><u>Primera opción</u></strong></td>";
                    echo "<td colspan='2' align='center'>$primeraOpc</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan='2' align='center'><strong><u>Segunda opción</u></strong></td>";
                    echo "<td colspan='2' align='center'>$segundaOpc</td>";
                echo "</tr>";
            echo "</tbody>";
        echo "</table>";
    ?>
</body>
</html>