<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="class" align="center">
            <h1>GERAR CPF</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <input type="submit" value="Clique aqui apara gerar">
            </form>
        </div>
    </header>
    <div class="class2" align="center">
        <br>
        <?php
            $contador = 0;
            $array = [];
            while($contador < 9){
                $array[$contador] = random_int(0, 9);
                $contador += 1;
            }

            if($array[8] === 1){
                $estado = "Esse CPF foi cadastrado em algum desses Estados: DF, GO, MS, MT, ou TO.";
            }
            else if($array[8] === 2){
                $estado = "Esse CPF foi cadastrado em algum desses Estados: AC, AM, AP, PA, RO ou RR.";
            }
            else if($array[8] === 3){
                $estado = "Esse CPF foi cadastrado em algum desses Estados: CE, MA ou PI.";
            }
            else if($array[8] === 4){
                $estado = "Esse CPF foi cadastrado em algum desses Estados: AL, PB, PE ou RN.";
            }
            else if($array[8] === 5){
                $estado = "Esse CPF foi cadastrado em algum desses Estados: BA ou SE.";
            }
            else if($array[8] === 6){
                $estado = "Esse CPF foi cadastrado em: MG.";
            }
            else if($array[8] === 7){
                $estado = "Esse CPF foi cadastrado em algum desses Estados: ES ou RJ.";
            }
            else if($array[8] === 8){
                $estado = "Esse CPF foi cadastrado em: SP.";
            }
            else if($array[8] === 9){
                $estado = "Esse CPF foi cadastrado em algum desses Estados: PR ou SC.";
            }
            if($array[8] === 0){
                $estado = "Esse CPF foi cadastrado em: RS.";
            }
            $final = 0;
            $max = 10;
            for($i=0; $i<9; $i++){
                $soma = $array[$i] * $max;
                $max -= 1;
                $final += $soma;
            }

            $quociente = $final / 11;
            $resto = $final % 11;
            if($resto === 0 || $resto === 1){
                $array[9] = 0;
            }
            else{
                $array[9] = 11 - $resto;
            }

            $max = 10;
            $final = 0;
            for($i=1; $i<10; $i++){
                $soma = $array[$i] * $max;
                $max -= 1;
                $final += $soma;
            }

            $quociente = $final / 11;
            $resto = $final % 11;
            if($resto === 0 || $resto === 1){
                $array[10] = 0;
            }
            else{
                $array[10] = 11 - $resto;
            }

            $contador = 0;
            echo $estado . "<br>";
            echo "CPF GERADO: ";

            while($contador < count($array)){
                echo $array[$contador];
                $contador += 1;
            }
        ?>
    </div>
</body>
</html>