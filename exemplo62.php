
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
                echo "ARRAY NO PHP<br>";
                echo "VETORES<br>";
                //declaração d um vetor - 1a forma
                $aiNumeros[0] = 10;
                $aiNumeros[1] = 11;
                $aiNumeros[2] = 12;
                $aiNumeros[3] = 13;
                $aiNumeros[4] = 14;
                //declaração de um vetor - 2a forma
                $aiValores = array(5, 7, 9, 12);
                //a posição 0, fica com o valor 5.... e a posição 3 com 12
                //acrescentar um valor pois no php os arrays são dinamicos
                $aiValores[4] = 21;
                //para criar um vetor sem elementos basta iniciar com array()
                $asNomes = array();
                echo "<pre>";
                //adicionar no vetor sem indicar o indice
                $aiValores[] = 100;
                print_r($aiValores);
                echo "</pre>";
            ?>
        </div>
    </body>
</html>