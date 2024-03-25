
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
                echo "Função explode.<br>";
                echo "Função str_spirt.<br>";

                $sTexto = "A beleza esta nos olhos de quem ve";
                //A função explode() quebra a string em palavras, conforme
                //o separador indicado
                $vetor = explode(" ",$sTexto);
                print_r($vetor);
                echo "<br><br>";
                //A função str_split() quebra em letras e as coloca em um vetor
                $vetor = str_split($sTexto);
                print_r($vetor);
                echo "<br><br>";
            ?>
        </div>
    </body>
</html>