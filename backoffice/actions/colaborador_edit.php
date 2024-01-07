<?php

require("../../helpers/requisitos.php");

if (!verificarLogin()) {
  header("Location: index.php");
  exit();
}

$usuarioLogado = obterUsuarioLogado();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verifica se as chaves do formulário existem no array $_POST
  if (isset($_POST["nome"], $_POST["apelido"], $_POST["email"])) {
    // Preenche as variáveis com os dados do formulário
    $nome = $_POST["nome"];
    $apelido = $_POST["apelido"];
    $email = $_POST["email"];
  

    iduSQL("UPDATE colaboradores SET nome = '$nome', apelido = '$apelido', email = '$email' WHERE id ='" . $usuarioLogado["id"] . "'");


    header("Location: ../index.php?pagina=colaborador");

    exit();
  }
}

  

?>