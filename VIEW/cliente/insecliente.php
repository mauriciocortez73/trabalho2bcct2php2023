<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Cliente</title>
    
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
          <h1>Inserir Cliente</h1>
      </div>

      <div class="row">
            <form action="recinscliente.php" method="POST" id="frminsCliente" class="col s12">
              <div class="input-field col s8">
                  <input id="nome" type="text" name="txtNome">
                  <label for="nome" class="black-text bold" >Nome</label>
              </div>
              <div class="input-field col s8">
                  <input id="celular" type="text" name="txtCelular">
                  <label for="celular" class="black-text bold" >Celular</label>
              </div>
              <div class="input-field col s8">
                  <input id="email" type="text" name="txtEmail">
                  <label for="email" class="black-text bold" >Email</label>
              </div>
              <div class="brown lighten-3 center col s12">
        <br>
        <button class="waves-effect waves-light btn green" type="submit">
            Gravar <i class="material-icons">save</i>
        </button>
        <button class="waves-effect waves-light btn red" type = "reset">
            Limpar <i class="material-icons">clear_all</i>
        </button>
        <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstcliente.php'">
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