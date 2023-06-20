<?php
include_once  'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllfilme.php';

$id = $_GET['id'];

$bll = new  \BLL\bllfilme();
$ator = $bll->SelectID($id);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Filme</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="container teal lighten-5 black-text col s12">
        <div class="center orange">
            <h1>Editar Filme</h1>
        </div>

        <div class="row">
            <form action="recedtator.php" method="POST" id="frminsAtor" class="col s12">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $filme->getId(); ?></label>
                    </br> </br>
                    <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s8">
                    <input id="titulo" type="text" name="txtTitulo" value="<?php echo $filme->getTitulo() ?>">
                    <label for="titulo" class="black-text bold">Titulo</label>
                </div>
                <div class="input-field col s8">
                    <input id="ano" type="text" name="txtAno" value="<?php echo $filme->getAno() ?>">
                    <label for="ano" class="black-text bold">Ano</label>
                </div>
                <div class="input-field col s8">
                    <input id="valor" type="date" name="txtValor" value="<?php echo $filme->getValor() ?>">
                    <label for="valor" class="black-text bold">Valor</label>
                </div>
                <div class="input-field col s8">
                    <input id="categoria" type="date" name="txtCategoria" value="<?php echo $filme->getCategoria() ?>">
                    <label for="categoria" class="black-text bold">Categoria</label>
                </div>
                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstfilme.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>


            </form>
        </div>



    </div>

</body>

</html>