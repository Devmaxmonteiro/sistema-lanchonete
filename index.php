<?php
include('conexao.php');

$sql = "SELECT * FROM pedidos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistema para Lanchonete</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Sistema para Lanchonete</h1>
    
    <form method="POST" action="processa_pedido.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="produto">Produto:</label>
        <input type="text" id="produto" name="produto" required><br>

        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" required><br>

        <input type="submit" value="Fazer Pedido">
    </form>

    <?php if ($result->num_rows > 0): ?>
        <h2>Pedidos Realizados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['nome']) ?></td>
                        <td><?= htmlspecialchars($row['produto']) ?></td>
                        <td><?= htmlspecialchars($row['quantidade']) ?></td>
                        <td><?= htmlspecialchars($row['data']) ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Nenhum pedido encontrado.</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
</body>
</html>
