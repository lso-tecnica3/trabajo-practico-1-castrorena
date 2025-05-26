<!DOCTYPE html>
<html>
<head>
    <title>Tabla</title>
    <style>
        table {
            border-collapse: collapse;
            font-size: 12px;
        }
        td {
            width: 100px;
            vertical-align: top;
            padding: 5px;
            border: 1px solid #000;
        }
        ul {
            list-style-type: disc;
            margin: 0;
            padding-left: 15px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <?php
        for ($col = 0; $col < 5; $col++) {
            echo "<td><ul>";
            for ($i = 1 + $col * 10; $i <= 10 + $col * 10; $i++) {
                echo "<li>$i</li>";
            }
            echo "</ul></td>";
        }
        ?>
    </tr>
    <tr>
        <?php
        $valores = [
            [1.00, 2.99, 3.98, 4.97, 5.96, 6.95, 7.94, 8.93, 9.92, 10.91],
            [1.90, 2.89, 3.88, 4.87, 5.86, 6.85, 7.84, 8.83, 9.82, 10.81],
            [1.80, 2.79, 3.78, 4.77, 5.76, 6.75, 7.74, 8.73, 9.72, 10.71],
            [1.70, 2.69, 3.68, 4.67, 5.66, 6.65, 7.64, 8.63, 9.62, 10.61],
            [1.60, 2.59, 3.58, 4.57, 5.56, 6.55, 7.54, 8.53, 9.52, 10.51],
        ];
        for ($col = 0; $col < 5; $col++) {
            echo "<td><ul>";
            for ($i = 0; $i < 10; $i++) {
                echo "<li>" . number_format($valores[$col][$i], 2) . "</li>";
            }
            echo "</ul></td>";
        }
        ?>
    </tr>
</table>
</body>
</html>
