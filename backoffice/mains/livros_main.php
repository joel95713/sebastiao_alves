<?php

$resultado = selectSQLUnico("SELECT Count(id) as total FROM livro");

$page = 1;
$elementos_por_page = 4;

if ($elementos_por_page <= 0) {
  $elementos_por_page = 1;
}
$total_elementos = intval($resultado["total"] - 1);
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
$livros = selectSQL("SELECT * FROM livro ORDER BY id ASC LIMIT $elementos_por_page OFFSET $elementos_a_ignorar");

?>

<script>
  function confirmarExclusao(livroId) {
    if (confirm('Deseja mesmo apagar o Livro (' + livroId + ')?')) {
      window.location.href = 'actions/livros/livro_delete.php?deletar=' + livroId;
    }
  }
</script>

<main class="container my-5 p-5 rounded-5">

  <div class="row">
    <div class="col-12">
      <h5 class="bg-dark bg-gradient p-2 text-center text-light text-uppercase">Livros</h5>
    </div>
  </div>

  <div class="row mt-5 ">

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Imagem</th>
          <th scope="col">Título</th>
          <th scope="col">Texto</th>
          <th scope="col">Ultima Atualização</th>
          <th scope="col">Atualizado por</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($livros as $livro) : ?>
          <?php if (!empty($livro['titulo'])) : ?>
            <tr>
              <th scope="row"><?php echo $livro['id']; ?></th>
              <td><img class="w-50" src="<?php echo $livro['imagem']; ?>" alt="Imagem"></td>
              <td><?php echo $livro['titulo']; ?></td>
              <td><?php echo substr($livro['texto'], 0, 200); ?></td>
              <td><?php echo $livro['UpdatedOn']; ?></td>
              <td><?php echo $livro['UpdatedBy']; ?></td>
              <td>
                <a href="actions\livros\livro_center.php?editar=<?php echo $livro['id']; ?>"><button class="bg-warning border-0" type="button">Editar</button></a>
              </td>
              <td>
                <a href="javascript:void(0);" onclick="confirmarExclusao(<?php echo $livro['id']; ?>)"><button class="bg-danger border-0" type="button">Excluir</button></a>
              </td>
            </tr>
          <?php endif; ?>
        <?php endforeach; ?>
      </tbody>

    </table>
    <a class="text-center" href="actions\livros\livro_center.php"><button type="button" class="btn btn-dark rounded-0 p-2 px-4">Criar Novo Livro </button></a>

  </div>

  <!-- paginação -->
  <div>
    <div class="container mt-5">
      <div class="row text-center">
        <div class="col-auto d-flex flex-columns flex-nowrap mx-auto">

          <form action="">
            <input type="hidden" name="pagina" value="livros">
            <button class="btn btn-dark rounded-0 p-2" name="page" value="<?= ($page == 1) ? 1 : ($page - 1); ?>">
              &lt;&lt;
            </button>

            <?php if ($page - $total_botoes > 1) : ?>

              ...
              <?php for ($i = $page - $total_botoes; $i < $page; $i++) : ?>
                <button class="btn btn-dark rounded-0 p-2" name="page" value="<?= $i; ?>"><?= $i; ?></button>
              <?php endfor; ?>

            <?php else : ?>

              <?php for ($i = 1; $i < $page; $i++) : ?>
                <button class="btn btn-dark rounded-0 p-2" name="page" value="<?= $i; ?>"><?= $i; ?></button>
              <?php endfor; ?>

            <?php endif; ?>

            <button class="btn btn-dark rounded-0 p-2" name="page" value="<?= $page; ?>" class="active"><?= $page; ?></button>

            <?php if ($page + $total_botoes < $total_pages) : ?>

              <?php for ($i = $page + 1; $i <= $page + $total_botoes; $i++) : ?>
                <button class="btn btn-dark rounded-0 p-2" name="page" value="<?= $i; ?>"><?= $i; ?></button>
              <?php endfor; ?>
              ...

            <?php else : ?>

              <?php for ($i = $page + 1; $i <= $total_pages; $i++) : ?>
                <button class="btn btn-dark rounded-0 p-2" name="page" value="<?= $i; ?>"><?= $i; ?></button>
              <?php endfor; ?>

            <?php endif; ?>

            <button class="btn btn-dark rounded-0 p-2" name="page" value="<?= ($page == $total_pages) ? $total_pages : ($page + 1); ?>">></button>
          </form>

        </div>
      </div>
    </div>

  </div>
  <!-- Fim da paginação -->

</main>