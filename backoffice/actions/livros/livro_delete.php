<?php

require("../../../helpers/requisitos.php");

if (!verificarLogin()) {
  header("Location: index.php");
  exit();
}

if (isset($_GET['deletar'])) {
  $livro_id = $_GET['deletar'];

  // Consulta para obter os detalhes do livro pelo ID
  $livro = selectSQL("SELECT * FROM livro WHERE id = $livro_id");

  // Verifica se o livro existe
  if (!$livro) {
    echo "Livro não encontrado.";
    exit();
  }

  iduSQL("DELETE FROM livro WHERE id = $livro_id");
  header("Location: http://localhost/sebastiao_alves/backoffice/index.php?pagina=livros");
  exit();
} else {
  echo "ID de livro não fornecido.";
  exit();
}

?>