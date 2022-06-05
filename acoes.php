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

        fclose($arquivo);//fecha arquivo

        $mensagem ='Pronto,cadastro realizado';//gera mensagem
        
        include 'telas/mensagem.php';//imprime mensagem na tela.
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

function excluir(){
    $id =$_GET['id'];//recupera indice do elemento que queremos excluir.
    
    $contatos=file('exercicio-crudContatos/dados/contatos.csv');//recuperar contatos.

    unset($contatos[$id]);//elimina posição do

    unlink('exercicio-crudContatos/dados/contatos.csv');//elemina todo o arquivo.

    $arquivo =fopen('exercicio-crudContatos/dados/contatos.csv', 'a+');//recreando o arquivo.

    foreach($contatos as $cadaContato){//Pega cada contato restante do arquivo.
        fwrite($arquivo, $cadaContato);//rescribe $cadaContato dentro do $arquivo.
    }
    $mensagem = 'Pronto, contato excluido';
    include 'telas/mensagem.php';//imprime mensagem na tela.
}

function editar(){
    $id =$_GET['id'];//recupera indice do elemento que queremos editar.
    $contatos = file('exercicio-crudContatos/dados/contatos.csv');//recuperar contatos.
    
    if($_POST){
        $nome = $_POST['nome'];//recupera dados do input
        $email = $_POST['email'];//recupera dados do input
        $telefone = $_POST['telefone'];// recupera dados do input

        $contatos[$id] = "{$nome};{$email};{$telefone}".PHP_EOL;

        unlink('exercicio-crudContatos/dados/contatos.csv');//elemina todo o arquivo.


        $arquivo = fopen('exercicio-crudContatos/dados/contatos.csv','a+');//Crea/abre arquivo

        foreach($contatos as $cadaContato){//Pega cada contato restante do arquivo.
            fwrite($arquivo, $cadaContato);//rescribe $cadaContato dentro do $arquivo.
        }
        fclose($arquivo);
        $mensagem = 'Pronto, contato atualizado';
        include 'telas/mensagem.php';
    }
    

    $dados = explode(';', $contatos[$id]);//qubra da linha de contato a editar
   include 'telas/editar.php';
}
