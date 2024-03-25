
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
                echo "Função chr.<br>";
                echo "Função ord.<br>";
                //A função chr() retorna a função caractere equivalente ao numero passado na tabela ASCII.
                $cLetra = chr(65); //Letra A
                echo "A letra de código 65 é a letra $cLetra<br>";
                echo "<br><br>";

                //A função ord(), retorna o número ASCII de uma letra
                $iNumero = ord("J");
                echo "O valor ASCII de letra J é $iNumero";
                echo "<br><br>";
                $iNumero = ord("|");
                echo "o valor ASCII do | é $iNumero";
                echo "<br><br>";
            ?>
        </div>
    </body>
</html>