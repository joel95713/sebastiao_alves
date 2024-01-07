<script src="js/functions.js"></script>

<?php

// Verifica se um parâmetro 'pagina' foi passado na URL
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

require_once("helpers/requisitos.php");

require("components/header.php");

// Carrega a página correspondente com base no parâmetro 'pagina'
require("mains/{$pagina}_main.php");

require("components/footer.php");


?>