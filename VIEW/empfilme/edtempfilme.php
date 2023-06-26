<?php
include_once  'C:\xampp\htdocs\trabalho2bcct2php2023\BLL\bllEmpfilme.php';

$id = $_GET['id'];

$bll = new  \BLL\bllEmpfilme();
$empfilme = $bll->SelectID($id);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Locação</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container teal lighten-5 black-text col s12">
        <div class="center orange">
            <h1>Editar Locação</h1>
        </div>

        <div class="row">
            <form action="recedtempfilme.php" method="POST" id="frminsEmpfilme" class="col s12">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $empfilme->getId(); ?></label>
                    </br> </br>
                    <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s8">
                    <input id="filme" type="text" name="txtFilme" value="<?php echo $empfilme->getFilme() ?>">
                    <label for="filme" class="black-text bold">Filme</label>
                </div>
                <div class="input-field col s8">
                    <input id="retirada" type="date" name="txtRetirada" value="<?php echo $empfilme->getRetirada() ?>">
                    <label for="retirada" class="black-text bold">Retirada</label>
                </div>
                <div class="input-field col s8">
                    <input id="devolucao" type="date" name="txtDevolucao" value="<?php echo $empfilme->getDevolucao() ?>">
                    <label for="devolucao" class="black-text bold">Devolucao</label>
                </div>
                <div class="input-field col s8">
                    <input id="valor" type="text" name="txtValor" value="<?php echo $empfilme->getValor() ?>">
                    <label for="valor" class="black-text bold">Valor R$</label>
                </div>
                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstempfilme.php'">
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