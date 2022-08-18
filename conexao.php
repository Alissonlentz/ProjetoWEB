<?php

$dbhost = 'Localhost';
$dbusername = 'root';
$dbpassword = 'Alisson22';
$dbname = 'test';

$connect = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);

if($connect==true){
    echo 'sucesso';
}
else{
    echo 'falha';
}

?>