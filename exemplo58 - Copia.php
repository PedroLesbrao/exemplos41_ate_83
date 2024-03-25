
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
                echo "Função ucfirst.<br>";
                echo "Função ucwords.<br>";
                echo "Função strrev.<br>";
                echo "Função strpos.<br>";
                echo "Função stripos.<br>";
                echo "Função strpos.<br>";
                echo "Função substr.<br>";
                echo "Função substr_count.<br>";
                echo "Função strreplace().<br>";

                $sTexto  = "bom dia flor do dia! como vai sua tia neste dia";
                echo "<br><br>";
                //ucfirst() coloca a primeira letra da String em Maiuscula.
                echo ucfirst($sTexto);
                echo "<br><br>";
                //ucwords() coloca a primeira letra de cada palavra em maiuscula.
                echo ucwords($sTexto);
                echo "<br><br>";
                //strrev() inverte a string
                echo strrev($sTexto);
                echo "<br><br>";
                //strpos() retorna o valor inicial da posição aonde a string passada;
                //como parametro foi encontrada.
                echo strpos($sTexto,"dia");
                echo "<br><br>";
                //stripos() tem a mesma função do strpos() porém ignora se a palavra
                //esta em maiuscula ou minuscula
                echo stripos($sTexto);
                echo "<br><br>";
                //subtr() retorna um pedaço da string. Se parâmetro for negativo
                //a busca é feita do fim para o começo.
                echo substr("avcdef",1,3)."<br>"; //retornara bcd
                echo substr("avcdef",2)."<br>"; //retornara cdef
                echo substr("avcdef",-1)."<br>"; //retornara f
                echo substr("avcdef",-3,1)."<br>"; //retornara d
                echo "<br><br>";
                //substr_count, retorna quantas vezes a string passada como
                //parametro aparece no texto
                echo substr_count($sTexto,"dia");
                echo "<br><br>";
                //strreplace() substitui um caractere ou pedaço de string, por outro.
                // 1° parametro: é o que buscar
                // 2° parametro: pelo que trocar
                // 3° parametro: string de busca
                echo str_replace("dia","noite",$sTexto);
                echo "<br><br>";
                //str_ireplace() que ignora maiusculas e minusculas
            ?>
        </div>
    </body>
</html>