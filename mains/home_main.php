<?php
$destaques = getDestaquesComDetalhes();
?>
<main class="container-fluid mb-5">

  <!-- Bem-Vindo -->
  <div class="row">
    <div class="col-12 col-lg-11 offset-lg-1 caixa-branca bg-white">
      <div class="row px-4 px-lg-5 py-5">
        <div class="col-12 col-lg-4 py-2 py-xl-4 ps-lg-2 ps-xl-4 text-center">
          <img src="<?php echo getImageHome(); ?>" alt="Autor" />
        </div>
        <div class="col-12 col-lg-8 ps-lg-4 pt-5 pt-lg-2 pt-xl-4">
          <div class="t1">Bem-vindo ao meu site</div>
          <div class="p mt-4">
            <?php echo substr(getTextoAutorHome(), 0, 1000); ?> ...
          </div>
          <a href="index.php?pagina=autor">
            <button class="botao-saber-mais" onclick="mostrarTextoCompleto()"></button>
          </a>

        </div>
      </div>
    </div>
  </div>
  <!-- Fim do Bem-Vindo -->

  <!-- últimos Livros -->
  <div class="row mt-5">
    <div class="col-10 mx-auto t1">Últimos Livros</div>
    <div class="col-10 mx-auto p mt-4">
      <?php echo getTextoUltimosLivrosHome(); ?>
    </div>
  </div>
  <!-- FIM dos  Últimos Livros -->

  <!-- CARDS -->
  <div class="row mt-5 pt-4">
    <div class="col-10 mx-auto d-flex justify-content-center flex-wrap gap-5 p-0">
      <?php foreach ($destaques as $destaque) : ?>
        <?php if ($destaque['titulo'] !== "") : ?>
          <div class="card rounded-0">
            <div class="card-imagem">
              <img src="<?php echo $destaque['imagem']; ?>" class="w-100" alt="Livro" />
            </div>
            <div class="px-4">
              <div class="card-titulo mt-4"><?php echo $destaque['titulo']; ?></div>
              <div class="card-observacao my-2 pt-1"><?php echo $destaque['observacao']; ?></div>
              <div class="card-texto p">
                <?php echo substr($destaque['texto'], 0, 200); ?>
              </div>
              <div class="text-end my-3">
                <form action="index.php" method="GET">
                  <input type="hidden" name="pagina" value="livros">
                  <input type="hidden" name="id" value="<?php echo $destaque['id_livros']; ?>">
                  <button type="submit" class="botao-saber-mais"></button>
                </form>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- FIM DOS CARDS -->


</main>