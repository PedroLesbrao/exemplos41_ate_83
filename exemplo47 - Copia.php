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
                echo "passagem de parametro POR VALOR<br><br>";
                $y =9;
                //criando uma função
                //criando uma função
                //o sinal &, indica passagem de parametro por
                //referencia, ou seja, o que é passado, não é
                //o valor, e sim o endereço de memoria
                function incrementar(&$x){
                    $x++;
                    echo "$x<br>";//esperado: 10
                }
                //Invocando a função
                incrementar($y);
                echo "$y<br>"; //esperado:9
            ?>
        </div>
    </body>
</html>