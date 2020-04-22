<?php
    $id = $_POST['txtId'];
    $nome = $_POST['txtNome'];
    $endereco = $_POST['txtEndereco'];
    
    var_dump($id);
    var_dump($nome);
    var_dump($endereco);

     $con = mysqli_connect("localhost","bob","bob","univille");
     $sql = "insert into cliente (nome, endereco) values (?, ?);";
     $stmt = mysqli_prepare($con, $insert);
     mysqli_stmt_bind_param($stmt, "ss", $nome, $endereco);
     mysqli_stmt_execute($stmt);

     header('Location: '. 'clientes.php');

?>