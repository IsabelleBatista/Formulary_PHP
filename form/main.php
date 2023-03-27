<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulary</title>
</head>
<body>
<fieldset>
    <legend><h2>Formulary</h2></legend>
    <form action="formulary.php" method="post">
        <div>
            <br>
            <label for="formulary.php">
                Nome:
                <input type="text" name="nome" pattern="\d*" style="outline: none">
            </label>
            <label for="formulary.php">
                Sobrenome:
                <input type="text" name="sobrenome" style="outline: none">
            </label>
        </div>

        <br>
        <div>
            <label for="formulary.php">
                Email:
                <input type="text" name="email" style="outline: none">
            </label>
            <label for="formulary.php">
                Senha:
                <input type="password" name="senha" style="outline: none" maxlength="12" minlength="6">
            </label>
        </div>

        <br>
        <div>
            <label for="male" style="cursor: pointer">
            Masculino
                <input type="radio" name="sexo" id="male" value="masculino"style="cursor: pointer">
            </label>
            <label for="female" style="cursor: pointer">
            Feminino
                <input type="radio" name="sexo" id="female" value="feminino" style="cursor: pointer">
            </label>
        </div>

        <br>
        <div>
            <button type="submit" name="enviar" style="cursor: pointer">Send</button>
            <button type="reset" name="cancelar" style="cursor: pointer">Reset</button>
        </div>
    </form>
</fieldset>
</body>
</html>