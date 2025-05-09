<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 35;
        $y = 17;
        $m = 28.5;
        $n = 12.8;

        echo "Cálculo de números enteros";
        echo "<br>";
        echo "<br>";
        echo "Los valores asignados fueron X: $x & Y: $y";
        echo "<br>";
        echo "La suma: " .($x + $y);
        echo "<br>";
        echo "La resta: " .($x - $y);
        echo "<br>";
        echo "El producto: " .($x * $y);
        echo "<br>";
        echo "El modulo: " .($x % $y);
        echo "<hr>";
        echo "<br>";

        echo "Cálculo de números double";
        echo "<br>";
        echo "<br>";
        echo "Los valores asignados fueron N: $n & M: $m";
        echo "<br>";
        echo "La suma: " .($n + $m);
        echo "<br>";
        echo "La resta: " .($n - $m);
        echo "<br>";
        echo "El producto: " .($n * $m);
        echo "<br>";
        echo "El modulo: " .($n % $m);
        echo "<hr>";
        echo "<br>";

        echo "Para todas las variables (X, Y, N, M):";
        echo "<br>";
        echo "<br>";
        echo "El doble de cada variable: x: " . ($x * 2) . " y: " . ($y * 2) . " n: " . ($n * 2) . " m: " . ($m * 2);
        echo "<br>";
        echo "Soma total: " . ($x + $y + $n + $m);
        echo "<br>";
        echo "Produto total: " . ($x * $y * $n * $m);
        echo "<hr>";
        echo "<br>";

        echo "Calculadora básica";
        echo "<br>";
        echo "<br>";

        function calculadora($num1, $num2, $operador) {
            switch($operador) {
                case "+":
                    echo "Suma: " . ($num1 + $num2);
                    break;
                case "-":
                    echo "Resto: " . ($num1 - $num2);
                    break;
                case "*":
                    echo "Multiplicação: " . ($num1 * $num2);
                    break;
                case "/":
                    if ($num2 != 0) {
                        echo "Divisão: " . ($num1 / $num2);
                    } else {
                        echo "Erro: Divisão por zero não é permitida.";
                    }
                    break;
                default:
                    echo "Operador inválido. Use +, -, * ou /.";
                    break;
           }
        }
        $resultado = calculadora(10, 5, "+");
        echo "<br>";
        $resultado = calculadora(10, 5, "-");
        echo "<br>";
        $resultado = calculadora(10, 5, "*");
        echo "<br>";
        $resultado = calculadora(10, 5, "/");
        echo "<br>";
        $resultado = calculadora(10, 5, "#");

    ?>
</body>
</html>