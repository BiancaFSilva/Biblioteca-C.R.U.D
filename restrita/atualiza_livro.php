<?php
    include '../conecta.php';

    $codlivro = $_GET['codlivro'];

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $pag = $_POST['paginas'];
    $genero = $_POST['select'];

    //echo "$codlivro"; echo "$titulo"; 

    $consulta = $conexao -> prepare("UPDATE livros SET titulo='$titulo', autor='$autor', editora='$editora', paginas='$pag', genero='$genero' WHERE codlivro = '$codlivro'");
    $consulta -> execute();

    header('Location: index.php'); 
?>