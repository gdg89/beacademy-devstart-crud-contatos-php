<?php


function login(){
    include 'telas/login.php';
}
function home(){
    include 'telas/home.php';
}
function cadastro(){
    if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $arquivo = fopen('exercicio-crudContatos/dados/contatos.csv','a+');
    
    fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);
    
    }
    include 'telas/cadastro.php';
}
function erro404(){
    include 'telas/404.php';
}

function listar(){
    $contatos = file('exercicio-crudContatos/dados/contatos.csv');
    include 'telas/listar.php';
}
