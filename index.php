<?php

$url = $_SERVER['REQUEST_URI'];//Pega url que usuario accesou
include 'telas/head.php';
include 'telas/menu.php';
include 'acoes.php';

match($url){
   '/'=> home(),
   '/login'=> login(),
   '/cadastro' => cadastro(),
   '/listar' => listar(),
   default => erro404(),
};



include 'telas/footer.php';