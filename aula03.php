<?php
echo "<h1>Estutura de Decisão</h1>";
/*
if
if else
if else if else
*/
$idade = 18;
if($idade >= 18) {
    echo "Maior de Idade"; //verdadeiro
}
else if($idade == 17) {
    echo "Volte ano que vem";
}
else {
    echo "Menor de Idade"; //falso
}

echo "<br>";
$usuario = "gustavo";
$senha = "123";

if($usuario == "gustavo" && $senha == "123") {
    echo "pode entrar";
}
else {
    echo "Usuario ou senha inválido";
}
?>