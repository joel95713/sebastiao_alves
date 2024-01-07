<?php

function getDestaquesComDetalhes()
{
  $destaques = selectSQL("SELECT d.*, l.titulo, l.imagem, l.texto FROM destaques d INNER JOIN livro l ON d.id_livros = l.id");

  return $destaques;
}

// Função para ordenar os livros do select
function compareTitles($a, $b)
{
  return strcmp($a['titulo'], $b['titulo']);
}


?>