
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
            echo "matriz";
                //Criação  de uma matriz no php
                $aiNumeros = array(array( 2, 4),
                                array( 5, 8),
                                array( 9, 12));
                
                $aiNumeros[1][0]=100;
                echo "<pre>";
                print_r($aiNumeros);
                echo "</pre>";
            ?>
        </div>
    </body>
</html>