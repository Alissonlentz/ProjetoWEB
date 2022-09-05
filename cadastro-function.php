<?php

require_once('conexao.php');

$nome = $_POST['txt_nome'];
$email = $_POST['txt_email'];
$senha = $_POST['txt_senha'];


$registro=mysqli_query($connect , "INSERT INTO usuarios (nome, senha, email) values ('$nome', '$senha', '$email') " );

if ($registro==true){

    echo " <script>
    alert('Cadastro efetuado com sucesso ');
    window.location.href='./login.php';

    </script>";

}

else {
    echo "<script>
    alert('Falha ao cadastrar ');
    window.location.href='./cadastro.php';

    </script> ";

}

?>