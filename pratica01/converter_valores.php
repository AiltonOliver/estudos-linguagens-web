<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Valores</title>
    <style>
        body{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; color:blue;">Converter Valores</h1>
    <center>
        <?php 
          $dinheiro = 500;
          $peso = 63.50;

          $convfloat = (float)$dinheiro;
          $convInt = (int)$peso;
          echo"Int para Float $convfloat";
           echo"<br>";
          echo"Float para Int $convInt";

        ?>
    </center>
    
</body>
</html>