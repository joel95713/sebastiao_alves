<?php

function fazerLogin($login, $senha)
{
  $usuario = selectSQLUnico("SELECT * FROM colaboradores WHERE login='$login'");
  if (!empty($usuario)) {

    if (password_verify($senha, $usuario["senha"])) {
      session_start();
      $_SESSION["usuario"] = $usuario;

      date_default_timezone_set("Europe/Lisbon");
      $data_atual = date("H:i:s - d/m/Y");
      $id = $usuario["id"];

      iduSQL("UPDATE colaboradores SET data_ultimo_acesso='$data_atual' WHERE id=$id");
      iduSQL("INSERT INTO acessos (id_colaborador, data) VALUES ('$id', '$data_atual')");

      return $usuario;
    } else {
      return [];
    }
  }

  return [];

}
    
function verificarLogin()
{
  session_start();
  if (!empty($_SESSION["usuario"])) {
    return true;
  } else {
    return false;
  }
}

function logout()
{
  session_start();
  session_destroy();
  header("Location: index.php");
  exit();
}
function obterUsuarioLogado()
{
  if (isset($_SESSION["usuario"])) {
    $usuario = $_SESSION["usuario"];
    if (isset($usuario["id"])) {
      $usuario = selectSQLUnico("SELECT * FROM colaboradores WHERE id ='" . $usuario["id"] . "'");
      return $usuario;
    }
}
}


?>