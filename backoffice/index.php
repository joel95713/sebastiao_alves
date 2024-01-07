<?php

// Verifica se um parâmetro 'pagina' foi passado na URL
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'login';

require_once("../helpers/requisitos.php");

// Verifica se a página é "login" antes de incluir o header
if ($pagina !== 'login') {
  require("../backoffice/components/header.php");
}

// Carrega a página correspondente com base no parâmetro 'pagina'
require("../backoffice/mains/{$pagina}_main.php");

// Verifica se a página é "login" antes de incluir o footer
if ($pagina !== 'login') {
  require("../backoffice/components/footer.php");
}

?>