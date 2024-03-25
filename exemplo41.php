<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
    <link type="text/css" rel="stylesheet" href="estilo.css"/>
</head>
<body>
    <h1>CT Desenvolvimento de Sistemas - Back-End</h1>
    <div id="container">
    <form method="post" action="exemplo41.php">
      <label>Informe a Quantidades de INPURS:</label>
      <input type="number" name="valor" min="1" max="8"><br>      
      <input type="submit" value="Criar INPUT">
    
    </form>
    <?php
        echo "EXEMPLO DE ESTRUTURA DE REPETIÇÃO CRIANDO ELEMENTOS<br><br>";
        if(!empty($_POST["valor"])){
          $iTotal = $_POST["valor"];
          for($i = 1; $i <= $iTotal; $i++){
            echo "Valor $i: <input type='number' name='valor$i'min='0' max='99'><br>";
          }
        }
     
    ?>
    </div>
</body>
</html>