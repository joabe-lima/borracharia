<?php
include '../conect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM ordens WHERE idordens= $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location = 'ordens.php'</script>";
        exit;
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>