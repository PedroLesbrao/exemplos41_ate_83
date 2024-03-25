
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
                echo "Função wordwrap().<br>";

                $sTexto = "Serviço Nacional de Aprendizagem Industrial SENAI -
                            Escola Alvares Romi de Santa Bárbara d'Oeste (SP)";

                            //A função wordwrap() separa a string em partes, comforme parametro digitado. Por
                            //padrão um dos parametros é false e por isso as palavras não são quebradas,mesmo
                            //que tenha o tamanho especificado no parâmetro
                            echo wordwrap($sTexto,20,"<br>");
                            echo "<br><br>";
                            echo wordwrap($sTexto,5,"<br>",true);//Com o true ele vai quebrar as palavras
            ?>
        </div>
    </body>
</html>