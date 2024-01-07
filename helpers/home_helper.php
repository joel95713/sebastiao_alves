<?php 

function getImageHome(){
  $resultado = selectSQLUnico("SELECT imagem_bem_vindo FROM home WHERE id=1");
  return $resultado["imagem_bem_vindo"];
}

function getTextoUltimosLivrosHome()
{
  $resultado = selectSQLUnico("SELECT texto_ultimos_livros FROM home WHERE id=1");
  return $resultado["texto_ultimos_livros"];
}

function getObservacaoHome()
{
  $resultado = selectSQLUnico("SELECT texto_ultimos_livros FROM home WHERE id=1");
  return $resultado["texto_ultimos_livros"];
}



?>