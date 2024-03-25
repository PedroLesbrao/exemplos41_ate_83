
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
        <form action="exemplo71.php" method="get">
        <label>Digite o seu nome: </label>
        <input type="text" name="nome"/><br>
        <label>Digite a sua idade: </label>
        <input type="number" name="idade"/><br>
        <label>Digite a sua profissão </label>
        <input type="text" name="profissao"/><br>
        <input type="submit" value="Exibir"/>
        <input type="reset" value="Limpar"/>
        </form>
            <?php
                if(!empty($_GET["idade"]) &&
                   !empty($_GET["nome"]) &&
                   !empty($_GET["profissao"])){
                       /*$_REQUEST é uma variavel super global do PHP que é usada para
                       coletar dados apos o envio de um formulario html*/
                    $nome           =$_REQUEST['nome'];
                    $idade          =$_REQUEST['idade'];
                    $profissao      =$_REQUEST['profissao'];
                    echo "<p>Sr(a). $nome, tem $idade anos e trabalha com
                    $profissao</p>";
                    
                }
            ?>
        </div>
    </body>
</html>