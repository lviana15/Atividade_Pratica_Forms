<!DOCTYPE html>
<head>
    <title>Exercício 1 – Carro </title>
    <meta charset="utf-8">
</head>
<body>
<h2>Selecione o carro:</h2>
<form method="post" action="sel_car.php">
    Tipo: <br/>
    <select name="selTipo">
        <option value="Porsche 911">Porsche 911</option>
        <option value="Volskwagen Beetle">Volskwagen Beetle</option>
        <option value="Ford Taurus">Ford Taurus</option>
    </select>
    <br/>
    <br/>
    Cor: <br/>
    <input type="text" name="cor">
    <br/>
    <br/>
    <input type="submit" value="Enviar" />
</form>
</body>
</html>

