<?php include 'config.php';

if(isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $nome = $_POST['email'];

    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
    $conn->query($sql);
    header("Location: index.php");
}

if (isset($_GET['deletar'])) {
    $id = $_GET['deletar'];
    $conn->query("DELETE FROM usuarios WHERE id=$id");
    header("Location: index.php");
}
?>