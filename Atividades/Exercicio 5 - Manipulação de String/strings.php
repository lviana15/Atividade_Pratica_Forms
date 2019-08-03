<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Texto</title>
</head>
<body>
<h2>Mensagem Manipulada</h2>
<?php
$mens = $_POST['texto'];
$operacao = $_POST['operacao'];
if($operacao == "tamanho"){
    print strlen ($mens);
}
elseif($operacao == "inverter"){
    print strrev ($mens);
}
elseif($operacao == "maiuscula"){
    print strtoupper ($mens);
}
elseif($operacao == "minuscula"){
    print strtolower ($mens);
}
else{
    print ucwords ($mens);
}
?>
</body>
</html>