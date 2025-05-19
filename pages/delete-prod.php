<?php
include '../conect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM produtos WHERE idprodutos= $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location = 'estoque.php'</script>";
        exit;
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>