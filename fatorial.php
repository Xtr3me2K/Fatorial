<?php
function calcularFatorial($n)
{
    $fatorial = 1;

    for ($i = $n; $i > 1; $i--) {
        $fatorial *= $i;
    }

    return $fatorial;
}

$tamanhoTabuleiro = 8; // Número de casas de um tabuleiro de xadrez (8x8)

if ($tamanhoTabuleiro % 2 != 0) {
    echo "O tamanho do tabuleiro deve ser um número par.";
} else {
    $numeroMaximo = $tamanhoTabuleiro * $tamanhoTabuleiro;
    echo "Número máximo permitido: $numeroMaximo<br>";

    $resultadoFatorial = calcularFatorial($numeroMaximo);
    echo "O fatorial de $numeroMaximo é: $resultadoFatorial";
}
?>