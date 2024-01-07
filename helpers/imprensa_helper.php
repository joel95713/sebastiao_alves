<?php

function getTituloImprensa($id){
  $resultado = selectSQLUnico("SELECT titulo FROM imprensa WHERE id=$id");
  return $resultado["titulo"];
}

function getDataImprensa($id){
  $resultado = selectSQLUnico("SELECT data_noticia FROM imprensa WHERE id=$id");

  setlocale(LC_TIME, 'pt_PT', 'pt_PT.utf-8', 'pt_PT.utf-8', 'portuguese');
  date_default_timezone_set('Europe/Lisbon');
  return   strftime('%d de %B de %Y', strtotime(($resultado["data_noticia"])));

}


function getTextoImprensa($id){
  $resultado = selectSQLUnico("SELECT texto FROM imprensa WHERE id=$id");
  return $resultado["texto"];
}

function getImagemImprensa($id)
{
  $resultado = selectSQLUnico("SELECT imagem FROM imprensa WHERE id=$id");
  return $resultado["imagem"];
}

?>