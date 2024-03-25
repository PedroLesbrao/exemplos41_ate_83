
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
                echo "FORMATAÇÃO NO PHP<br><br>";
                $numero = 1234.56;
                //Padrão (notação inglesa)
                $formato1 = number_format($numero);
                echo "<br> $formato1";
                //Notação francessa
                $formato2 = number_format($numero,2,',',' ');
                echo "<br>$formato2";
                $numero = 1234.5678;
                //notação brasileira(valor,numero de decimais,divisor decimal,milhar)
                $formato3 = number_format($numero,2,'.','');
                echo "<br>$formato3";
                
            ?>
        </div>
    </body>
</html>