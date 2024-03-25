
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
                echo "Função strlen().<br>";

                $sTexto = "Curso de Desenvolvimento de Sistemas";
                //A função Strlen(),conta quantos caractres tem a String incluindo os espaços
                $itamanho = strlen($sTexto);
                echo "a string $sTexto tem $itamanho caracteres";
            ?>
        </div>
    </body>
</html>