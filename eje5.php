<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla coloreada</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 20px;
            height: 20px;
        }
        .rojo {
            background-color: red;
        }
        .verde {
            background-color: lime;
        }
        .azul {
            background-color: blue;
        }
    </style>
</head>
<body>
<table>
    <?php
    for ($fila = 1; $fila <= 20; $fila++) {
        echo "<tr>";
        for ($columna = 1; $columna <= 20; $columna++) {
            if ($fila == $columna) {
                echo "<td class='verde'></td>";
            } elseif ($columna < $fila) {
                echo "<td class='rojo'></td>";
            } else {
                echo "<td class='azul'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
