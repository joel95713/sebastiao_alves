<?php

require("../../helpers/requisitos.php");

if (!verificarLogin()) {
  header("Location: index.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Verifica se o formulário foi enviado

  // Obtém os dados do formulário
  $destaqueID = $_POST['destaque_id'];
  $observacao = $_POST['observacoes'];
  $livroSelecionado = $_POST['livro_selecionado'];

  // Atualiza a tabela destaques no banco de dados
  iduSQL("UPDATE destaques SET observacao = '$observacao', id_livros = '$livroSelecionado' WHERE id = '$destaqueID'");

  // Redireciona para evitar reenviar o formulário ao atualizar a página
  header("Location: http://localhost/sebastiao_alves/backoffice/index.php?pagina=home");
  exit;
}

?>