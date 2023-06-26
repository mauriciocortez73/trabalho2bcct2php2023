<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
<?php include_once '../menu.php';?>
<div class="center grey">
        <h1> Locação de Filmes</h1>
    </div>
    <table class="striped green lighten-2">
    <tr>
        <th>ID</th>
        <th>NOME ARTISTICO</th>
        <th>NOME REAL</th>
        <th>NASCIMENTO</th>
        <th>FUNÇÃO
            <a class="btn-floating btn-small waves-effect waves-light green" onclick="JavaScript:location.href='insarea.php'">
                <i class="material-icons">add</i>
            </a>
        </th>
    </tr>
    <?php
    if ($lstator != null)
        foreach ($lstator as $ator) {}
    ?>
        <tr>
            <td><?php echo $ator->getId(); ?></td>
            <td><?php echo $ator->getNomeArtistico(); ?></td>
            <td><?php echo $ator->getNomeReal(); ?></td>
            <td><?php echo $ator->getNascimento(); ?></td>
            <td>
                <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='detator.php?id=' + 
                       <?php echo $ator->getId(); ?>">
                    <i class="material-icons">details</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='edtator.php?id=' + 
                       <?php echo $ator->getId(); ?>">
                    <i class="material-icons">edit</i>
                </a>
                <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript:remover(<?php echo $ator->getId(); ?>)">
                    <i class="material-icons">delete_forever</i>
                </a>
            </td>
            </td>
        </tr>
</body>
</html>