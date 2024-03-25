
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
                echo "Função implode.<br>";
                echo "Função join.<br>";

                $sTexto[0] = "Curso";
                $sTexto[1] = "Tecnico";
                $sTexto[2] = "em";
                $sTexto[3] = "Desenvolvimento";
                $sTexto[4] = "de";
                $sTexto[5] = "Sistema";
                //A função implode() faz a união das posições de um vetor usando um
                // espaço entre as posições para criar uma string
                $sFrase = implode(" ",$sTexto);
                echo $sFrase;
                echo "<br><br>";
                $sFrase = implode("#",$sTexto);
                echo $sFrase;
                echo "<br><br>";
                // A função join() funciona exatamente igual o implode()
                $sFrase = join("-",$sTexto);
                echo $sFrase;
                echo "<br><br>";
            ?>
        </div>
    </body>
</html>