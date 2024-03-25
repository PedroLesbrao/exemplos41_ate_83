
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
            echo "ARRAY ";
                $aDados = array("nome"=>"Andre","idade"=>45,"peso"=>90,"altura"=>1.90);
                $aDados ["estado civil"]= "casado";
                echo "<pre>";
                print_r($aDados);
                echo "</pre>";
            ?>
        </div>
    </body>
</html>