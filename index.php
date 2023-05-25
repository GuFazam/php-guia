<?php
// Sintaxe e Variáveis
# comentário
/*comenrário
 de várias linhas*/

 echo "Olá";
 echo "<h1>PHP - Estudando</h1>";
 print("<h3>Aula 02</h3>");
 print_r("Vamos estudar!!!"); // serve para debugar, mostrar a linha de código comumente usado paar identificar erros

 //pode se utilizar '' ou ""
 echo '<h3>Mensagem</h3>'; //todos os comandos terminam com ;
 echo 9.99; //usa-se ponto ao invés de virgula para numeros quebrados

 echo "<br>";

 // não é necessario especificar o tipo da varável
 $nome = "Gustavo"; //texto = string
 $idade = 18; //numérico inteiro = integer(int)
 $altura = 1.66; //numérico decimal(quebrado) = double
 $fumante = false; // booleano = boolean
 
 //gettype mostra o tipo da variável
 echo gettype($nome) . "<br>"; 
 echo gettype($idade) . "<br>";
 echo gettype($altura) . "<br>";
 echo gettype($fumante) . "<br>";

 echo $nome;
 echo "<br>";
 echo $nome . $idade; //ponto concatena
 echo "<br>";
 echo $nome . " - " . $idade . "<br>";
 echo "$nome - $idade<br>";
 echo "Nome: $nome <br>"; // usando "" não se precisa concatenar
 echo 'Nome: $nome <br>'; // usando '' precisa concatenar

 echo "<h1>Operações</h1>";
 $n1 = 10;
 $n2 = 2;
 echo $n1 + $n2;
 echo "<br>";
 echo "n1 + n2 = " . $n1 + $n2 . "<br>"; //mas em alguns casos mesmo usando "" será necessario concatenar
 echo $n1 - $n2 . "<br>";
 echo $n1 * $n2 . "<br>";
 echo $n1 / $n2 . "<br>";
 echo $n1 % $n2 . "<br>"; //módulo(resto da divisão)
 echo $n1 ** $n2 . "<br>"; //potencia
?>