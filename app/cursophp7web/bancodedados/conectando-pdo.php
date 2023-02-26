<?php

    $DB_NAME = 'cursophp';
    $DB_HOST = 'mysql';
    $DB_USER = 'php';
    $DB_PASS = 'php';

    try{
        $pdo = new PDO("mysql:dbname=" . $DB_NAME . ";host=" . $DB_HOST, $DB_USER,  $DB_PASS);
    }catch(Exception $e){
        echo $e->getMessage();
    }

    /* $sql = $pdo->query('SELECT * FROM users');

    $data = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo 'TOTAL: '.$sql->rowCount();

    echo '<pre>';

    print_r($data); */