<?php 
require 'conectando-pdo.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email){

    $sql = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() === 0){
        $sql = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $sql->bindValue(':name', $name);
        $sql->bindParam(':email', $email);
        $sql->execute();

        header("Location: conceito-crud.php");
    }else{
        header("Location: form_usuario.php");
        exit;
    }
}else{
    header("Location: form_usuario.php");
    exit;
}
