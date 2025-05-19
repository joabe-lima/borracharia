<?php
include ('./conect.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {
   $nome = $_POST['nome'];
   $user = $_POST['user'];
   $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

   $sql = "INSERT INTO conta(nome, usuario, senha) VALUES ('$nome', '$user', '$password')";

   if($conn->query($sql) === TRUE) {

    header("location: index.php");
       
   }else{
    if(mysqli_errno($conn) == 1062){
       echo "Erro: este e-mail já está cadastrado";
    }else{
        echo "Erro ao cadastrar: " . mysqli_error($conn);
    }
      
   }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <title>Document</title>
</head>
<body>
    <div class='central-cad'>
        <div class='container-marca-cad'>
            <h1><span>MG</span> Borracharia</h1>
            <p>Referência em manutenção de pneus.</p>
        </div>
        <form method="POST">
        <label for="">Nome</label>
        <input type="text" name='nome' require>
            <label for="">Usuario</label>
            <input type="text" name='user' require>
            <label for="">Senha</label>
            <input type="password" name='password' require>
            <button type='submit'>Cadastrar</button>
            <a href="./index.php">ja possui uma conta?</a>
        </form> 
    </div>
    <p class='direitos'><span>MG</span> Borracharia, todos os direitos reservados.</p>
</body>
</html>