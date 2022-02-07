<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia semana 3</title>
</head>
<body>
    <form method="post" style="text-align: center;">
        <input type="text" name="numero1" id="numero1">
        <br><br>
        <input type="submit" name="mostrar" value="Mostrar">
        <br><br>
    </form>

    
        <div style="float: left;">
            <?php
            if((!empty($_POST["numero1"]) && isset($_POST["mostrar"]))){

                $numero=$_POST["numero1"];
        
                echo "<h3>Numeros pares desde el 1 hasta el 100</h3>";
                for($i=1; $i<101; $i=$i+1){
                    
                    if(($i % 2) == 0)
                    {
                        echo $i. " - ";
        
                    }
                    if( ($i == 25) || ($i == 50) || ($i == 75))
                    {
                        echo "<br>";
                    }
                }
            }
            ?>
        </div>


        <div style="float: left; margin-left: 5%;">
            <?php
            if((!empty($_POST["numero1"]) && isset($_POST["mostrar"]))){

                $numero=$_POST["numero1"];
        
                echo "<h3>Tabla de multiplicar de 5 en 5</h3>";
        
                $Contador = 5;
                do{  
                    echo $numero. " x " .$Contador. " = " .($numero * $Contador). "<br>";
                    $Contador+=5;
                }while($Contador<101);
            }
            ?>
        </div>

        <div style="float: left; margin-left: 5%;">
            <?php
            if((!empty($_POST["numero1"]) && isset($_POST["mostrar"]))){

                $numero=$_POST["numero1"];
        
                echo "<h3>Lista de frutas</h3>";

                $tab = "&nbsp;&nbsp;&nbsp;&nbsp;";//Simulador de tecla tab
                $Frutas=array("Limón","Durazno","Fresa","Banana","Higos","Arándano ","Kiwi","Mango","Guayaba","Coco");
                
                foreach($Frutas as $dato){
                    echo $tab. "-" .$dato. "<br>";
                }
            }
            ?>
        </div>

</body>
</html>

<?php 
    if((!empty($_POST["numero1"]) && isset($_POST["mostrar"]))){

    }
    else{
        echo "Por favor digite un numero en el campo inicial para poder realizar el calculo";
    }
?>