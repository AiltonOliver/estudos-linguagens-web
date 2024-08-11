<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Constantes</title>
    <style>
        body{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    
    <h1 style="text-align: center; color:blue">Constantes</h1>


    <center>
       
    <?php 
      //Definição de constantes
      define("meuNome"," Jose Ailton ");
      define("peso",63.50);

      echo"Sou".meuNome." peso ".peso;

      echo"<br> <hr>";
      define("nomeCao"," Aysha ");
      define("elogioA","Otima cachorra");
      echo"Minha".nomeCao."e uma ".elogioA;

      echo"<br> <hr>";
      define("proficaoA","Programador");
      define("anosA",5);
      echo"Profição: ".proficaoA." esperiencia ".anosA." anos";

      echo"<br> <hr>";

    ?>

    </center>
    
</body>
</html>