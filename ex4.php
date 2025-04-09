<?php

$numero_alunos = 5; 
$notas = [7.5, 8.0, 6.5, 9.0, 7.0]; 


$soma_notas = 0;
$contador = 0;


while ($contador < $numero_alunos) {
    $soma_notas += $notas[$contador];
    $contador++;
}

$media = $soma_notas / $numero_alunos;

echo "A média das notas da sala é: " . number_format($media, 2) . "\n";
?>