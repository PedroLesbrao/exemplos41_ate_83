
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
            echo "FUNÇÕES DE ARRAY NO PHP<br>";
            $acLetra = array("A","S","D","F","G","H");
            //var_dump(array) exibe uma estrutura mais completa do array
            var_dump($acLetra);
            //array_push(array,conteudo) insere o conteudo na ultima posição
            array_push($acLetra,"W");
            var_dump($acLetra);
            //array_pop(array)
            array_pop($acLetra);
            var_dump($acLetra);
            //array_unshift(array,conteudo) insere o conteudo na primeira 
            //posição do array e atualiza os indices
            array_unshift($acLetra,"W");
            var_dump($acLetra);
            array_shift($acLetra);
            var_dump($acLetra);
            //unset exclui um elemento do array mas nao atualiza os indeices
            unset($acLetra[1]);
            var_dump($acLetra);
            ?>
        </div>
    </body>
</html>