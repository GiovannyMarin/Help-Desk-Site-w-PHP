<?php

//usuarios do sistema
//de modo hardcore apenas para entender a logica
$usuarios_app = array(
    array('email' => 'adm@teste.com', 'senha' => '123456'),
    array('email' => 'gio@teste.com', 'senha' => '123456'),
);



print_r($_POST);


echo '<br>';
echo $_POST['email'];
echo '<br>';
echo $_POST['senha'];

//$_GET eh uma variavel global do sistema, que pega o metodo GET enviado, serve como array
// pegando o valor dentro de "name" enviado na requisicao

/*
print_r($_GET);
echo '<br>';

echo $_GET['email'];
echo '<br>';
echo $_GET['senha'];
echo '<br>';
*/


?><!--''