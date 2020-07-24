<?php
    include '../conecta.php';

    $codlivro = $_GET['codlivro'];

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $pag = $_POST['paginas'];
    $genero = $_POST['select'];

    //echo "$codlivro"; echo "$titulo"; 
    
    $consulta = $conexao -> prepare("DELETE FROM livros WHERE codlivro = '$codlivro'");
    $consulta -> execute();

    header('Location: index.php');
?>