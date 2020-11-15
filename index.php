<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class='container'>
    <form action="conexao.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Seu nome</label>
      <input type="text" class="form-control" name='name'>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Sua idade</label>
      <input type="text" class="form-control" name="idade">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">CIdade que você mora</label>
      <input type="text" class="form-control" name="cidade">
    </div>
    <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
  </form>
  </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<?php
if(isset($_POST["enviar"])){
echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';
}
?>