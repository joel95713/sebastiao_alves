<?php 

function getMorada(){
  $resultado = selectSQLUnico("SELECT morada FROM contactos WHERE id=1");
  return $resultado["morada"];
}

function getTelefone()
{
  $resultado = selectSQLUnico("SELECT telefone FROM contactos WHERE id=1");
  return $resultado["telefone"];
}

function getEmail()
{
  $resultado = selectSQLUnico("SELECT email FROM contactos WHERE id=1");
  return $resultado["email"];
}

function getHorario()
{
  $resultado = selectSQLUnico("SELECT horario FROM contactos WHERE id=1");
  return $resultado["horario"];
}

function getInstagram()
{
  $resultado = selectSQLUnico("SELECT instagram FROM contactos WHERE id=1");
  return $resultado["instagram"];
}

function getFacebook()
{
  $resultado = selectSQLUnico("SELECT facebook FROM contactos WHERE id=1");
  return $resultado["facebook"];
}

function getLinkedin()
{
  $resultado = selectSQLUnico("SELECT linkedin FROM contactos WHERE id=1");
  return $resultado["linkedin"];
}


?>


