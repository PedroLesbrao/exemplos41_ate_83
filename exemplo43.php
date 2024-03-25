<!-- 
    Função em PHP é um trrecho de código que pode ser chamado
    (invocado) de qualquer parte de código para executar
    uma tarefa qualquer e retornar
 -->
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
                echo "FUNÇÃO no PHP<br><br>";
                echo "Função COM parâmetros e SEM retorno<br><br>";
                //criando uma função
                function somar($val1,$val2){
                        $resultado = $val1 + $val2;
                        echo "A soma é igual a $resultado<br>";
                    }
                    //Invocando a função
                    somar(10,20);
                    $iV1 = 50;
                    $iV2 = 75;
                    somar($iV1,$iV2);
                    somar(52,$iV1);
                    somar($iV2,80);
                    $val1 =100;
                    $val2 =60;
                    somar($val1,$val2);
            ?>
        </div>
    </body>
</html>