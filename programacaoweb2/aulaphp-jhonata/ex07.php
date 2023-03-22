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
        // Abre o arquivo para escrita
        $arq = fopen("numeros.txt", "w");

        $count = 0;
        $num = 2;

        // Escreve os 20 primeiros números primos no arquivo
        while ($count < 20) {
            $primo = true;

            // Verifica se o número atual é primo
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) { // % é o operador de resto da divisão
                    $primo = false;
                    break;
                }
            }

            // Se o número atual é primo, escreve no arquivo e incrementa o contador
            if ($primo) {
                fwrite($arq, $num . "\n");
                $count++; // crio essa variável count para poder contar os número que são no arquivo
            }

            $num++;
        }

        // Fecha o arquivo
        fclose($arq);
        ?>

</body>
</html>

