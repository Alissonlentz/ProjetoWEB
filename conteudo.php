<?php


session_start();

if(empty($_SESSION['usuarios'])){

    echo "<script>
    alert('Para visualizar o conteudo faça login');
    window.location.href='Login.html';

    </script> ";
    

}
else {
    header('location:conteudo.html');
    
} 


?>