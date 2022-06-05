<?php


function login(){
    include 'telas/login.php';
}
function home(){
    include 'telas/home.php';
}
function cadastro(){
    include 'telas/cadastro.php';
}
function erro404(){
    include 'telas/404.php';
}

function listar(){
    $contatos = file('exercicio-crudContatos/dados/contatos.csv');
    include 'telas/listar.php';
}
