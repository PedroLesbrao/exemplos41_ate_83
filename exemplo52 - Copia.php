
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
            <?php
                echo "funções de manipulação de string no php.<br>";
                echo "Função trim().<br>";
                echo "Função rtrim().<br>";
                echo "Função ltrim().<br>";

                $sTexto = "   Curso de Desenvolvimento de Sistemas        ";
                //A função trim(), remove todos os espaços da direita e da esquerda da string
                echo  "sem trim() |";$sTexto."|";
                echo " com trim(): |".trim($sTexto)."|<br>";
                //A função rtrim(), remove os espaços da direita da string
                echo "com rtrim(): |".rtrim($sTexto)."|<br>";
                //A função ltrim(), remove os espaços da esquerda da string
                echo "com ltrim(): |".ltrim($sTexto)."|<br>";
            ?>
        </div>
    </body>
</html>