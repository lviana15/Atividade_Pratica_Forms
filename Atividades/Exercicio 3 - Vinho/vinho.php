<!DOCTYPE html>
<html>
<head>
    <title>Exercicio 3 - Vinho</title>
    <meta charset="utf-8">
</head>
<body>
    <form action="sel_vinho.php" method="post">
        <label>Digite Seu Nome:</label>
        <input type="text" name="nome"> <br/>

        <label>Selecione Seu Vinho Favorito:</label> <br/>
        <input type="radio" name="vinho" value="branco">Branco
        <input type="radio" name="vinho" value="rose">Rosé
        <input type="radio" name="vinho" value="tinto">Tinto <br/>

        <label>Digite Sua Refeição Favorita:</label>
        <input type="text" name="ref"> <br/>

        <input type="submit" name="entrar" value="Submeter Este Formulário">
    </form>
</body>
</html>