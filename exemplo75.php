
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Document</title>
        <link type="text/css" rel="stylesheet" href="estilo.css"/>
    </head>
    <body>
        <h1>CT Desenvolvimento de Sistemas Back-End</h1>
        <div id="container">
        <form method="POST" action="exemplo75.php">
            <p>Usuario: <input type="text" name="user"></p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <p>SENHA <input type="password" name="senha"></p>
            <p>
                <input type="submit" value="  r">
            </p>
        </form>
            <?php
                echo "CRIPTOGRAFIA EM PHP<br><br>";
                if(!empty($_POST["user"]) && !empty($_POST["senha"])){
                    $usuario = $_POST["user"];
                    $senha   = $_POST["senha"];
                    echo "<br>Usuario: $usuario    -  $senha";
                }
                /*
                 MD% é uma função hash amplamente utizilada que
                 critografa com 128bits em 32 caracteres.
                 Não existe função para descriptografa i MD%
                 */
                $senhai = md5($senha);
                echo "<br><br> a senha criptografada com MD5 é: $senhai";
                /*
                SHA1 é uma função de dispersão criptografica
                projetada pela agencia de Segurança Nacional dos
                EUA e é uma padrai federal de processamento de unfirmação.
                Não existe decritografia para o SHA1
                */
                $senhaSHA1 = sha1($senhai);
                echo "<br><br> a senha criptografada com SHA1 é :".$senhaSHA1;
                /*BASE64 é um  metodo para codificação de dados para
                trasferencia na internet. é utilizada frequentemente
                oara transmitir dados binarios  por meio de texto como
                por exemplo anexo de e-mail*/
                $senhaBASE64 = base64_encode($senhai);
                echo "<br><br> A senha criptografada ciom BASE é: $senhaBASE64";
                $senhaBASE64 = base64_decode($senhaBASE64);
                echo "<br><br> A senha criptografada ciom BASE é: $senhaBASE64";
            ?>
        </div>
    </body>
</html>