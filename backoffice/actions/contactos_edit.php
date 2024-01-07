<?php

require("../../helpers/requisitos.php");

if (!verificarLogin()) {
  header("Location: index.php");
  exit();
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verifica se as chaves do formulário existem no array $_POST
  if (isset($_POST["morada"], $_POST["telefone"], $_POST["email"], $_POST["horario"])) {
    // Preenche as variáveis com os dados do formulário
    $morada = $_POST["morada"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $horario = $_POST["horario"];
    $id = 1;
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");
    $UpdatedBy = $_SESSION["usuario"]["id"] . " - " . $_SESSION["usuario"]["nome"];

    iduSQL("UPDATE contactos SET morada = '$morada', telefone = '$telefone', email = '$email', horario = '$horario', UpdatedOn = '$data_atual',  UpdatedBy = '$UpdatedBy' WHERE id = $id");

  
    header("Location: ../index.php?pagina=contactos");
    exit();
  }
}
