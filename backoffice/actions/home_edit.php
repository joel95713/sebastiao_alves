<?php

require("../../helpers/requisitos.php");

if (!verificarLogin()) {
  header("Location: index.php");
  exit();
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verifica se as chaves do formulário existem no array $_POST
  if (isset($_POST["imagem_bem_vindo"], $_POST["texto_ultimos_livros"])) {
    // Preenche as variáveis com os dados do formulário
    $imagem_bem_vindo = $_POST["imagem_bem_vindo"];
    $texto_ultimos_livros = $_POST["texto_ultimos_livros"];
    $id = 1;
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");
    $UpdatedBy = $_SESSION["usuario"]["id"] . " - " . $_SESSION["usuario"]["nome"];

    iduSQL("UPDATE home SET imagem_bem_vindo = '$imagem_bem_vindo', texto_ultimos_livros = '$texto_ultimos_livros', UpdatedOn = '$data_atual',  UpdatedBy = '$UpdatedBy' WHERE id = $id");

    // Redireciona para a página de listagem de livros após a edição
     header("Location: http://localhost/sebastiao_alves/backoffice/index.php?pagina=home");
    exit();
    }
  }

?>