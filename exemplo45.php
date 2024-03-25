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
                echo "Função COM parâmetros Dinamicos<br><br>";
                //criando uma função
                function somar(){
                      //a função func_get_args() retorna um vetor
                      //com os parâmetros passados para a função;
                      $parametros = func_get_args();
                      //a função func_num_args() retorna a quantidade
                      //de parametros que foram passados para a fução
                      $iTotalParametros = func_num_args();
                      $resultado = 0;
                      for($i=0; $i<$iTotalParametros; $i++){
                          $resultado+=$parametros[$i];
                      }
                      return $resultado;
                    }
                    //Invocando a função
                    echo "A soma é igual a ".somar(3,25,89,74,10,6)."<br>";
                    echo "A soma é igual a ".somar(3,2)."<br>";
                    echo "A soma é igual a ".somar(33,2,6,9,10,6,7,8,9,10,11,12,13)."<br>";
                    echo "A soma é igual a ".somar(22,58,47)."<br>";
            ?>
        </div>
    </body>
</html>