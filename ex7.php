<?php
// Defina o tamanho do quadrado aqui (entre 1 e 20)
$tamanho = 5; // Altere esse valor para qualquer número entre 1 e 20

// Verifica se o tamanho está entre 1 e 20
if ($tamanho >= 1 && $tamanho <= 20) {
    // Laços para imprimir o quadrado
    for ($i = 0; $i < $tamanho; $i++) {
        for ($j = 0; $j < $tamanho; $j++) {
            echo "*"; // Imprime um asterisco
        }
        echo "\n"; // Nova linha após cada linha do quadrado
    }
} else {
    echo "O tamanho deve ser entre 1 e 20.\n";
}
?>