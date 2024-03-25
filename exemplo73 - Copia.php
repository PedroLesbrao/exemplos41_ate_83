
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
                echo "DATA e HORA no PHP<br><br>";
                date_default_timezone_set('America/Sao_Paulo');
                //data e hota
                $tempo = time();
                echo $tempo;
                echo "<br><br>";
                //Criar um data/hora   - h,m,s mes,dia,ano
                $data = mktime(13,0,0,5,10,2021);
                echo $data;
                echo "<br><br>";
                //Criar uma data/hora através de uma string
                $data2 = strtotime("26 may 2021 10:11am");
                echo "<br><br>";
                //validação da data
                $dia = 10;
                $mes = 11;
                $ano = 2020;
                if(checkdate($mes,$dia,$ano)){
                    echo "Data valida!!!";
                }else{
                    echo "Data invalida!!!";
                }
                echo "<br><br>";
                echo "Data atual".date('Y/M/d H:i:s');

                /*
                d - dia com 2 digítos com zero a esquerda
                D - Representação textual do dia da Semana
                j - dia do mês sem zeros a esquerda
                l - Representação textual completa do dia da semana

                m - mês com 2 digitos com zero a esquerda
                M - representação textual curta do mês
                t - Números de dias de um mes (28-31)
                
                Y - ano com 4 digítos
                y - ano com 2 digítos
                L - Verifica se o ano é bissexto
                F - mes completo 
                
                H - Formato 24h
                h - Formato 12h
                i = munutos com zero a esquerda
                s - Segundos com zero a esquerda
                
                */
                echo "<br><br>";
                echo date("l")."<br>";
                echo date("l")."<br>";
                echo date("l j  F Y h:i:s A")."<br>";
                echo date("d.m.y")."<br>";
                echo date("dmy")."<br>";
                echo date("H:m:s")."<br>";

                echo "<pre>";
                /*
                [wday] => Representação numérico do dia da semana [0-dom - 6-sab]
                [yday] => Representação numérica do dia do ano (365)
                [0]    => a data em segundos desdo o dia da criação do UNIX.
                */
                    print_r(getdate());
                echo "</pre>";
                $aData = getdate();
                echo "$aData[year]"."<br>";
                echo "$aData[6]"."<br>";
            ?>
        </div>
    </body>
</html>