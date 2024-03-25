
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
                echo "Função str_word_cout().<br>";
                echo "Função print_r().<br>";

                $sTexto = "A beleza esta nos olhos de quem ve";
                //a função str_word_cout() com parametros 0, conta a quantidade de palavras.
                $palavras = str_word_cout($sTexto,0);
                echo $palavras;
                echo"<br><br>";
                //A função str_word_cout() com parametro 1, cria e coloca cada palavra
                // em cada posição do vetor.
                print_r($palavras);
                echo"<br><br>";
                $palavras = str_word_count($sTexto,1)
                //A função str_word_cout() com parametro 2, cria um vetor e coloca cada letra
                // em cada posição do vetor.
                $palavras = str_word_count($sTexto,2)
                //A função str_word_cout() com parametro 2, cria um vetor e coloca cada letra
                // em cada posição do vetor.
                print_r($palavras);
                echo"<br><br>";
            ?>
        </div>
    </body>
</html>