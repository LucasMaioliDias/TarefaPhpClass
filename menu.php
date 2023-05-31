<?php 

session_start();

if(!isset($_SESSION['usuario'])){
    header('Location:tela.php?erro=true');
    exit;
}

echo '<h1>Parabéns! Login efetuado com sucesso</h1>';
