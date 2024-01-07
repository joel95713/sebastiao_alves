<script>
    document.addEventListener("DOMContentLoaded", function() {
      // Oculta a div textoCompleto inicialmente
      document.getElementById("textoCompleto").style.display = "none";
    });
</script>

<main class="mb-5">

  <!-- 2º Cabeçalho -->
  <div id="caixa_branca" class="container-fluid">
    <div class="bg-white justify-content-between mb-3 mt-n5 offset-md-1 pb-2 position-relative pt-5 row shadow z-3">
      <h4 class="active col-9 menu ative ms-3 ms-md-5 mt-4 mt-md-0">AUTOR</h4>
      <h3 class="t1 col-9 ms-3 ms-md-5">SOBRE MIM</h3>
    </div>
  </div>
  <!-- Fim do 2º Cabeçalho -->

  <div class="col-11 container-fluid p-5">
    <div class="row ">
      <div class="text-center">
        <img class="p-4 p-md-0 w-75" src="<?php echo getImageAutor(); ?>" alt="fotoperfil" />
      </div>
      <div id="textoincompleto" class="p col-10 m-auto mt-5">
        <?php echo substr(getTextoAutorHome(), 0, 1000); ?> ...
      </div>
      <div id="textoCompleto" class="p col-10 m-auto mt-5">
        <?php echo getTextoAutorHome(); ?>
      </div>

      <div class="col-md-10 m-auto text-center mb-5">
        <button id="vermais" onclick="mostrarTextoCompleto()" class="botao-vermais"></button>
      </div>

    </div>
    <div class="col-md-10 m-auto text-center mt-5">
      <button class="botao-voltar" onclick="voltarAtras()"></button>
    </div>
  </div>
</main>