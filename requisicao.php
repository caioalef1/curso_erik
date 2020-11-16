<?php include_once'conn.php';?>
<html lang="pt">
<body>
<?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $city = $_POST["city"];
    $email = $_POST["email"];
    $conn = mysqli_connect($server,$user,$password,$data_base); 

    mysqli_select_db($conn,'$data_base');
    $sql = "INSERT INTO cadastro(name,AGE,CITY,EMAIL) VALUES ('$name', '$age', '$city', '$email')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Dados gravados!'); window.location = 'index.php';</script>";
    }else{
        echo "Azedou" . sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);

?>
</body>
</html>