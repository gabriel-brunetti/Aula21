<?php
include('./includes/validadores.php');
?>

<?php
// Para exibir conteúdo de variáveis
// echo $qquercoisa; imprime apenas umaa string ou um número - NÃO IMPRIME ARRAY
// var_dump($qualquercoisa);
// print_r($qualquercoisa);
// echo('<pre>');
// print_r($_POST);
// echo ('</pre>');

//criando meu array de erros
$erros = [];


// Verificando se o POST foi enviado
if(count($_POST) == 0){
    $erros[] = 'errPost';
}

// Verificando se login foi preenchido
if(!valida_campoNecessario($_POST['login'])) {
    $erros[] = 'errLogin';
}

// Verificando se email foi preenchido
if(!valida_campoNecessario($_POST['email'])){
    $erros[] = 'errEmail';
}

// Verificando se senha foi preenchida
if(!valida_campoNecessario($_POST['confirmacao'])){
    $erros[] = 'errSenha';
}

// Verificando se senha foi preenchida
if(!valida_campoNecessario($_POST['confirmacao'])){
    $erros[] = 'errConfirmacao';
}

// Verificando se a senha é igual a confirmação da senha
if($_POST['senha'] == !$_POST['confirmacao']){
    $erros[] = 'errSenhaConfirmacao';
}

// Verificando se idade é um numero inteiro
if(!is_integer($_POST['idade']*1)){
    $erros[] = 'errIdade';
}

//validando país
if(! valida_pais($_POST['pais'])){
    die('País inválido');
}

if(count($erros > 0)) {
    //Algum erro aconteceu...
    header('Location: index.php?erros=' . implode(',',$erros));
} else {
    echo('Deu tudo certo!!!');
}
// Para interromper um script:
// die('String antes de morrer....'); [pode passar um parâmetro como string]
// exit 1;
?>