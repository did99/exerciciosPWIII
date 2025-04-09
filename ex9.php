<?php
// Defina o custo de fábrica diretamente no código
$custo_fabrica = 30000; // Altere esse valor para o custo de fábrica desejado

// Percentual do distribuidor e dos impostos
$porcentagem_distribuidor = 28 / 100; // 28%
$porcentagem_impostos = 45 / 100; // 45%

// Cálculo do custo final
$custo_distribuidor = $custo_fabrica * $porcentagem_distribuidor;
$custo_impostos = $custo_fabrica * $porcentagem_impostos;

// Custo final ao consumidor
$custo_final = $custo_fabrica + $custo_distribuidor + $custo_impostos;

// Exibe o custo final ao consumidor
echo "Custo de fábrica: R$ " . number_format($custo_fabrica, 2, ',', '.') . "\n";
echo "Custo do distribuidor: R$ " . number_format($custo_distribuidor, 2, ',', '.') . "\n";
echo "Custo dos impostos: R$ " . number_format($custo_impostos, 2, ',', '.') . "\n";
echo "Custo final ao consumidor: R$ " . number_format($custo_final, 2, ',', '.') . "\n";
?>