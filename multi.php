<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Tabla de Multiplicar</h1>
    <?php
    if (isset($_GET['num']) && is_numeric($_GET['num'])) {
        $num = intval($_GET['num']);
        if ($num >= 1 && $num <= 10) {
            echo "<table border='1'>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>$num x $i</td>";
                echo "<td>" . ($num * $i) . "</td>";
                echo "</tr>";
            }
            
            echo "</table>";
        }
    }
    ?>
</body>
</html>
