<?php include_once'conn.php';?>
<html lang="pt">
<body>
<?php
    $name = $_POST["name"]; //cria uma variavel temp e salva a informação do campo nome de acordo com o input
    $age = $_POST["age"]; //cria uma variavel temp e salva a informação do campo age de acordo com o input
    $city = $_POST["city"]; //cria uma variavel temp e salva a informação do campo city de acordo com o input
    $email = $_POST["email"]; //cria uma variavel temp e salva a informação do campo email de acordo com o input
    $conn = mysqli_connect($server,$user,$password,$data_base);  //solicita a conexão com o banco de acordo com os dados inseridos no arquivo conn

    mysqli_select_db($conn,'$data_base'); // seleciona o banco
    $sql = "INSERT INTO cadastro(name,AGE,CITY,EMAIL) VALUES ('$name', '$age', '$city', '$email')"; // insere os valores nos campos informados de acordo com os dados recebidos no formulário

    if(mysqli_query($conn,$sql)){ //valida se existe conexão com o banco
        echo "<script>alert('Dados gravados!'); window.location = 'index.php';</script>"; // envia alerta de sucesso e retorna pra página principal
    }else{
        echo "Azedou" . sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn); //fecha conexão com o banco

?>
</body>
</html>