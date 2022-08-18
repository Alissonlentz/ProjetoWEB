<?php

require_once('conexao.php');

$email = $_POST['txt_email'];
$senha = $_POST['txt_senha'];


$login=mysqli_query($connect, "SELECT * FROM usuarios WHERE email='$email' and senha='$senha' " );


if(mysqli_num_rows($login)!=0) {

    session_start();
    $_SESSION['usuarios'] = $email;

    header('location:index.html');

}

else {
    echo "<script>
    alert('Usuário ou senha incorretos');
    window.location.href='login.html';

    </script> ";

}
mysqli_close('conexao.php');


