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
                echo "USO de ARQUIVO EXTREMO PARA FUNÇÕES<br><br>";
                /*Se o camado include falhar, o PHP continua
                a execuçãp dp restamte dp arquivo */
                include "arquivo.php";
                $a =100;
                $b =50;
                //invoca a função somar() do  arquivo extremo.
                $c = somar($a,$b);
                echo "a soma dos valores é $c<br>";
                echo $_mensagem."<br>";
            ?>
        </div>
    </body>
</html>