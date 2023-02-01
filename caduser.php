<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/caduser.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
</head>
<body>

    <section class="form">

    <header class="logo">
        <div>
        <img src="hands.png" alt="logo" class="logo">
        </div>
    </header>

<div>

 <form action="./PHP/cadastro.php" method="POST">

    <h1 class="conta">Criar conta</h1>
    <label class="text" for="usuário">Digite um nome de usuário</label><br>
    <input class="box" type="text" name="usuario" id="usuario"><br>
    <label class="text" for="senha">Digite uma senha </label><br>
    <input class="box" type="password" name="senha" id="senha"><br>

        <input class="button" type="submit" value="Cadastrar" class="botaocadastrar">

 </form>

</div>
        
</section>
     
</body>
</html>