<?php
require 'conectando-pdo.php';

$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare('SELECT * FROM users WHERE id = :id');
    $sql->bindValue('id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){
        $user = $sql->fetch(PDO::FETCH_ASSOC);

    }else{
        header('Location: conceito-crud.php');
        exit;
    }
}else{
    header('Location: conceito-crud.php');
    exit;
}
?>

<h1>Update</h1>

<form action="editar.php" method="post">
    <label>
        Nome:
        <input type="text" name="name" value="<?= $user['name'] ;?>"/>
    </label><br /><br />

    <label>
        E-mail:
        <input type="email" name="email" value="<?= $user['email'] ;?>"/>
    </label><br /><br />

    <input type="submit" value="Salvar">
</form>