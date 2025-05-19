<?php
include './conect.php';
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $user = $_POST['user'];
  $senha = $_POST['password'];

  $sql = "SELECT * FROM conta WHERE usuario = '$user'";
  $resultado = $conn->query($sql);

  if($resultado->num_rows === 1){
     $row = $resultado->fetch_assoc();
     $senha_cod = $row['senha'];

    if(password_verify($senha, $senha_cod)) {
          $_SESSION['usuario_id'] = $row['id_conta'];
          $_SESSION['usuario_nome'] = $row['nome'];
          header("location: pages/home.php");
      }else{
          echo "Senha incorreta.";
    }
  
  }else{
    echo "Usuario não encontrado.";
  }
}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Login</title>
</head>
<body>
    <div class='central'>
        <div class='container-marca'>
        <h1><span>MG</span> Borracharia</h1>
        <p>Referência em manutenção de pneus.</p>
        </div>
        <form method="POST">
        <label>Usuario</label>    
        <input type="text" name='user' require>
        <label>Senha</label> 
        <input type="password" name='password' require>
        <button type='submit'>Entrar</button>
        <a href="./cadastro.php">criar uma conta?</a>
    </form>
    </div>
    <p class='direitos'><span>MG</span> Borracharia, todos os direitos reservados.</p>
</body>
</html>