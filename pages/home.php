<?php
include '../conect.php';

function encerrarSessao() {
   session_unset();
   session_destroy();
   header("location: ../index.php");
   exit();
}

if(isset($_POST['logout'])) {
  encerrarSessao();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/home.css">
    <title>Home</title>
</head>
<body>
   <nav>
    <img class='logo' src="../img/cb.png" alt="logo">
    <div class='paginas' >
       <a href="./clientes.php">clientes</a>
       <a href="./estoque.php">estoque</a>
       <a href="./ordens.php">ordens</a>
       <li class='menu'>
         <img  src="../img/botao-voltar.png" alt="menu">
       <ul class='navbar'>
          <li>
            <form method="post">
               <button type="submit" name="logout">sair</button>
            </form>
          </li>
       </ul> 
       </li>
    </div>
   </nav> 
   <div class='head-img'>
      <div class='desc'>
         <h1><span>BEM </span> VINDO, ao seu gestor de serviços.</h1>
      <p>nele você pode gerir o seu negócio de maneira simples e objetiva.</p>
      </div>
   </div>
   <main class='central'>
      <div class='add-btn'>
          <div class='add-cliente'>
             <img src="../img/clientes.png" alt="">
             <div class='direcional'>
               <h3><span>adcionar</span> clientes</h3>
                <p>cadastre clientes em sua lista, e facilite a gestão da sua empresa.</p>
                <a href="./cad-clientes.php">cadastrar</a>
             </div>
            
          </div>
          <div class='add-produto'>
          <img src="../img/estoque.png" alt="">
          <div class='direcional'>
          <h3><span>adcionar</span> produto</h3>
                <p>adcione produtos no estoque e facilite a gestão da sua empresa.</p>
                <a href="./cad-produtos.php">adcionar</a>
             </div>
          </div>
      </div>
          <div class='container-os'>
            <div class='direcional-os'>
               <h1>ORDEM <span>DE SERVIÇO</span></h1>
               <p>Com a função de criar ordens de serviços, 
                  agora você pode organizar e deixar registrado todas as 
               emissões de serviços feitos na sua empresa, com pratcidade e comforto.</p>
              <a href="./cad-ordem.php">criar ordem</a>
            </div>
          </div>
   </main>
   <footer>
      <div class="links">
         <div class="coluna-a">
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">tweeter</a>
            <a href="#">threads</a>
         </div>
         <div class="coluna-b">
         <a href="#">linkedim</a>
         <a href="#">youtube</a>
         <a href="#">tweet</a>
         <a href="#">gmail</a>
         </div>
      </div>
      <p class="direitos"><span>MG</span> Borracharia , Todos os direitos reservados.</p>
   </footer>
</body>
</html>