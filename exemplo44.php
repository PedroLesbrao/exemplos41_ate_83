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
                echo "Função COM parâmetros e COM retorno<br><br>";
                //criando uma função
                function somar($val1,$val2){
                        $resultado = $val1 + $val2;
                        echo "A soma é igual a $resultado<br>";
                        return $resultado;
                    }
                    //Invocando a função
                    $resultado = somar(28, 63);
                    echo "O resultado da soma é $resultado<br><br>";
                    echo "O resultado da soma é ".somar(22,11)."<br>";
                    echo "O resultado da soma é".
                            somar(somar(10, 22) , somar(15,28))."<br>";
            ?>
        </div>
    </body>
</html>