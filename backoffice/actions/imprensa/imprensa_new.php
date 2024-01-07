<?php

require("../../../helpers/requisitos.php");

if (!verificarLogin()) {
  header("Location: index.php");
  exit();
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verifica se as chaves do formulário existem no array $_POST
  if (isset($_POST["titulo"], $_POST["texto"], $_POST["imagem"])) {
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $imagem = $_POST["imagem"];
    $data_noticia = $_POST["data_noticia"]; 
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");
    $CreatedBy =  $_SESSION["usuario"]["id"] . " - " . $_SESSION["usuario"]["nome"];
    $UpdatedBy =  $_SESSION["usuario"]["id"] . " - " . $_SESSION["usuario"]["nome"];


    iduSQL("INSERT imprensa SET titulo = '$titulo', texto = '$texto', imagem = '$imagem', CreatedOn = '$data_atual', CreatedBy = '$CreatedBy', UpdatedOn = '$data_atual', UpdatedBy = '$UpdatedBy', data_noticia = '$data_noticia'");

    // Redireciona para a página de listagem de Notícias após a criação
    header("Location: http://localhost/sebastiao_alves/backoffice/index.php?pagina=imprensa");
    exit();
  }
} else {
  // Se as chaves não existirem, você pode tratar esse caso conforme necessário
  echo "Formulário inválido";
}
