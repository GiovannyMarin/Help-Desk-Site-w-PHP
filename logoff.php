<?php

session_start();



header('Location: index.php');

session_destroy();

//dando logoff
//remover indice do array de sessao
//unset() - espera um array e um indice (remover indice de array)

//destruir a variavel de sessao
//session_destroy() - remove todos os indices dentro da super global session

?><!-->