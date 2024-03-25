
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
                echo "COOKIES NO PHP<br>";
            ?>
            <form method="POST" action="criar_cookies.php">
                <p>USUÁRIO: <input type="text" name="user"/></p>
                <p>SENHA:<input type="password" name="password"/></p>
                <fieldset>
                    <legend>ESCOLHA A COR DO FUNDO DA PAGINA</legend>
                    <input type="radio" name="cor" id="azul" value="#0000FF" checked>
                    <label>AZUL</label>
                    <input type="radio" name="cor" id="vermelho" value="#0000FF">
                    <label>VERMELHO</label>
                    <input type="radio" name="cor" id="verde" value="#0000FF">
                    <label>VERDE</label>
                </fieldset>
                <p>
                    <input type="submit" value="Enviar"/>
                    <input type="reset" value="Limpar"/>
                </p>
            </form>
        </div>
    </body>
</html>