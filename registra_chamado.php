<?php

echo '<pre>';
print_r($_POST);
echo '<pre>';

//abrindo um arquivo de texto
//    nome arquivo  parametros de decidir oq fazer com o arquivo
$arquivo = fopen('arquivo.txt', 'a');

#TRATANDO ARQUIVO

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

//podemos usar implode

$texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
// PHP_EOL = end of life (qubera a linha no txt)

#ABRINDO ARQUIVO, EDITANDO E FECHANDO

//referencia do arquivo que abrimos, 
fwrite($arquivo, $texto);

fclose($arquivo);

echo $texto;

header('Location: abrir_chamado.php');
// a - abre o arquivo para escrita
//abrir documentacao para ver o resto dos paramtros
//caso arquivo n exista, sera criado
?><!-->