<?php
include '../conect.php';

if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT * FROM clientes where id_clientes = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $sql = "UPDATE clientes SET nome='$nome', telefone='$telefone', email='$email' WHERE id_clientes=$id";
    if($conn->query($sql) === TRUE){
        echo "<script>window.location = 'clientes.php'</script>";
    }else{
        echo "Erro: " . $sql . "<br>" . $conn->error;
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
       <h1>Editar <span>clientes</span></h1>
    </nav>
<form method="POST">
    <label for="nome">Nome</label>
    <input type="text" name="nome" value="<?php echo $row['nome']; ?>" require>
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" value="<?php echo $row['telefone']; ?>" require>
    <label for="email">Email</label>
    <input type="text" name="email" value="<?php echo $row['email']; ?>" require>
    <button type="submit">Atualizar</button>
</form>
</body>
</html>