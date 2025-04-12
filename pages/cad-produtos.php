<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/form.css">
    <title>Document</title>
</head>
<body>
    <nav class="menu-form">
       <a href="home.php"><img src="../img/botao-voltar.png" alt="voltar"></a>
       <h1>Cadastrar <span>produtos</span></h1>
    </nav>
       <form action="">
           <label for="">Nome</label>
           <input type="text" name='nome' require>
           <label for="">Marca</label>
           <input type="text" name='marca' require>
           <label for="">Modelo</label>
           <input type="text" name='modelo' require>
           <label for="">Quantidade</label>
           <input type="number" name='quantidade' require>
           <button type='submit'>cadastrar</button>
       </form>
</body>
</html>