<?php

$usuarioLogado = obterUsuarioLogado();

$id_usuario = $usuarioLogado["id"];
$senha = $usuarioLogado["senha"];
$mensagem = '';


if (isset($_POST["senha_atual"], $_POST["nova_senha"], $_POST["confirmar_senha"])) {

  $senha_atual = $_POST["senha_atual"];
  $nova_senha = $_POST["nova_senha"];
  $confirmar_senha = $_POST["confirmar_senha"];

  if (password_verify($senha_atual, $senha)) {
    // Verifica se a nova senha e a confirmação coincidem
    if ($nova_senha == $confirmar_senha) {

      $id_usuario = $usuarioLogado["id"];

      // Atualiza a senha no banco de dados
      $nova_senhahash = password_hash($nova_senha, PASSWORD_DEFAULT);
      iduSQL("UPDATE colaboradores SET senha='$nova_senhahash' WHERE id=$id_usuario");

      // Mensagem de sucesso
      $mensagem = "Senha alterada com sucesso!";
    } else {
      // Mensagem de erro
      $mensagem = "As senhas não coincidem.";
    }
  } else {
    // Mensagem de erro
    $mensagem = "Senha Atual está errada!";
  }
}
?>

<main class="container my-5 p-5 rounded-5">
  <div class="row">
    <div class="col-12">
      <h5 class="bg-dark bg-gradient p-2 text-center text-light text-uppercase">Alterar Senha</h5>
    </div>
  </div>

  <div class="row mt-5 text-center">
    <div id="exibirAlerta" data-mensagem="<?php echo $mensagem; ?>" style="color: <?php echo $mensagem ? (strpos($mensagem, 'sucesso') !== false ? 'green' : 'red') : ''; ?>"></div>
    <br><br>

    <form action="" method="post" class="col-12">
      <input class="btn btn-light rounded-0 p-2 w-25" type="password" name="senha_atual" placeholder="Senha Atual" required>
      <br><br>

      <input class="btn btn-light rounded-0 p-2 w-25" type="password" name="nova_senha" placeholder="Nova Senha" required>
      <br><br>

      <input class="btn btn-light rounded-0 p-2 w-25" type="password" name="confirmar_senha" placeholder="Digite novamente a nova senha" required>
      <br><br>

      <input class="btn btn-primary rounded-0 p-2 px-4" type="submit" value="Alterar Senha">
    </form>
  </div>

  <div class="text-center mt-5">
    <a href="index.php?pagina=novo_colaborador">
      <button class="btn btn-dark rounded-0 p-2 px-4">Criar novo colaborador</button>
    </a>
  </div>
</main>