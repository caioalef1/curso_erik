<?php
    $server ="localhost";
    $user ="root";
    $password ="";
    $data_base ="test";

    $conn = mysqli_connect($server,$user,$password,$data_base); 

    if(!$conn){
        die("Conexão falhou:" . mysqli_connect_error());
    }
    ?>
