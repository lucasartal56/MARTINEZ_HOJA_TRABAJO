<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz en PHP</title>
    <link rel="stylesheet" href="../3. Matriz/style.css">
</head>
<body>

<div class="container">
    <h1>Recorrido de una matriz</h1>
    <form method="post" action="">
        <label for="filas">Número de filas:</label>
        <input type="number" name="filas" id="filas" min="1" required>
        <br><br>
        <label for="columnas">Número de columnas:</label>
        <input type="number" name="columnas" id="columnas" min="1" required>
        <br><br>
        <input type="submit" value="Recorrer">
    </form>

    <?php
    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $filas = $_POST["filas"];
        $columnas = $_POST["columnas"];

        echo "<h2>Matriz generada:</h2>";
        echo "<table border='1'>";
        $contador = 1;
        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columnas; $j++) {
                $numero = $contador++;
                echo "<td";
                if (esPrimo($numero)) {
                    echo " class='primo'";
                }
                echo ">" . $numero . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</div>

</body>
</html>
