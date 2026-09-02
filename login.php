<?php

//Exercício 10 - Desafio final: login com sessão, cookie e classe

echo "Exercício 10 - Desafio final: login com sessão, cookie e classe<br>"; 

//login.php
require_once 'Usuario.php'; 
// require_once é mais adequado que include porque, sem essa classe, o login não pode acontecer de jeito nenhum.  
// O "_once" evita que a classe seja carregada mais de uma vez por engano.

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$usuario = new Usuario("Pedro123"); 
$usuario->autenticar();

$_SESSION['nomeUsuario'] = $usuario->nomeUsuario;
setcookie("ultimoAcesso", date("d/m/Y H:i:s"), time() + (86400 * 30)); // Expira em 30 dias

echo "Usuário ". $_SESSION['nomeUsuario'] ." logado com sucesso!<br>";