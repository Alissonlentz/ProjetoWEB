<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style-index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="./js/logout.js"></script>

    <title>Index</title>
</head>

<body>
    <header class="main-header">
        <nav>
            <ul class="menu">
                <a href="#main-all">
                    <li>Inicio</li>
                </a>
                <a href="#LinH2">
                    <li>Linguagens</li>
                </a>
                <a href="./conteudo-function.php">
                    <li>Conteudo</li>
                </a>
                <a href="./Login.php" class="login">
                    <li>Entrar</li>
                </a>
                <a href="#" class="usu"><li>
                    <?php  session_start();
                    
                    if(empty($_SESSION['usuarios'])){
                        echo " ";
                    }

                    else {
                        echo "Bem-vindo ! ". $_SESSION['usuarios']. ".";   
                    }
                                            
                    
                    ?>
                </li></a>
            </ul>
        </nav>
    </header>
    <main id="main-all">
        <section class="aside">
            <img class="img-aside" src="./img/Logo-header.png" alt="logo">

        </section>
        <section class="intro">
            <h1>DESENVOLVIMENTO WEB</h1>

            <p>"Nosso foco está voltado para os conceitos básicos relacionados ao funcionamento das aplicações web. Site
                criado apenas por estudantes do curso de Análise e Desenvolvimento de Sistemas da univerdade Uniasselvi.
                Aqui iremos disponibilizar e compartilhar do nosso conhecimento e caminhos que percorremos para
                desenvolver aplicações e sites web."</p>

            <h2 id="LinH2">LINGUAGENS</h2>
           

                <section class="ling">


                <img src="./img/html.png" alt="html-logo">
                <p>"HTML (Linguagem de Marcação de HiperTexto) é o bloco de construção mais básico da web. Define o
                    significado e a estrutura do conteúdo da web. Outras tecnologias além do HTML geralmente são usadas
                    para descrever a aparência/apresentação (CSS) ou a funcionalidade/comportamento (JavaScript) de uma
                    página da web."</p>


            </section>
            <section class="ling2">
                <p>"Cascading Style Sheets (CSS) é um mecanismo para adicionar estilo (cores, fontes, espaçamento, etc.)
                    a um documento web.
                    O código CSS pode ser aplicado diretamente nas tags ou ficar contido dentro das tags "style". Tambem
                    é possível, em vez de colocar a formatação dentro do documento, criar um link para um arquivo CSS
                    que contém os estilos. Assim, quando se quiser alterar a aparência dos documentos vinculados a este
                    arquivo CSS, basta modificar." </p>

                <img src="./img/css-logo.png" alt="css-logo">

            </section>
            <section class="ling3">
                <img src="./img/javascript-logo.png" alt="javacript-logo">
                <p>"JavaScript (frequentemente abreviado como JS) é uma linguagem de programação interpretada
                    estruturada, de script em alto nível com tipagem dinâmica fraca e multiparadigma (protótipos,
                    orientado a objeto, imperativo e, funcional). Juntamente com HTML e CSS, o JavaScript é uma das três
                    principais tecnologias da World Wide Web. JavaScript permite páginas da Web interativas e, portanto,
                    é uma parte essencial dos aplicativos da web. A grande maioria dos sites usa, e todos os principais
                    navegadores têm um mecanismo JavaScript dedicado para executá-lo."</p>


            </section>
        </section>
    </main>
</body>

</html>