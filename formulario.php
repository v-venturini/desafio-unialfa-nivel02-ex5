<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho 2º Bimestre</title>
</head>

<body>
    <form action="recupera-dados.php" method="post">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email">

        <label for="idade">Idade</label>
        <input type="number" name="idade" id="idade">

        <label for="hobbie">Hobbie</label>
        <textarea type="text" name="hobbie" id="hobbie">
        </textarea>

        <button type="submit">Salvar</button>
    </form>
</body>

</html>