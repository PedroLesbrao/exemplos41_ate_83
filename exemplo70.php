
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
            echo "ARRAY  NO PHP";
            echo "FUNÇÕES DE ARRAY NO PHP<br>";
            $aiNum = array(5,8,9,6,27,45,58,4,3);
            //sort ordena de forma crescente
            sort($aiNum);
            var_dump($aiNum);
            //rsort(array) ordena de forma decrescente
            rsort($aiNum);
            var_dump($aiNum);
            ?>
        </div>
    </body>
</html>