<?php
// Criar uma array com valores diretamente
$nomes = ["João", "Maria", "Pedro"];

// Criar uma array usando a função array()
$idades = array("João" => 30, "Maria" => 25, "Pedro" => 35); //nesse caso => está associando o nome com a idade

echo $nomes[0] . "<br>";  // Saída: João
echo $idades["Maria"] . "<br>";  // Saída: 25

$nomes[3] = "Ana";  // Adicionando um novo elemento com índice 3
$idades["Ana"] = 28;  // Adicionando um novo elemento com índice "Ana"

print_r($nomes);

foreach ($idades as $nome => $idade) {
    echo $nome . ": " . $idade . "<br>";  // Exibindo cada item da array com seu índice
}
?>