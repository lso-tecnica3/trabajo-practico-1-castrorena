<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablero de ajedrez</title>
    <style>
        table {
            border-collapse: collapse; 
            margin: 20px auto;
        }
        td {
            width: 50px; 
            height: 50px; 
        }
        .blanco {
            background-color: white; 
        }
        .negro {
            background-color: black; 
        }
    </style>
</head>
<body>
<table>
    <?php
    // Este bucle genera las 8 filas del tablero
    for ($fila = 0; $fila < 8; $fila++) {
        echo "<tr>"; 

        // Este bucle genera las 8 columnas para cada fila
        for ($columna = 0; $columna < 8; $columna++) {
            if (($fila + $columna) % 2 == 0) {
                echo '<td class="blanco"></td>';
            } else {
                echo '<td class="negro"></td>'; 
            }
        }

        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
