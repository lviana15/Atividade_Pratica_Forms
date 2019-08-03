<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 3 - Vinho</title>
    <meta charset="utf-8"</head>
</head>
<body>

<?php
    $nome = $_POST['nome'];
    $vinho = $_POST['vinho'];
    $ref = $_POST['ref'];
?>

    Obrigado pela sua seleção, <?php echo $nome ?> <br/>
    <hr>
    Você realmente aprecia <?php echo $ref ?> <br/>
    -especialmente com um bom vinho <?php echo $vinho ?>

</body>
</html>