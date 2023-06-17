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
        <h1> Inserir Filme</h1>
    </div>
    <div class= 'suportedois'>


<div style="margin-top: 30px;" class="container">
<form method="POST" action="">

<h3>Inserir Ator</h3><br>
<label for="id" >ID: <?php echo $filme->setId(); ?></label>
                 </br> </br>
                 <input type="hidden" name="txtID" value=<?php echo $id; ?>>
<br>
<label for="titulo" >Titulo: <?php echo $filme->setTitulo(); ?></label>
                 </br> </br>
                 <input type="hidden" name="txtID" value=<?php echo $titulo; ?>>
<br>
<label for="ano" >Ano: <?php echo $filme->setAno(); ?></label>
                 </br> </br>
                 <input type="hidden" name="txtID" value=<?php echo $ano; ?>>
<br>
<label for="valor" >Valor: <?php echo $filme->setValor(); ?></label>
                 </br> </br>
                 <input type="hidden" name="txtID" value=<?php echo $valor     ; ?>>
<br>
<label for="categoria" >Categoria: <?php echo $filme->setCategoria(); ?></label>
                 </br> </br>
                 <input type="hidden" name="txtID" value=<?php echo $categoria; ?>>
<br>

            


<p><input type="submit" value="Confirmar" name="confirmar"><input type="reset" value="Limpar" name="B2"></p>
</form>
<br>
</div>
</div>
</body>
</html>