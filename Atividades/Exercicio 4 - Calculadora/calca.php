<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Calculos</title>
</head>
<body>
<form action="calc.php" method="post">
    <label>Valor 1: <input type="text" name="valor1"> </label> <br/>
    <label>Valor 2: <input type="text" name="valor2"> </label> <br/>
    <label>Calculo:</label> <br/>

    <input type="radio" name="operacao" value="adi"> Adicionar
    <input type="radio" name="operacao" value="sub"> Subtrair
    <input type="radio" name="operacao" value="mult"> Multiplicar
    <input type="radio" name="operacao" value="div"> Dividir

    <br/>
    <input type="submit" value="Calcular">
    <input type="reset" value="Limpar">
</form>
</body>
</html>


