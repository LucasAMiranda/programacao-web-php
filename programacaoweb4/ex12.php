<?php
$functions = get_defined_functions();

foreach ($functions['user'] as $function) {
    $reflection = new ReflectionFunction($function);

    echo "Nome da função: " . $reflection->getName() . "\n";
    echo "Número de parâmetros: " . $reflection->getNumberOfParameters() . "\n";
    echo "Tipo de retorno: " . $reflection->hasReturnType() ? $reflection->getReturnType() : "Nenhum" . "\n";
    echo "\n";
}
?>