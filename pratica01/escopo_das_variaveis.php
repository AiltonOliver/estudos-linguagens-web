<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escopo das variaveis</title>
    <style>
        body{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; color:blue" >Escopo das variaveis</h1>
    <center>
        <?php 
        //Escopo das variaveis


        #Escopo de variavel Errado.
        $valorEx1 = 50;
            function escopo_variavel_erro(){
                $valorEx1 += 20;
                echo"Valor do escopo: $valorEx1 <br>";
            }
          escopo_variavel_erro();

          #Escopo de variavel Correto.
          echo"<br> <hr>";
          $valoEx2 = 50;

          function escopo_variavel_certo(){
            global $valoEx2;
            $valoEx2 +=30;
            echo" O valor e: $valoEx2 <br>";
          }
          
          escopo_variavel_certo();


          #Escopo de variavel outro exemplo.

          echo"<br> <hr>";
            $numero = 400;
                function escopo_variaveis_outexemplo(){
                   echo $GLOBALS["numero"]."<br>";
                   $GLOBALS["numero"]++;
                }

         escopo_variaveis_outexemplo();
         echo"$numero";
               
        ?>
    </center>
    
</body>
</html>