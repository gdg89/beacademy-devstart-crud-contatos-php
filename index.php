<?php

$url =explode('?', $_SERVER['REQUEST_URI']);//Pega url que usuario accesou
include 'telas/head.php';
include 'telas/menu.php';
include 'acoes.php';

match($url[0]){//pega primeira posição do array gerado pelo explode().
   '/'=> home(),
   '/login'=> login(),
   '/cadastro' => cadastro(),
   '/listar' => listar(),
   '/excluir' => excluir(),
   default => erro404(),
};



include 'telas/footer.php';