<?php
        $salario = 7040;
        $gasolina = 6.79;
        $telefone = "992849781"
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O $salario é numero   ?"  . is_numeric($salario) ."</br>";
            echo "O $gasolina é numero   ?"  . is_numeric($gasolina). "</br>";
            echo "O $telefone é numero   ?"  . is_numeric($telefone). "</br>";
            

            // testar se é inteiro
            echo "O $salario é numero   ?"  . is_int($salario) ."</br>";
            echo "O $gasolina é numero   ?"  . is_int($gasolina). "</br>";
            echo "O $telefone é numero   ?"  . is_int($telefone). "</br>";


            // testar se é float
        ?>
        
        
    </body>
</html>