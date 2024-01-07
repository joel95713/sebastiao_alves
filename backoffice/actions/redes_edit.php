<?php

require("../../helpers/requisitos.php");

if (!verificarLogin()) {
  header("Location: index.php");
  exit();
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verifica se as chaves do formulário existem no array $_POST
  if (isset($_POST["instagram"], $_POST["facebook"], $_POST["linkedin"])) {
    // Preenche as variáveis com os dados do formulário
    $instagram = $_POST["instagram"];
    $facebook = $_POST["facebook"];
    $linkedin = $_POST["linkedin"];
    $id = 1;
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");
    $UpdatedBy = $_SESSION["usuario"]["id"] . " - " . $_SESSION["usuario"]["nome"];

    iduSQL("UPDATE contactos SET instagram = '$instagram', facebook = '$facebook', linkedin = '$linkedin', UpdatedOn = '$data_atual',  UpdatedBy = '$UpdatedBy' WHERE id = $id");

    // Redireciona para a página de listagem de livros após a edição
    header("Location: http://localhost/sebastiao_alves/backoffice/index.php?pagina=redes");
    exit();
  }
}
