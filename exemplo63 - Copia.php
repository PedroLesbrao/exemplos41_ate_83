
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
                //Criar um vetor chamado $aiVetor e coloca valores conforme
                //um limite pre estabelecido pela função renge();
                //range
                $aivetor = range(5,20,5);
                //inicia com 1 ate 30 de 2 em 2
                $aivetor2 =range(1,30,2);
                echo "<pre>";
                print_r($aivetor);
                print_r($aivetor2);
                echo "</pre>";
            ?>
        </div>
    </body>
</html>