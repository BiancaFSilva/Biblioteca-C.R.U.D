<?php 
    session_start();
    require('conecta.php'); 

    $email = !empty($_REQUEST['email']) ? $_REQUEST['email'] : '';
    $senha = md5(!empty($_REQUEST['senha']) ? $_REQUEST['senha'] : '');

    if ($email && $senha) {

        $consulta = "SELECT * FROM usuarios WHERE email = '$email' ANS senha = '$senha'";
        $resultado = $conexao -> query($consulta);
        $registros = $resultado -> num_rows;
        $resultado_usuario = mysqli_fetch_assoc($resultado);

        if ($registros <> 0) {

            $_SESSION['id'] = $resultado_usuario['id'];
            $_SESSION['nome'] = $resultado_usuario['nome'];
            $_SESSION['email'] = $resultado_usuario['email'];

            header('Location: index.php');
        } else {
            header('Location: ../index.html');
        }
    } else {
        header('Location: ../index.html');
    }
?>