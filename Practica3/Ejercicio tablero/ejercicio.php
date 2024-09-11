<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Tablero de Ajedrez</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .chessboard {
            display: grid;
            gap: 1px;
            margin-top: 20px;
        }
        .chessboard div {
            width: 40px;
            height: 40px;
        }
        .white {
            background-color: #f0f0f0;
        }
        .black {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Generador de Tablero de Ajedrez</h1>
        <form method="post" action="">
            <label for="rows">Número de filas:</label>
            <input type="number" id="rows" name="rows" min="1" required>
            <br><br>
            <label for="cols">Número de columnas:</label>
            <input type="number" id="cols" name="cols" min="1" required>
            <br><br>
            <input type="submit" value="Generar Tablero">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $rows = intval($_POST['rows']);
            $cols = intval($_POST['cols']);
            
            if ($rows > 0 && $cols > 0) {
                echo '<div class="chessboard" style="grid-template-columns: repeat(' . $cols . ', 40px); grid-template-rows: repeat(' . $rows . ', 40px);">';
                
                for ($r = 0; $r < $rows; $r++) {
                    for ($c = 0; $c < $cols; $c++) {
                        $class = ($r + $c) % 2 == 0 ? 'white' : 'black';
                        echo '<div class="' . $class . '"></div>';
                    }
                }
                
                echo '</div>';
            } else {
                echo '<p>Por favor, ingrese valores positivos.</p>';
            } 
        }
        ?>
    </div>
</body>
</html>

