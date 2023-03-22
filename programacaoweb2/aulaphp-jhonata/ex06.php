<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php
        // Definindo as matrizes
        $a = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
        );

        $b = array(
            array(9, 8, 7),
            array(6, 5, 4),
            array(3, 2, 1)
        );

        // Obtendo as dimensões da matriz
        $n = count($a);
        $m = count($b[0]);
        $p = count($b);

        // Verificando se as matrizes possuem dimensões compatíveis para a multiplicação
        if ($m != $p) {
            echo "Não é possível multiplicar as matrizes, pois as dimensões são incompatíveis.";
            exit;
        }

        // Inicializando a matriz resultante
        $c = array();
        //PARA(i=0; i < n; i=i+1)
        for ($i = 0; $i < $n; $i++) {
            //A variável C vai ser responsável por guardar as posições(índices da matriz)
            $c[$i] = array();
            // Faz um loop verificando se o número de colunas J é menor que é o número das posições das colunas
            for ($j = 0; $j < $m; $j++) {
                $c[$i][$j] = 0;
            }
        }

        // Multiplicando as matrizes
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                for ($k = 0; $k < $p; $k++) {
                    $c[$i][$j] += $a[$i][$k] * $b[$k][$j];
                }
            }
        }

        // Imprimindo a matriz resultante
        echo "Matriz resultante: <br>";
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                echo $c[$i][$j] . " ";
            }
            echo "<br>";
        }
        ?>
</body>
</html>
