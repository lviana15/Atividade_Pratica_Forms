<!DOCTYPE html>
<html>
<head>
    <title>Seletor de Cor</title>
    <meta charset="UTF-8">
</head>
<body>

<h2>Seletor de Cores Interativo</h2>

R: <?php echo $r = $_POST['r'] ?>
G: <?php echo $g = $_POST['g'] ?>
B: <?php echo $b = $_POST['b'] ?>

<?php

$rgb = $r . ',' . $g . ',' . $b;

?>

<div style="width: 150px; height: 150px; background-color: rgb(<?php echo $rgb;?>)" /></div>

</form>
</body>
</html>