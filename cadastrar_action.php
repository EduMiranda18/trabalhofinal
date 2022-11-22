<?php
    require 'config.php';


    $nome =filter_input(INPUT_POST, 'nome');
    $cpf =filter_input(INPUT_POST, 'cpf');
    $ano =filter_input(INPUT_POST, 'ano');
    $senha =filter_input(INPUT_POST, 'senha');


    if($nome&&$cpf&&$ano&&$senha){

        $sql = $pdo-> prepare('INSERT INTO cliente (nome, cpf, nascimento, senha) VALUES (:nome, :cpf, :ano, :senha)');
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':ano', $ano);
        $sql->bindValue(':senha', $senha);  
        $sql->execute();
    
        header("Location: index.html");
        exit;
    }else{
        header("Location: login.html");
        exit;
    }





?>