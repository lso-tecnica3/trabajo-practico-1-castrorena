<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla</title>
    <style>
        table {
            border-collapse: collapse; 
            margin: 20px auto; 
        }

        td, th {
            border: 1px solid #999; 
            text-align: center; 
            width: 40px;  
            height: 40px; 
        }

        th {
            background-color: #c1e7f0; 
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>X</th> 

        <?php
        // Este bucle genera los números de 1 a 10 para la primera fila (encabezado de columnas)
        for ($columna = 1; $columna <= 10; $columna++) {
            echo "<th>$columna</th>"; 
        }
        ?>
    </tr>

    <?php
    // Este bucle genera las filas de la tabla, del 1 al 10
    for ($fila = 1; $fila <= 10; $fila++) {
        echo "<tr>"; 

        echo "<th>$fila</th>"; 

        // Este bucle genera las celdas con el resultado de multiplicar fila x columna
        for ($columna = 1; $columna <= 10; $columna++) {
            $resultado = $fila * $columna;
            echo "<td>$resultado</td>"; 
        }

        echo "</tr>"; 
    }
    ?>
</table>

</body>
</html>
