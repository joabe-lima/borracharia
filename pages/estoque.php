<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/estoque.css">
    <title>Estoque</title>
</head>
<body>
<nav class="menu-estoque">
        <a href="../pages/home.php"><img src="../img/botao-voltar.png" alt=""></a>

        <h1>estoque de <span>produtos</span></h1>
    </nav>

<div class="central-estoque">
    <div class="busca"><button>buscar</button> <input type="text" placeholder="qual produto você procura ?"></div>
    <table>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Quantidade</th>
            <th>Editar</th>
            <th>Excluir</th>
        </thead>
        <?php
include '../conect.php';

$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

           if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<tbody>
                    <td>" . $row['idprodutos'] . "</td>
                    <td>" . $row['nome'] . "</td>
                    <td>" . $row['marca'] . "</td>
                    <td>" . $row['modelo'] . "</td>
                    <td>" . $row['quantidade'] . "</td>
                    <td><img src='../img/1486564394-edit_81508.png' alt=''></td>
                    <td><img src='../img/trash.png' alt=''></td>
                </tbody>";
            }
                
           } 

    ?>
    </table>
</div>
</body>
</html>