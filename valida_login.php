<?php

session_start();
$_SESSION['x'] = 'oi, sou valor de sessao';

print_r($_SESSION);

//variavel que verifica se a autenticacao foi realizada
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

// array criado para checar se o 'perfil-id' eh igual a perfis
$perfis = array(1 => 'Administrativo', 2 => 'Usuario');

//usuarios do sistema
//de modo hardcore apenas para entender a logica
$usuarios_app = array(
    array('id' => 1, 'email' => 'adm@teste.com', 'senha' => '1234', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'gio@teste.com', 'senha' => '1234', 'perfil_id' => 2),
    array('id' => 3, 'email' => 'joao@teste.com', 'senha' => '1234', 'perfil_id' => 2),
    array('id' => 4, 'email' => 'du@teste.com', 'senha' => '1234', 'perfil_id' => 2),
);

foreach ($usuarios_app as $user) {
    /*echo '<br>';
    echo 'Usuario app: ' . $user['email'] . '/' . $user['senha'];
    echo '<br>';
    echo 'Usuario form: ' . $_POST['email'] . '/' . $_POST['senha'];
*/
    if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id']; // caso seja adm, isso sera 1
    };

    if ($usuario_autenticado) {
        $_SESSION['autenticado'] = 'sim'; //header('Location: home.php');
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
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