<?php
    $numsEsc = array($_POST['num1'],$_POST['num2'],$_POST['num3'],$_POST['num4'],$_POST['num5'],$_POST['num6'],$_POST['num7'],$_POST['num8'],$_POST['num9'],$_POST['num10']);

    $positivesValues = 0;
    $negativesValues = 0;
    
    for ($i = 0; $i < count($numsEsc); $i++) { 
        if($numsEsc[$i] >= 0){
            $positivesValues += 1;
        } 
        else{
            $negativesValues += 1;
        }
    }
    
    $media = $numsEsc[$i] / $numsEsc[$i];
    echo "A média dos valores é: $media <br>";
    echo "A quantidade de valores positivos são: $positivesValues <br>";
    echo "A quantidade de valores negativos são: $negativesValues <br>";
    
    $positivesPercentual = (100 * $positivesValues) / 10;
    $negativesPercentual = (100 * $negativesValues) / 10;
    echo "O percentual de valores positivos é: $positivesPercentual% <br>";
    echo "O percentual de valores negativos é: $negativesPercentual%";
?>