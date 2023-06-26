<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Filme</title>
    
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
          <h1>Inserir Filme</h1>
      </div>

      <div class="row">
            <form action="recinsfilme.php" method="POST" id="frminsFilme" class="col s12">
              <div class="input-field col s30">
                  <input id="titulo" type="text" name="txtTitulo">
                  <label for="titulo" class="black-text bold" >Titulo</label>
              </div>
              <div class="input-field col s4">
                  <input id="ano" type="text" name="txtAno">
                  <label for="ano" class="black-text bold" >Ano</label>
              </div>
              <div class="input-field col s5">
                  <input id="valor" type="text" name="txtValor">
                  <label for="valor" class="black-text bold" >Valor R$</label>
              </div>
              <div class="input-field col s12">
                  <input id="categoria" type="text" name="txtCategoria">
                  <label for="categoria" class="black-text bold" >Categoria</label>
              </div>
              <div class="input-field col s20">
                  <input id="ator" type="text" name="txtAtor">
                  <label for="ator" class="black-text bold" >Ator</label>
              </div>
              <div class="brown lighten-3 center col s12">
        <br>
        <button class="waves-effect waves-light btn green" type="submit">
            Gravar <i class="material-icons">save</i>
        </button>
        <button class="waves-effect waves-light btn red" type = "reset">
            Limpar <i class="material-icons">clear_all</i>
        </button>
        <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='listfilme.php'">
            Voltar <i class="material-icons">arrow_back</i>
        </button>
        <br>
        <br>
      </div>
      
      
            </form>
      </div>



    </div>
    <?php include_once '../footer.php';?>
</body>

</html>