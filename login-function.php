<?php

require_once('conexao.php');

$email = $_POST['txt_email'];
$senha = $_POST['txt_senha'];
$nome = $POST['txt_nome'];


$login=mysqli_query($connect, "SELECT * FROM usuarios WHERE email='$email' and senha='$senha' " );

$resultado=mysqli_fetch_assoc($login);

if(mysqli_num_rows($login)!=0) {

    session_start();
    $_SESSION['usuarios']=$resultado['nome'];

    header('location:index.php');
}

else {
    echo "<script>
    alert('Usuário ou senha incorretos');
    window.location.href='./login.php';

    </script> ";

}

mysqli_close('conexao.php');


