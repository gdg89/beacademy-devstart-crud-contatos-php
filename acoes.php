<?php


function login(){
    include 'telas/login.php';
}
function home(){
    include 'telas/home.php';
}
function cadastro(){
    if($_POST){//verifica se ouve $post
    $nome = $_POST['nome'];//recupera dados do input
    $email = $_POST['email'];//recupera dados do input
    $telefone = $_POST['telefone'];// recupera dados do input

    $arquivo = fopen('exercicio-crudContatos/dados/contatos.csv','a+');//Crea/abre arquivo
    
    fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);//sobreescribe arquivo com informações guardadas nas variaves.
    
    }
    include 'telas/cadastro.php';
}
function erro404(){
    include 'telas/404.php';
}

function listar(){
    $contatos = file('exercicio-crudContatos/dados/contatos.csv');//recupera informações do arquivo e armacena na variavel.
    include 'telas/listar.php';
}
