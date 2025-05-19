<?php
include '../conect.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
   $nome = $_POST['nome'];
   $data = $_POST['data'];
   $encarregado = $_POST['encarregado'];
   $desc = $_POST['desc'];

   $sql = "INSERT INTO ordens(nome_cliente, data_ex, encarregado, descricao) VALUES ('$nome', '$data', '$encarregado', '$desc')";

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
        <a href="../pages/home.php"><img src="../img/botao-voltar.png" alt=""></a>

        <h1>Criar <span>ordem</span></h1>
    </nav> 
    <form method="POST">
           <label for="">Nome do cliente</label>
           <input type="text" name='nome' require>
           <label for="">Data de emissão</label>
           <input type="date" name='data' require>
           <label for="">Encarregado</label>
           <input type="text" name='encarregado' require>
           <label for="">Descrição do serviço</label>
           <input type="text" name='desc' require>
           <button type='submit'>cadastrar</button>
       </form>
</body>
</html>