
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/index.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Login</title>
</head>
<body>
<section class="form">

    <header class="logo">
        <div>
        <img src="hands.png" alt="logo" class="logo">
        </div>
    </header>

    <section class="login_usuario"> 
        <div>
    
<div>
    <p class="login">Entrar</p>

 <form action="./PHP/index.php" method="post">

    <label class="usuário" for="login"> Usuário </label><br>
    <input class="caixauser" type="text" name="usuario" id="usuario"><br>

    <label class="senha" for="senha"> Senha </label><br>
    <input class="caixasenha" type="password" name="senha" id="senha"><br>

    <a href="homepage.php"></a><input  class="botao" type="submit" value="Entrar" id="Entrar" >

 </form>
</div>
                        
    <a href="senha.php" class="esqueceu">esqueceu a senha</a>
    
                    
                </div>
            </form>
            <h2 class="cadastro">
            <a class="linkcadastro" href="caduser.php" ><button class="cadastro">Cadastrar</button></a>
            </h2>
        </div>
    </div>
    
</section>
</section>
</body>
</html>