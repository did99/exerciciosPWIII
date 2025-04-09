<?php
$numeros = [12, 45, 78, 23, 56, 89, 34, 67, 90, 11];

$maior_numero = $numeros[0]; 
$segundo_maior_numero = PHP_INT_MIN; 

$contador = 1; 


while ($contador < count($numeros)) {
    if ($numeros[$contador] > $maior_numero) {

        $segundo_maior_numero = $maior_numero;
        $maior_numero = $numeros[$contador]; 
    } elseif ($numeros[$contador] > $segundo_maior_numero) {

        $segundo_maior_numero = $numeros[$contador];
    }
    $contador++;
}

echo "O maior número é: $maior_numero\n";
echo "O segundo maior número é: $segundo_maior_numero\n";
?>