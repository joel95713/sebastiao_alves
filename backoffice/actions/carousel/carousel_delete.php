<?php

require("../../../helpers/requisitos.php");

if (!verificarLogin()) {
  header("Location: index.php");
  exit();
}

if (isset($_GET['deletar'])) {
  $carousel_id = $_GET['deletar'];

  // Consulta para obter os detalhes do carousel pelo ID
  $carousel = selectSQL("SELECT * FROM carousel WHERE id = $carousel_id");

  // Verifica se o carousel existe
  if (!$carousel) {
    echo "carousel não encontrado.";
    exit();
  }

  iduSQL("DELETE FROM carousel WHERE id = $carousel_id");
  header("Location: http://localhost/sebastiao_alves/backoffice/index.php?pagina=carousel");
  exit();
} else {
  echo "ID de carousel não fornecido.";
  exit();
}

?>