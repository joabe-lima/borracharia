<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/clientes.css">
    <title>Lista de clientes</title>
</head>
<body>
    <nav class="menu-conta">
            <a href="home.php"><img src="../img/botao-voltar.png" alt=""></a>

            <h1>contas dos <span>clientes</span></h1>
        </nav>
    <div class="central-conta">
        <div class="busca"><button>buscar</button> <input type="text" placeholder="quem você procura ?"></div>
        <table>
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Editar</th>
                <th>Excluir</th>
            </thead>
            <?php
include '../conect.php';

$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

           if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo "<tbody>
                    <td>" . $row['id_clientes'] . "</td>
                    <td>" . $row['nome'] . "</td>
                    <td>" . $row['telefone'] . "</td>
                    <td>" . $row['email'] . "</td>
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
