<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ordens.css">
    <title>ordens</title>
</head>
<body>
    <nav class="menu-ordens">
        <a href="../pages/home.php"><img src="../img/botao-voltar.png" alt=""></a>

        <h1>Ordens de <span>serviços</span></h1>
    </nav>
    <div class="central-ordens">
      <?php
      include '../conect.php';

      $sql = "SELECT * FROM ordens";
      $result = $conn->query($sql);

     if($result->num_rows > 0){ 
         while($row = $result->fetch_assoc()){

       echo"<div class='ordens'>
        <h2>Ordem de serviço <a href='delete-ordem.php?id=" . $row['idordens'] . "' class='editar'><img src='../img/trash.png' alt=''></a></h2>
         <div class='itens-superior'>
            <div class='item'>
               <h3>Data de emissão</h3>
               <p>" . $row['data_ex'] . "</p>
            </div>
            <div class='item'>
               <h3>Nome do cliente</h3>
               <p>" . $row['nome_cliente'] . "</p>
            </div>
            <div class='item'>
               <h3>Encarregado</h3>
               <p>" . $row['encarregado'] . "</p>
            </div>
         </div> 
         <div class='item inferior'>
            <h3>Descrição do serviço</h3>
            <div class='ds-foco'>
                <p>" . $row['descricao'] . "</p>
            </div>
           </div> 
         </div>";

         }
      }
         ?>
    </div>

</body>
</html>