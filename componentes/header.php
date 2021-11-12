<?php
    $raiz = "/daniel-wilson/atividade_crud";
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISTEMA DE CADASTRO</title>

    <link rel="stylesheet" href="<?= $raiz ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= $raiz ?>/bootstrap/css/style.css">    

</head>

<body>
    
<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="">
        Cadastro
    </a>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?= $raiz ?>/cadastro">Cadastrar</a>
        </li>

    </ul>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?= $raiz ?>/listagem">Listar</a>
        </li>
        
    </ul>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?= $raiz ?>/login/">Sair</a>
        </li>
        
    </ul>
    

</nav>
