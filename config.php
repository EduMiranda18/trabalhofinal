<?php

    $bd_name = 'cadastro_simples';
    $bd_host = 'localhost:3306';
    $bd_user = 'root';
    $bd_password = '';

    $pdo = new PDO("mysql:dbname=".$bd_name.";host=".$bd_host, $bd_user, $bd_password);



    $sql= $pdo->query('SELECT*FROM cliente');

    $dados = $sql->fetchAll();
    echo '<pre>';
    print_r($dados);

    // $sql= $pdo-> prepare('INSERT INTO cliente (nome, cpf, nascimento, senha) VALUES (:nome, :cpf, :ano, :senha)');

?>