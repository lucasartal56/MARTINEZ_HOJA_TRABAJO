<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Damas</title>
    <link rel="stylesheet" href="../1. Tablero/style.css">
</head>
<body>
    <div class="container">
        <h1>TABLERO DE DAMAS CHINAS</h1>
        <table class="tablero">
            <?php
            
            function calcularColor($i, $j) {
                return ($i + $j) % 2 == 0 ? 'celeste' : 'negro';
            }

            
            for ($i = 0; $i < 8; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 8; $j++) {
                    $color = calcularColor($i, $j);
                    echo "<td class='$color'>";
                   
                    if ($color === 'negro' && ($i <= 2)) {
                     
                        $claseFicha = 'ficha';
                        echo "<div class='$claseFicha'></div>";
                    }
                    if ($color === 'negro' && ($i>=3 && $i <=5)) {
                     
                        $claseFicha = 'fichaamarilla';    
                        echo "<div class='$claseFicha'></div>";
                    }

                    if($i === 2 && $j === 3){
                        $claseFicha = 'fichavacia';
                        echo "<div class='$claseFicha'></div>";
    
    
                        }
                        if($i === 7 && $j === 3){
                        $claseFicha = 'ficha';
                        echo "<div class='$claseFicha'></div>";
    
    
                        }
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

