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
                echo "Função SEM parâmetros e SEM retorno<br><br>";
                //criando uma função
                function bomDia(){
                    echo "BOM DIA!!!!!!!<br><br>";
                }
                //Invocando a função
                bomDia();
            ?>
        </div>
    </body>
</html>