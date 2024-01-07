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
    // Preenche as variáveis com os dados do formulário
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $imagem = $_POST["imagem"];
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");
    $UpdatedBy = $_SESSION["usuario"]["id"] . " - " . $_SESSION["usuario"]["nome"];

    // Verifica se estamos editando
    if (isset($_POST["editar_id"])) {
      $editar_id = $_POST["editar_id"];
      // Atualiza os dados do livro
      iduSQL("UPDATE livro SET titulo = '$titulo', texto = '$texto', imagem = '$imagem', UpdatedOn = '$data_atual',  UpdatedBy = '$UpdatedBy' WHERE id = $editar_id");

      // Redireciona para a página de listagem de livros após a edição
      header("Location: http://localhost/sebastiao_alves/backoffice/index.php?pagina=livros");
      exit();
    }
  }
}

?>