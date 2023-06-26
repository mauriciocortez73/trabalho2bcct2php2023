<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Ator</title>
    
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
          <h1>Inserir Ator</h1>
      </div>

      <div class="row">
            <form action="recinsator.php" method="POST" id="frminsAtor" class="col s12">
              <div class="input-field col s8">
                  <input id="nomeArtistico" type="text" name="txtNomeArtistico">
                  <label for="nomeArtistico" class="black-text bold" >Nome Artistico</label>
              </div>
              <div class="input-field col s8">
                  <input id="nomeReal" type="text" name="txtNomeReal">
                  <label for="nomeReal" class="black-text bold" >Nome Real</label>
              </div>
              <div class="input-field col s8">
                  <input id="nascimento" type="date" name="txtNascimento">
                  <label for="nascimento" class="black-text bold" >Nascimento</label>
              </div>
              <div class="brown lighten-3 center col s12">
        <br>
        <button class="waves-effect waves-light btn green" type="submit">
            Gravar <i class="material-icons">save</i>
        </button>
        <button class="waves-effect waves-light btn red" type = "reset">
            Limpar <i class="material-icons">clear_all</i>
        </button>
        <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstator.php'">
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