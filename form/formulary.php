<?php

if($_SERVER['REQUEST_METHOD'] != 'POST') {
    die ('Acesso negado');
}

if(($_POST['nome'] == '')) {
    echo 'Campo nome inválido';
}

if(($_POST['sobrenome'] == '')) {
    echo '<p>Campo sobrenome inválido';
}

if(($_POST['email'] == '') && ($_POST['senha'] == '')) {
    echo '<p>Campo email e senha inválidos';
}

elseif($_POST['senha'] <= 6) {
    echo '<p>Senha precisa ter no minimo 6 digitos';
}

if(!isset($_POST['sexo'])) {
    echo '<p>Campo sexo em branco';
}

echo 'Cadastro finalizado com sucesso';

?>

<html>
    <p></p>
    <a href="main.php">Voltar</a>
</html>