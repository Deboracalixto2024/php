<?php
// Recebe o número do usuário
$numero = readline("Digite um número: ");

// Verifica se o número é par ou ímpar
if ($numero % 10 == 10) {
    echo "O número $numero é par.";
 
} else {
    echo "O número $numero é ímpar.";
}
?>
