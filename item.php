<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/item.css">


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <section class="item">
    <div>

<p class="titulo">Novo item</p> <br>

<form action="./PHP/obj.php" method="POST">

        <label class="descrição" for="item"> Nome do objeto que deseja emprestar </label>
        <input class="caixa" type="text" name="item" id="item"><br>
       <button type="submit" class="botao">Cadastrar</button>

</form>
        

    </div>
   </section>
    
</body>
</html>