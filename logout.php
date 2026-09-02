<?php

//logout.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

echo "Dados da sessão antes de encerrar: ";
print_r($_SESSION);

session_unset();
session_destroy();

echo "Sessão encerrada com sucesso!";

// A sessão guarda os dados no servidor e é mais segura, mas some quando o usuário fecha o navegador (ou a sessão expira). 
// Já o cookie guarda os dados no próprio navegador do usuário e continua existindo por mais tempo (até a data de expiração definida), mas é menos seguro, pois fica armazenado do lado do cliente.