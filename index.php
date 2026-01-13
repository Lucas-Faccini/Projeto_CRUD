<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Simples</title>
</head>
<body>
    <h2>Gerenciar Usuários</h2>
    <form action="acoes.php" method = "POST">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit" name="cadastrar" class="btn add">Cadastrar</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    <?php
    $result = $conn->query("SELECT * FROM usuarios");
    while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td>
            <a href="acoes.php?deletar=<?php echo $row['id']; ?>" class="btn del">Excluir</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>