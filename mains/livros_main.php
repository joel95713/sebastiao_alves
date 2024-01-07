<?php

if (isset($_GET['id'])) {
  $livro_id = $_GET['id'];
} else {
  header('Location: index.php');
  exit();
}
?>


<main class="mb-5">
  <!-- 2º Cabeçalho -->
  <div id="caixa_branca" class="container-fluid">
    <div class="bg-white justify-content-between mb-3 mt-n5 offset-md-1 pb-2 position-relative pt-5 row shadow z-3">
      <h4 class="active col-9 menus ms-3 ms-md-5 mt-4 mt-md-0">Livros</h4>
      <h3 class="T1 col-9 ms-3 ms-md-5"> <?php echo getTituloLivro($livro_id); ?> </h3>
    </div>
  </div>
  <!-- Fim do 2º Cabeçalho -->

  <!-- Livros -->
  <div class="col-11 container-fluid p-md-5">
    <div class="row">
      <div class="col-md-6 text-center">
        <img class="imagemdolivro" src="<?php echo getImagemLivro($livro_id); ?>" alt="imagemdolivro" />
      </div>
      <div class="P col-md-6 mt-5 mt-md-0 ">
        <?php echo getTextoLivro($livro_id); ?>
      </div>
    </div>
    <div class="text-end">
      <a href="index.php" class="botao-voltar w-auto" onclick="voltarAtras()"><button class="botao-voltar"></button></a>
    </div>
  </div>
</main>