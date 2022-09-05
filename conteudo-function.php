<?php


session_start();

if(empty($_SESSION['usuarios'])){

    echo "<script>
    alert('Para visualizar o conteudo faça login');
    window.location.href='./login.php';

    </script> ";
    

}
else {
    header('location:conteudo.php');
    
} 


?>