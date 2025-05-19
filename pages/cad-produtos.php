<?php
include '../conect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
   $nome = $_POST['nome'];
   $marca = $_POST['marca'];
   $modelo = $_POST['modelo'];
   $quant = $_POST['quantidade'];

   $sql = "INSERT INTO produtos(nome, marca, modelo, quantidade) VALUES ('$nome', '$marca', '$modelo', '$quant')";

   if($conn->query($sql) === TRUE) {

    header("location: home.php");
   }else{
      echo "erro: " . $sql . "<br>" . $conn->error;
   }
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
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
       <form method="POST">
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