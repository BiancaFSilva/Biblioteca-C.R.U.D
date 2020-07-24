<?php
    include '../conecta.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $nascimento = $_POST['nascimento'];
    $turma = $_POST['select'];

    $consulta = $conexao -> prepare("INSERT INTO aluno (nome, turma, tel, email, celular, dataNascimento) VALUES ('$nome','$turma','$telefone','$email','$celular','$nascimento')");
    $consulta -> execute();

    header('Location: index.php');
?>