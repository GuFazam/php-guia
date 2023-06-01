<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insta Clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    <div class="container-fluid g-0">
        <h1><i class="bi bi-heart"></i> Funciona</h1>

        <!-- usando while -->
        <?php
        $i = 0;
        while($i < 3):
            ?>
        <img src="img/avatar.jpg" width="50"> <h3>toninho starko</h3>
        <img src="img/rio.jpg" class="img-fluid">
        <h2>Rio de Janeiro</h2>
        <?php
            $i++;
        endwhile; //significa o fechamento do while
        ?>
        
        <!-- usando for -->
        <?php
        for($i = 0; $i<5 ; $i++):
            ?>
        <img src="img/avatar.jpg" width="50"> <h3>toninho starko</h3>
        <img src="img/rio.jpg" class="img-fluid">
        <h2>Rio de Janeiro</h2>
        <?php
        endfor; //significa o fechamento do for
        ?>
    </div>

</body>
</html>