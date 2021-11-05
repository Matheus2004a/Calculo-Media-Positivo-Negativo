<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando média, números positivos, negativos</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <form action="" method="post" class="form-calcule">
        <h2>Descubra a média de todos os valores abaixo:</h2>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Digite o 1º valor:</label>
            <input type="number" name="num1" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Digite o 2º valor:</label>
            <input type="number" name="num2" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Digite o 3º valor:</label>
            <input type="number" name="num3" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Digite o 4º valor:</label>
            <input type="number" name="num4" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Digite o 5º valor:</label>
            <input type="number" name="num5" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Digite o 6º valor:</label>
            <input type="number" name="num6" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Digite o 7º valor:</label>
            <input type="number" name="num7" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Digite o 8º valor:</label>
            <input type="number" name="num8" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Digite o 9º valor:</label>
            <input type="number" name="num9" class="form-control" id="formGroupExampleInput">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Digite o 10º valor:</label>
            <input type="number" name="num10" class="form-control" id="formGroupExampleInput">
        </div>
        <span>
            <button type="submit" name="btn-submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
        </span>

        <?php
        if (isset($_POST['btn-submit'])) {
            $numsEsc = array($_POST['num1'], $_POST['num2'], $_POST['num3'], $_POST['num4'], $_POST['num5'], $_POST['num6'], $_POST['num7'], $_POST['num8'], $_POST['num9'], $_POST['num10']);
            $soma = 0;
    
            $positivesValues = 0;
            $negativesValues = 0;
    
            for ($i = 0; $i < count($numsEsc); $i++) {
                $soma += $numsEsc[$i];
                if ($numsEsc[$i] >= 0) {
                    $positivesValues += 1;
                } else {
                    $negativesValues += 1;
                }
            }
    
            $media = $soma / count($numsEsc);
            echo "A média dos valores é: $media <br>";
            echo "A quantidade de valores positivos são: $positivesValues <br>";
            echo "A quantidade de valores negativos são: $negativesValues <br>";
    
            $positivesPercentual = (100 * $positivesValues) / 10;
            $negativesPercentual = (100 * $negativesValues) / 10;
            echo "O percentual de valores positivos é: $positivesPercentual% <br>";
            echo "O percentual de valores negativos é: $negativesPercentual%";
        }
        ?>
    </form>
</body>

</html>