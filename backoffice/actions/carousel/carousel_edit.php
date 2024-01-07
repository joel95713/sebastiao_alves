<?php

require("../../../helpers/requisitos.php");

if (!verificarLogin()) {
  header("Location: index.php");
  exit();
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verifica se as chaves do formulário existem no array $_POST  
  if (isset($_POST["titulo"], $_POST["texto_carousel"], $_POST["observacao"], $_POST["imagem_desktop"], $_POST["imagem_mobile"], $_POST["link_saber_mais"])) {
    // Preenche as variáveis com os dados do formulário
    $titulo = $_POST["titulo"];
    $texto = $_POST["texto_carousel"];
    $observacao = $_POST["observacao"];
    $imagem_desktop = $_POST["imagem_desktop"];
    $imagem_mobile = $_POST["imagem_mobile"];
    $link_saber_mais = $_POST["link_saber_mais"];
    date_default_timezone_set("Europe/Lisbon");
    $data_atual = date("H:i:s - d/m/Y");
    $UpdatedBy = $_SESSION["usuario"]["id"] . " - " . $_SESSION["usuario"]["nome"];

    // Verifica se estamos editando
    if (isset($_POST["editar_id"])) {
      $editar_id = $_POST["editar_id"];
      // Atualiza os dados do carousel
      iduSQL("UPDATE carousel SET titulo = '$titulo', texto = '$texto', observacao = '$observacao', imagem_desktop = '$imagem_desktop',  imagem_mobile = '$imagem_mobile', UpdatedOn = '$data_atual',  UpdatedBy = '$UpdatedBy', link_saber_mais = '$link_saber_mais' WHERE id = $editar_id");


      // Redireciona para a página de listagem de carousels após a edição
      header("Location: http://localhost/sebastiao_alves/backoffice/index.php?pagina=carousel");
      exit();
    }
  }
}

?>