<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        body{

            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center; color:blue;">Array</h1>

    <center>
        <?php 
        // Declarando vetores
        #Vetores com identificadores indices
          $vet[0] = 10;
          $vet[1] = 20;
          $vet[2] = 30;
          echo $vet[0]."<br>";
          echo $vet[1]."<br>";
          echo $vet[2]."<br>";
          echo"<br>";
          
          #Vetores sem indentificadores
          $veto[] = "Jedeao";
          $veto[] = "Moises";
          echo $veto[0]."<br>";
          echo $veto[1]."<br>";
          echo"<br>";

           #Vetores com chave asociada
           $vetor["animal"] = "Gato";
           $vetor["fruta"] = "Manga";
           $vetor["ano"] = 2024;
           echo $vetor["animal"]."<br>";
           echo $vetor["fruta"]."<br>";
           echo $vetor["ano"]."<br>";


        ?>
    </center>
    
</body>
</html>