<?php
    include 'dbconnect.php';
    $id = $_POST['txtId'];
    $nome = $_POST['txtNome'];
    $idade = $_POST['txtIdade'];
    
    /*var_dump($id);
    var_dump($nome);
    var_dump($endereco);*/


     if($id == "0"){
         $sql = "insert into pessoas (nome, idade) values (?,?);";
         $stmt = mysqli_prepare($con, $sql);
         mysqli_stmt_bind_param($stmt, "ss", $nome, $idade);
         mysqli_stmt_execute($stmt);
     } else {
         $update = "update pessoas set nome=?, idade=? where codigo=?";
         $stmt = mysqli_prepare($con, $update);
         mysqli_stmt_bind_param($stmt, "sss", $nome, $idade, $id);
         mysqli_stmt_execute($stmt);
     }

     header('Location: '. 'index.php');

?>