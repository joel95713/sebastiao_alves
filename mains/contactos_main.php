<main class="mb-5">
  <!-- 2º Cabeçalho -->
  <div id="caixa_branca" class="container-fluid">
    <div class="bg-white justify-content-between mb-3 mt-n5 offset-md-1 pb-2 position-relative pt-5 row shadow z-3">
      <h4 class="col-9 menu active ms-3 ms-md-5 mt-4 mt-md-0">Contactos</h4>
      <h3 class="t1 col-9 ms-3 ms-md-5">Pode contactar-me através do e-mail ou Telefone</h3>
    </div>
  </div>
  <!-- Fim do 2º Cabeçalho -->

  <!-- Contactos -->
  <div class="container-fluid text-center">
    <div class="col-md-8 flex-column flex-md-row m-auto my-5 row">
      <div class="col">
        <div class="titulo-campo mt-3 text-center">Telefone</div>
        <div><?php echo getTelefone(); ?></div>
      </div>
      <div class="col">
        <div class="titulo-campo mt-3 text-center">Morada</div>
        <div><?php echo getMorada(); ?></div>
      </div>
      <div class="col">
        <div class="titulo-campo mt-3 text-center">Email</div>
        <div><?php echo getEmail(); ?></div>
      </div>
    </div>
    <div class="row horario-linha mx-auto"></div>
    <div class="row">
      <div class="col">
        <div class="titulo-campo mt-3 text-center">Horário</div>
        <div><?php echo getHorario(); ?></div>
      </div>
    </div>
  </div>
  <!-- Fim dos Contactos -->
</main>