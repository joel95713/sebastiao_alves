<?php

function getTitulosCarousel()
{
  $titulos = array(); // Inicializa um array para armazenar os títulos
  $resultados = selectSQL("SELECT titulo FROM carousel");
  // Verifica se há resultados
  if ($resultados) {
    foreach ($resultados as $resultado) {
      // Verifica se o resultado é válido antes de adicioná-lo ao array
      if (isset($resultado["titulo"])) {
        $titulos[] = $resultado["titulo"];
      }
    }
  }

  return $titulos;
}

function getObservacaoCarousel()
{
  $observacao = array(); // Inicializa um array para armazenar os títulos
  $resultados = selectSQL("SELECT observacao FROM carousel");
  // Verifica se há resultados
  if ($resultados) {
    foreach ($resultados as $resultado) {
      // Verifica se o resultado é válido antes de adicioná-lo ao array
      if (isset($resultado["observacao"])) {
        $observacao[] = $resultado["observacao"];
      }
    }
  }

  return $observacao;
}

function getTextosCarousel()
{
  $textos = array();
  $resultados = selectSQL("SELECT texto FROM carousel");

  if ($resultados) {
    foreach ($resultados as $resultado) {
      if (isset($resultado["texto"])) {
        $textos[] = $resultado["texto"];
      }
    }
  }

  return $textos;
}

function getImagensDesktopCarousel()
{
  $imagensDesktop = array();
  $resultados = selectSQL("SELECT imagem_desktop FROM carousel");

  if ($resultados) {
    foreach ($resultados as $resultado) {
      if (isset($resultado["imagem_desktop"])) {
        $imagensDesktop[] = $resultado["imagem_desktop"];
      }
    }
  }

  return $imagensDesktop;
}

function getImagensMobileCarousel()
{
  $imagensMobile = array();
  $resultados = selectSQL("SELECT imagem_mobile FROM carousel");

  if ($resultados) {
    foreach ($resultados as $resultado) {
      if (isset($resultado["imagem_mobile"])) {
        $imagensMobile[] = $resultado["imagem_mobile"];
      }
    }
  }

  return $imagensMobile;
}

function getLinksSaberMaisCarousel()
{
  $linksSaberMais = array();
  $resultados = selectSQL("SELECT link_saber_mais FROM carousel");

  if ($resultados) {
    foreach ($resultados as $resultado) {
      if (isset($resultado["link_saber_mais"])) {
        $linksSaberMais[] = $resultado["link_saber_mais"];
      }
    }
  }
  
  return $linksSaberMais;
}


?>