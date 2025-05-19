<?php
include '../conect.php';

if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT * FROM produtos where idprodutos = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $quant = $_POST['quantidade'];

    $sql = "UPDATE produtos SET nome='$nome', marca='$marca', modelo='$modelo', quantidade='$quant' WHERE idprodutos=$id";
    if($conn->query($sql) === TRUE){
        echo "<script>window.location = 'estoque.php'</script>";
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
    <label for="marca">Marca</label>
    <input type="text" name="marca" value="<?php echo $row['marca']; ?>" require>
    <label for="modelo">Modelo</label>
    <input type="text" name="modelo" value="<?php echo $row['modelo']; ?>" require>
    <label for="quantidade">Quantidade</label>
    <input type="text" name="quantidade" value="<?php echo $row['quantidade']; ?>" require>
    <button type="submit">Atualizar</button>
</form>
</body>
</html>