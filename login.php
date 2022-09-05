<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style-login.css">
    <title>Login</title>
</head>

<body>
    <main class="Login-main">
        <h1>Login</h1>
        <form action="./login-function.php" method="POST">
            <strong>
                <legend>Usuário</legend>
            </strong>
            <input type="text" placeholder="Email" name="txt_email">
            <p></p>
            <strong>
                <legend>Senha</legend>
            </strong>
            <input type="password" placeholder="Senha" name="txt_senha">
            <a class="cadastro" href="./cadastro.php">Cadastre-se</a>
            <p>
            </p>
            <input class="buttom" type="submit" placeholder="entrar" value="Entrar">
            <a href="index.php" class="voltar">voltar</a>
        </form>
    </main>

</body>

</html>