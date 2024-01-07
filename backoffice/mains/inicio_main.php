<?php

$backoffice = selectSQLUnico("SELECT * FROM colaboradores WHERE id=1");

?>

<main class="text-center mt-5">

  <div class="bg-dark bg-gradient caixa m-auto my-5 p-4 rounded-4 shadow w-50">
    <h5 class="text-light">Bem vindo(a) <?php echo $_SESSION["usuario"]["nome"]; ?> <?php echo $_SESSION["usuario"]["apelido"]; ?></h5>
      <h6 class="text-light">Seu último acesso foi em: <?php echo $_SESSION["usuario"]["data_ultimo_acesso"]; ?> </h6>
  </div>

</main>