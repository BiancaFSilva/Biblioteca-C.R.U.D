<?php 
    include '../conecta.php';

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $senha = md5($_REQUEST['senha']);

    $consulta = "INSERT INTO aluno (nome, email, senha) VALUES ('$nome','$email','$senha')";
    $conexao -> query($consulta);

    header('Location: index.php');
?>