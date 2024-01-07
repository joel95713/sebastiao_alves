<?php

function getImageAutor()
{
  $resultado = selectSQLUnico("SELECT imagem FROM autor WHERE id=1");
  return $resultado["imagem"];
}

function getTextoAutorHome()
{
  $resultado = selectSQLUnico("SELECT texto FROM autor WHERE id=1");
  return $resultado["texto"];
}
