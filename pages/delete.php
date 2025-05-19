<?php
include '../conect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM clientes WHERE id_clientes= $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location = 'clientes.php'</script>";
        exit;
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>