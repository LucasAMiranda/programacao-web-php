<?php
// Abre o arquivo para leitura
$arq = fopen("numeros.txt", "r");

// Inicializa o array para armazenar os números
$numeros = array();

// Lê os números do arquivo e adiciona no array
//Esta função trim retorna uma string com os espaçoes retirados do ínicio e do final de str . 
//Sem o segundo parâmetro, trim() irá retirar estes caracteres.
while (($linha = fgets($arq)) !== false) {
    $num = intval(trim($linha));
    array_push($numeros, $num);
}

// Fecha o arquivo
fclose($arq);

// Calcula a soma dos números do array
$soma = 0;
foreach ($numeros as $num) {
    $soma += $num;
}

// Exibe a soma na tela
echo "Soma dos números: " . $soma;
?>