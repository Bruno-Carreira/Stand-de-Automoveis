<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"registrar.php\">Entrar</a></p>");
}


?>