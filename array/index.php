<?php

    #// Array é uma lista onde pode adicionar e procurar itens adicionados

    //Criando um array com o nome de futas e os valores maçã banana laaranja e morango

    #$frutas = array("maçã", "banana", "laranja", "morango");
    // $frutas = ["maçã", "banana", "laranja", "morango"];

    //imprimindo o array na tela

    #print_r($frutas);

    //Inserindo um novo valor [abcaxi] dentro do array $frutas:

    #$frutas[4] = "abacaxi";
    #echo "<br>";
    #print_r($frutas);

    // É possivel utilizar outra forma:
    //  array_push($frutas, "Abacaxi");

    //Alterando o valor abacaxi[4] por uva
    #$frutas[4] = "uva";
    #echo "<br>";
    #print_r($frutas);

    //removendo array valor maça

    #unset ($frutas[0]);
    #echo "<br>";
    #print_r($frutas);


    // ordenação do array
    #sort($frutas);
    #echo "<br>";
    #print_r($frutas);

    // utilizando o laço de repetição para exibir todos os items da array $frutas
    #echo "<br>";
    #foreach($frutas as $fruta){
    #    echo $fruta . "<br>";
    #}

    $carros = array("gol", "onix"); //essa linha cria o array
    // $carros = ["gol", "onix"]; //outra forma de criar o arry
    print_r($carros); //mostra literalmente a estrutura do array e tudo dentro dela
    echo "<br>";
    echo $carros[0]; //exibe um item do array
    echo "<br>";
    $carros[0] = "palio"; //essa linha altera o primeiro item do array
    print_r($carros);
    echo "<br>";
    $carros[2] = "uno"; //essa linha está inserindo um novo item
    print_r($carros);
    echo "<br>";
    array_push($carros, "fiesta"); //essa também só que é mais segura
    print_r($carros);
    echo "<br>";
    unset($carros[1]); //essa linha está delete um item do array
    print_r($carros);
    echo "<br>";
?>