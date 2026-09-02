<?php

//Usuario.php
class Usuario {
    public $nomeUsuario;
    public $logado = false;

    public function __construct($nomeUsuario) {
        $this->nomeUsuario = $nomeUsuario;
    }

    public function autenticar () {
        $this->logado = true;
    }
}
