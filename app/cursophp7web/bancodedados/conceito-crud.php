<?php
require 'conectando-pdo.php';

$users = [];

$sql = $pdo->query("SELECT * FROM users");

if($sql->rowCount() > 0){
    $users = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<a href="form_usuario.php">Adicionar usuario</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?=$user['id']; ?></td>
            <td><?=$user['name']; ?></td>
            <td><?=$user['email']; ?></td>
            <td>
                <a href="editar.php?id=<?=$user['id']; ?>">[Editar]</a>
                <a href="excluir.php?id=<?=$user['id']; ?>">[Excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>