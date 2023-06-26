<?php
include_once 'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllFilme.php';
$id = $_GET['id'];

$bll = new  \BLL\bllFilme();
$filme = $bll->SelectID($id);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Filme</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div class="container teal lighten-5 black-text col s12">
        <div class="center orange">
            <h1>Detalhes do Filme</h1>
        </div>

        <div class="row">
            <div class="input-field col s8">
                <label for="id" class="black-text bold">
                    <h5>ID: <?php echo $filme->getId(); ?></h5>
                </label>
                <br>
                <input type="hidden" name="txtID" value=<?php echo $id; ?>>
            </div>
            <div class="input-field col s8">
                <label for="titulo" class="black-text bold">
                    <h5>Titulo: <?php echo $filme->getTitulo(); ?></h5>
                </label>
                </br><br>
            </div>
	        <div class="input-field col s8">
                <label for="ano" class="black-text bold">
                    <h5>Ano: <?php echo $filme->getAno(); ?></h5>
                </label>
                </br> </br><br>
            </div>
            <div class="input-field col s8">
                <label for="valor" class="black-text bold">
                    <h5>Valor: <?php echo $filme->getValor(); ?></h5>
                </label>
                </br><br>
            </div>
            <div class="input-field col s8">
                <label for="categoria" class="black-text bold">
                    <h5>Categoria: <?php echo $filme->getCategoria(); ?></h5>
                </label>
                </br><br>
            </div>
            <div class="input-field col s8">
                <label for="ator" class="black-text bold">
                    <h5>Ator: <?php echo $filme->getAtor(); ?></h5>
                </label>
                </br><br>
            </div>
        </div>
        <div class="brown lighten-3 center col s12">
            <br>
            <button class="waves-effect waves-light btn orange" type="button" onclick="JavaScript:location.href='edtfilme.php?id=' +
                                     <?php echo $filme->getId(); ?>">
                Editar <i class="material-icons">edit</i>
            </button>
            <button class="waves-effect waves-light btn red" type="button" onclick="JavaScript: remover(<?php echo $filme->getId(); ?>);">
                Remover <i class="material-icons">delete_forever</i>
            </button>
            <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='listfilme.php'">
                Listar <i class="material-icons">list</i>
            </button>
            <br>
            <br>
        </div>
    </div>

</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir o Filme ' + id + '?')) {
            location.href = 'remfilme.php?id=' + id;
        }
    }
</script>
