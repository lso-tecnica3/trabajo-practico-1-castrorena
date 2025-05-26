<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-transform: uppercase;
        }
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            border: 1px solid #aaa;
            padding: 8px 15px;
            text-align: center;
        }
    </style>
</head>
<body>
<table>
    <?php
    for ($i = 1; $i <= 50; $i++) {
        echo "<tr>";
        echo "<td>$i</td>";
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "<td>fizzbuzz</td>";
        } elseif ($i % 3 == 0) {
            echo "<td>fizz</td>";
        } elseif ($i % 5 == 0) {
            echo "<td>buzz</td>";
        } else {
            echo "<td></td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
