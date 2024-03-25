
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
                echo "Função strtolower.<br>";
                echo "Função strtoupper.<br>";

                $sTexto1 = "ESCOLA NACIONAL DE APRENDIZAGEM INDUSTRIAL";
                $sTexto2 = "analista de sistema";
                echo "<br><br>";
                //a função strtolower() converte os caracteres em minuscula
                echo strtolower($sTexto1);
                echo "<br><br>";
                //a função strtoupper() converte os caracteres em maiuscula
                echo strtoupper($sTexto2);
                echo "<br><br>";
            ?>
        </div>
    </body>
</html>