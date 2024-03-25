
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
        <form method="POST" action="exemplo74.php">
            <p>DATA INÍCIO <input type="date" name="dtInicio"></p>
            <p>DATA FIM <input type="date" name="dtFinal"></p>
            <p>
                <input type="submit" value="Calcular">
                <input type="submit" value="Limpar">
            </p>
        </form>
            <?php
                echo "CONTA UTILIZADA DATA E HORA<br><br>";
                date_default_timezone_set('America/Sao_Paulo');
                if(!empty($_POST["dtInicio"]) && !empty($_POST["dtFinal"])){
                    $dtInicio = $_POST["dtInicio"];
                    $dtFinal  = $_POST["dtFinal"];

                    $dtInicio = strtotime($dtInicio);
                    $dtFinal  = strtotime($dtFinal);

                    //1 dia = 86400 Segundos
                    $diferenca = ($dtFinal-$dtInicio)/86400,0,',','.';
                    echo "A diferença entre as datas informadas é de $diferenca";
                }
            ?>
        </div>
    </body>
</html>