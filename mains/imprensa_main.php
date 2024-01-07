<?php

$noticias = selectSQL("SELECT * FROM imprensa");
$resultado = selectSQLUnico("SELECT Count(id) as total FROM imprensa");

$page = 1;
$elementos_por_page = 2;

if ($elementos_por_page <= 0) {
  $elementos_por_page = 1;
}

$total_elementos = intval($resultado["total"]);
$total_pages = ceil($total_elementos / $elementos_por_page);
$total_botoes = 2;

$form = isset($_GET["page"]);

if ($form) {
  $page = intval($_GET["page"]);
  if ($page < 1) {
    $page = 1;
  } elseif ($page > $total_pages) {
    $page = $total_pages;
  }
}

$elementos_a_ignorar = ($page - 1) * $elementos_por_page;
$noticias = selectSQL("SELECT * FROM imprensa ORDER BY data_noticia DESC LIMIT $elementos_por_page OFFSET $elementos_a_ignorar");

?>


<main class="mb-5">
  <!-- 2º Cabeçalho -->

  <div id="caixa_branca" class="container-fluid">
    <div class="bg-white justify-content-between mb-3 mt-n5 offset-md-1 pb-2 position-relative pt-5 row shadow z-3">
      <h4 class="active col-9 menu active ms-3 ms-md-5 mt-4 mt-md-0">Imprensa</h4>
      <h3 class="t1 col-9 ms-3 ms-md-5">Últimas Notícias</h3>
    </div>
  </div>

  <!-- Fim do 2º Cabeçalho -->

  <!-- Últimas Notícias -->

  <div class="container-fluid pb-5">
    <?php $contador = 0; ?>
    <?php foreach ($noticias as $noticia) { ?>
      <div class="col-11 col-md-8 justify-content-end m-auto mt-5 row">
        <div class="t1 ms-5 mt-5"><?php echo $noticia['titulo']; ?></div>
        <div class="row imprensa-linha-titulo" style="margin-top: 12px; margin-bottom: 12px;"></div>
        <div class="my-3 text-end data-publicacao">
          Publicado a <?php echo getDataImprensa($noticia['id']); ?>
        </div>
      </div>
      <div class="col-11 col-md-8 justify-content-end m-auto row">
        <img class="mt-4" src="<?php echo getImagemImprensa($noticia['id']); ?>" alt="">
      </div>
      <div class="p col-10 col-md-8 justify-content-end m-auto mt-5 row">
        <?php echo getTextoImprensa($noticia['id']); ?>
      </div>
      <?php if ($contador === 0) { ?>
        <div class="container-fluid imprensa-linha mb-5"></div>
      <?php } ?>
      <?php $contador++; ?>
    <?php } ?>
  </div>


  <!-- Fim das Últimas Notícias -->

  <!-- paginação -->
  <div>
    <div class="container mt-5">
      <div class="row text-center">
        <div class="col-auto d-flex flex-columns flex-nowrap mx-auto">

          <form action="">
            <input type="hidden" name="pagina" value="imprensa">

            <?php if ($page > 1) : ?>
              <a href="index.php?pagina=imprensa&page=<?= ($page > 1) ? 1 : $page; ?>">
                <img src="images/setaesquerda1.svg" alt="seta-esquerda">
              </a>
            <?php endif; ?>

            <?php if ($page - $total_botoes > 1) : ?>
              <!-- ... -->
              <?php for ($i = $page - $total_botoes; $i < $page; $i++) : ?>
                <a class="numeros-paginacao px-3" href="index.php?pagina=imprensa&page=<?= $i; ?>"><?= $i; ?></a>
              <?php endfor; ?>
            <?php else : ?>
              <?php for ($i = 1; $i < $page; $i++) : ?>
                <a class="numeros-paginacao px-3" href="index.php?pagina=imprensa&page=<?= $i; ?>"><?= $i; ?></a>
              <?php endfor; ?>
            <?php endif; ?>

            <a class="numeros-paginacao px-3 active" href="index.php?pagina=imprensa&page=<?= $page; ?>" class="active"><?= $page; ?></a>

            <?php if ($page + $total_botoes < $total_pages) : ?>
              <?php for ($i = $page + 1; $i <= $page + $total_botoes; $i++) : ?>
                <a class="numeros-paginacao px-3" href="index.php?pagina=imprensa&page=<?= $i; ?>"><?= $i; ?></a>
              <?php endfor; ?>

            <?php else : ?>
              <?php for ($i = $page + 1; $i <= $total_pages; $i++) : ?>
                <a class="numeros-paginacao px-3" href="index.php?pagina=imprensa&page=<?= $i; ?>"><?= $i; ?></a>
              <?php endfor; ?>
            <?php endif; ?>

            <?php if ($page < $total_pages) : ?>
              <a href="index.php?pagina=imprensa&page=<?= $total_pages; ?>">
                <img src="images/setadireita1.svg" alt="seta-direita">
              </a>

            <?php endif; ?>


          </form>


        </div>
      </div>
    </div>

  </div>
  <!-- Fim da paginação -->


</main>