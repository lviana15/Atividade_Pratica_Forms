<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
</head>
<body>
<?php
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacao = $_POST['operacao'];

    if($operacao == "adi"){
    $valoradc = $valor1 + $valor2;
    echo "O resultado foi: $valoradc";
    } elseif($operacao == "sub"){
    $valorsub = $valor1 - $valor2;
    echo "O resultado foi:  $valorsub";

    } elseif($operacao == "mult"){
    $valormult = $valor1 * $valor2;
    echo "O resultado foi:  $valormult";
    } elseif($operacao == "div"){
    $valordiv = $valor1 / $valor2;
    echo "O resultado foi:  $valordiv";
    }
?>

</form>
</body>
</html>