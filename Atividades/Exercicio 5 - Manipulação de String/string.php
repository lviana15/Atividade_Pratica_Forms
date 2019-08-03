<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Texto</title>
</head>
<body>
<form method="POST" action="strings.php">
    Digite algum texto aqui:<br/> <textarea name="texto"></textarea> <br/>
    <input type="radio" name="operacao" value="tamanho" /> Encontrar o tamanho do texto<br/>
    <input type="radio" name="operacao" value="inverter" />Inverter texto<br/>
    <input type="radio" name="operacao" value="maiuscula" />Mudar para todas as letras maiúsculas<br/>

    <input type="radio" name="operacao" value="minuscula" />Mudar para todas as letras minúculas<br/>
    <input type="radio" name="operacao" value="primeira_letra" />Alterar primeira letra de todas as palavras
    para maiúscula<br/><br/>
    <input type="submit" value="Manipular" />
</form>
</body>
</html>