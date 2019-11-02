<?php
    session_start();
    include("conexao.php");

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $valor3 = $_POST["valor3"];
    $id_usuario = $_SESSION['id_user'];

    $conexaosql = mysqli_query($conectar, "INSERT INTO formula(tipo_formula, id_usuario, valor1, valor2, valor3, valor4, valor5)
    VALUES ('MRU - fórmula V','$id_usuario','$valor1', '$valor2', '$valor3', '', '')"); 
?>