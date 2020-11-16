<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>Teste Formulário</title>
  </head>
  <body>
    <div class='container'>
    <form action="requisicao.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Seu nome</label>
      <input type="text" class="form-control" name='name' placeholder="Ex: Caio Alef">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Sua idade</label>
      <input type="number" class="form-control" name="age" placeholder="Ex: 26">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" >Cidade que você mora</label>
      <input type="text" class="form-control" name="city" placeholder="Ex: Feira de Santana">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" >Email</label>
      <input type="email" class="form-control" name="email" placeholder="Ex: caioalefonline@gmail.com">
    </div>
    <button type="submit" class="btn btn-secondary" name="enviar">Enviar</button>
  </form>
  </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    
  </body>
</html>

