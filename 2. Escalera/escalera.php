<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones en Escalera</title>
    <link rel="stylesheet" href="../2. Escalera/style.css">
    <style>
       
    </style>
</head>
<body>
    <h1 class="titulo">Escalera</h1>
    <div class="contenedor-escalera">
        <form method="post" action="">
            <label for="pisos">Ingrese el número de pisos (entre 5 y 8): </label>
            <input type="number" id="pisos" name="pisos" min="5" max="8" required>
            <label for="operacion">Seleccione la operación:</label>
            <select name="operacion" id="operacion">
                <option value="sumar">Sumar</option>
                <option value="multiplicar">Multiplicar</option>
            </select>
            <input type="submit" value="Dibujar Escalera">
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pisos = $_POST["pisos"];
            $operacion = $_POST["operacion"];
            if ($pisos >= 5 && $pisos <= 8) {
                echo "<div class='contenedor-escalera'>";
                echo "<table class='escalera'>";
              
                $valores = [];
                $contador = 1;
                for ($fila = 1; $fila <= $pisos; $fila++) {
                    echo "<tr>";
                    for ($columna = 1; $columna <= $fila; $columna++) {
                        $valores[$fila][$columna] = $contador;
                        echo "<td class='piso'>$contador</td>";
                        $contador++;
                    }
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
                
                
                echo "<p>El resultado de la operación es: ";
                if ($operacion == "sumar") {
                    $resultado = array_sum(array_map("array_sum", $valores));
                    echo $resultado;
                } elseif ($operacion == "multiplicar") {
                    $resultado = array_product(array_map("array_product", $valores));
                    echo $resultado;
                }
                echo "</p>";
            } else {
                echo "Por favor ingrese un número valido";
            }
        }
        ?>
    </div>
</body>
</html>
