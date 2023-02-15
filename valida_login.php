<?php

session_start();
$_SESSION['x'] = 'oi, sou valor de sessao';

print_r($_SESSION);

//variavel que verifica se a autenticacao foi realizada
$usuario_autenticado = false;

//usuarios do sistema
//de modo hardcore apenas para entender a logica
$usuarios_app = array(
    array('email' => 'adm@teste.com', 'senha' => '123456'),
    array('email' => 'gio@teste.com', 'senha' => '123456'),
);

foreach ($usuarios_app as $indice => $user) {
    /*echo '<br>';
    echo 'Usuario app: ' . $user['email'] . '/' . $user['senha'];
    echo '<br>';
    echo 'Usuario form: ' . $_POST['email'] . '/' . $_POST['senha'];
*/
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    };

    if ($usuario_autenticado) {
        $_SESSION['autenticado'] = 'sim'; //header('Location: home.php');
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'nao';
        header('Location: index.php?login=erro');
    };
};






/* 
echo '<br>';
echo $_POST['email'];
echo '<br>';
echo $_POST['senha'];
*/

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