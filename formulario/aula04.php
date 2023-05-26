<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <form method="post"> <!--é necessario especificar o metodo aqui post ou get -->
        <input name="nome" placeholder="Nome" id="nome">
        <button type="submit">Enviar</button>
    </form>
    <?php
    $nome = $_POST["nome"];
    echo $nome;
    //$_GET envia pela url
    //$_POST envia de forma oculta
    ?>

     <form method="post" action="resultado.php"> <!-- action está definindo a ação a ser executada que no caso é enviar os valores para resultado.php fazer a soma -->
        <input type="number" name="n1">
        <input type="number" name="n2">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>