<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Locação</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php include_once '../menu.php';?>
    <div class="container teal lighten-5 black-text col s12">
      <div class="center red darken-2">
          <h1>Registrar Locação</h1>
      </div>

      <div class="row">
            <form action="recinsempfilme.php" method="POST" id="frminsEmpfilme" class="col s12">
              <div class="input-field col s8">
                  <input id="filme" type="text" name="txtFilme">
                  <label for="filme" class="black-text bold" >Filme</label>
              </div>
              <div class="input-field col s8">
                  <input id="retirada" type="date" name="txtRetirada">
                  <label for="retirada" class="black-text bold" >Retirada</label>
              </div>
              <div class="input-field col s8">
                  <input id="devolucao" type="date" name="txtDevolucao">
                  <label for="devolucao" class="black-text bold" >Devolucao</label>
              </div>
              <div class="input-field col s8">
                  <input id="valor" type="text" name="txtValor">
                  <label for="valor" class="black-text bold" >Valor R$</label>
              </div>
              <div class="red darken-2 center col s12">
        <br>
        <button class="waves-effect waves-light btn green" type="submit">
            Gravar <i class="material-icons">save</i>
        </button>
        <button class="waves-effect waves-light btn red" type = "reset">
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
    <?php include_once '../footer.php';?>
</body>

</html>