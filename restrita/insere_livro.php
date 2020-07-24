<?php
    include '../conecta.php';

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $pag = $_POST['paginas'];
    $genero = $_POST['select'];

    $consulta = $conexao -> prepare("INSERT INTO livros (titulo, autor, editora, paginas, genero) VALUES ('$titulo','$autor','$editora','$pag','$genero')");
    $consulta -> execute();

    header('Location: index.php');
?>