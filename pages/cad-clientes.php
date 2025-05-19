<?php
include '../conect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
   $nome = $_POST['nome'];
   $tel = $_POST['telefone'];
   $email = $_POST['email'];

   $sql = "INSERT INTO clientes(nome, telefone, email) VALUES ('$nome', '$tel', '$email')";

   if($conn->query($sql) === TRUE) {

       echo "<script>alert('Cadastrado com sucesso!');</script>";
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
       <h1>Cadastrar <span>clientes</span></h1>
    </nav>
       <form method="POST">
           <label for="">Nome</label>
           <input type="text" name='nome' require>
           <label for="">Telefone</label>
           <input type="text" name='telefone' require>
           <label for="">Email</label>
           <input type="text" name='email' require>
           <button type='submit'>cadastrar</button>
       </form>
</body>
</html>