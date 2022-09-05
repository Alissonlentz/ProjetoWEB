<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style-form.css">
    <script src="./js/validacad.js"></script>
    <title>Cadastro</title>
</head>

<body>
    <main>
        <form onsubmit="return validacada()" name="formcad" method="POST" action="./cadastro-function.php">
            <h1>Cadastro</h1>
            <legend><strong> Digite seu nome</strong></legend>
            <input type="text" value="Insira seu nome" name="txt_nome">
            <br>
            <legend><strong>Digite sua senha</strong></legend>
            <input type="password" value="Insira seu senha" name="txt_senha">
            <br>
            <legend><strong>Digite seu email</strong></legend>
            <input type="email" value="Insira seu email" name="txt_email">
            <br>
            <br>
            <input type="submit" value="Cadastrar" class="button">
        </form>
    </main>

</body>

</html>