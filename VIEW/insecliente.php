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
    <div class="center grey">
        <h1> Inserir Cliente</h1>
    </div>
    <div class= 'suportedois'>


<div style="margin-top: 30px;" class="container">
<form method="POST" action="">

<h3>Inserir Ator</h3><br>
<label for="id" >ID: <?php echo $cliente->setId(); ?></label>
                 </br> </br>
                 <input type="hidden" name="txtID" value=<?php echo $id; ?>>
<br>
<label for="nome" >Nome: <?php echo $cliente->setNome(); ?></label>
                 </br> </br>
                 <input type="hidden" name="txtID" value=<?php echo $nome; ?>>
<br>
<label for="celular" >Celular: <?php echo $cliente->setCelular(); ?></label>
                 </br> </br>
                 <input type="hidden" name="txtID" value=<?php echo $celular; ?>>
<br>
<label for="email" >Email: <?php echo $cliente->setEmail(); ?></label>
                 </br> </br>
                 <input type="hidden" name="txtID" value=<?php echo $email; ?>>
<br>
<label for="id" >ID: <?php echo $ator->setId(); ?></label>
                    </br> </br>
                    <input type="hidden" name="txtID" value=<?php echo $id; ?>>
<br>

            


<p><input type="submit" value="Confirmar" name="confirmar"><input type="reset" value="Limpar" name="B2"></p>
</form>
<br>
</div>
</div>
</body>
</html>