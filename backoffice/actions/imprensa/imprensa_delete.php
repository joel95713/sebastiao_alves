<?php

require("../../../helpers/requisitos.php");

if (!verificarLogin()) {
  header("Location: index.php");
  exit();
}

if (isset($_GET['deletar'])) {
  $imprensa_id = $_GET['deletar'];

  // Consulta para obter os detalhes do livro pelo ID
  $imprensa = selectSQL("SELECT * FROM imprensa WHERE id = $imprensa_id");

  // Verifica se o livro existe
  if (!$imprensa) {
    echo "Noticia não encontrado.";
    exit();
  }

  iduSQL("DELETE FROM imprensa WHERE id = $imprensa_id");
  header("Location: http://localhost/sebastiao_alves/backoffice/index.php?pagina=imprensa");
  exit();
} else {
  echo "ID da Notícia não fornecido.";
  exit();
}

?>