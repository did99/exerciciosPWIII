<?php
$numeros = [12, 45, 78, 23, 56, 89, 34, 67, 90, 11];

$maior_numero = $numeros[0]; 

$contador = 1;

while ($contador < count($numeros)) {
    if ($numeros[$contador] > $maior_numero) {
        $maior_numero = $numeros[$contador]; 
    }
    $contador++;
}

echo "O maior número é: $maior_numero\n";
?>