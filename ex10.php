<?php
// Definir a idade da pessoa em anos, meses e dias diretamente no código
$anos = 25;  // Altere este valor para a idade em anos
$meses = 8;  // Altere este valor para a idade em meses
$dias = 12;  // Altere este valor para a idade em dias

// Definir o número de dias por ano e por mês
$dias_por_ano = 365;
$dias_por_mes = 30;

// Calcular a idade total em dias
$idade_em_dias = ($anos * $dias_por_ano) + ($meses * $dias_por_mes) + $dias;

// Exibir o resultado
echo "Idade da pessoa: $anos anos, $meses meses e $dias dias.\n";
echo "A idade total em dias é: $idade_em_dias dias.\n";
?>