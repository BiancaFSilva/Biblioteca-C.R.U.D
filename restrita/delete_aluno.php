<?php
    include '../conecta.php';

    $ra = $_GET['ra'];

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $nascimento = $_POST['nascimento'];
    $turma = $_POST['select'];

    //echo "$ra <br>"; echo "$nome <br>"; echo "$email <br>"; echo "$telefone <br>"; echo "$celular <br>"; echo "$nascimento <br>"; echo "$turma <br>";

    $consulta = $conexao -> prepare("DELETE FROM aluno WHERE ra = '$ra'");
    $consulta -> execute();

    header('Location: index.php');
?>