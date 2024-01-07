<?php


function getTituloLivro($id)
{
  $resultado = selectSQLUnico("SELECT titulo FROM livro WHERE id=$id");
  return $resultado["titulo"];
}

function getTextoLivro($id)
{
  $resultado = selectSQLUnico("SELECT texto FROM livro WHERE id=$id");
  return $resultado["texto"];
}

function getTextoAbreviadoLivro($id)
{
  $texto = substr(getTextoLivro($id), 0, 250) . "...";
  return $texto;
}

function getImagemLivro($id)
{
  $resultado = selectSQLUnico("SELECT imagem FROM livro WHERE id=$id");
  return $resultado["imagem"];
}

?>
