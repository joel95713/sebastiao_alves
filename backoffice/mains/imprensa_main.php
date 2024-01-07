<?php

$resultado = selectSQLUnico("SELECT Count(id) as total FROM imprensa");

$page = isset($_GET["page"]) ? intval($_GET["page"]) : 1;
$elementos_por_page = 4;

if ($elementos_por_page <= 0) {
  $elementos_por_page = 1;
}

$total_elementos = intval($resultado["total"]);
$total_pages = ceil($total_elementos / $elementos_por_page);
$total_botoes = 2;

if ($page < 1) {
  $page = 1;
} elseif ($page > $total_pages) {
  $page = $total_pages;
}

$elementos_a_ignorar = ($page - 1) * $elementos_por_page;
$imprensas = selectSQL("SELECT * FROM imprensa ORDER BY data_noticia DESC LIMIT $elementos_por_page OFFSET $elementos_a_ignorar");
?>

<script>
  function confirmarExclusao(ImprensaId) {
    if (confirm('Deseja mesmo apagar a Notícia com o ID (' + ImprensaId + ')?')) {
      window.location.href = 'actions/imprensa/imprensa_delete.php?deletar=' + ImprensaId;
    }
  }
</script>

<main class="container my-5 p-5 rounded-5">

  <div class="row">
    <div class="col-12">
      <h5 class="bg-dark bg-gradient p-2 text-center text-light text-uppercase">Imprensa</h5>
    </div>
  </div>
  <div class="row mt-5 text-center ">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Imagem</th>
          <th scope="col">Título</th>
          <th scope="col">Observação</th>
          <th scope="col">Data Notícia</th>
          <th scope="col">Ultima Atualização</th>
          <th scope="col">Atualizado por</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($imprensas as $imprensa) : ?>
          <tr>
            <th scope="row"><?php echo $imprensa['id']; ?></th>
            <td><img class="w-50" src="<?php echo $imprensa['imagem']; ?>" alt="Imagem"></td>
            <td><?php echo $imprensa['titulo']; ?></td>
            <td><?php echo substr($imprensa['texto'], 0, 200); ?></td>
            <td><?php echo $imprensa['data_noticia']; ?></td>
            <td><?php echo $imprensa['UpdatedOn']; ?></td>
            <td><?php echo $imprensa['UpdatedBy']; ?></td>
            <td>
              <a href="actions\imprensa\imprensa_center.php?editar=<?php echo $imprensa['id']; ?>"><button class="bg-warning border-0" type="button">Editar</button></a>
            <td>
              <a href="javascript:void(0);" onclick="confirmarExclusao(<?php echo $imprensa['id']; ?>)"><button class="bg-danger border-0" type="button">Excluir</button></a>
            </td>

            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a class="text-center" href="actions\imprensa\imprensa_center.php"><button type="button" class="btn btn-dark rounded-0 p-2 px-4">Criar Nova Notícia </button></a>
  </div>

  <!-- paginação -->
  <div>
    <div class="container mt-5">
      <div class="row text-center">
        <div class="col-auto d-flex flex-columns flex-nowrap mx-auto">

          <form action="">
            <input type="hidden" name="pagina" value="imprensa">

            <?php if ($page > 1) : ?>
              <button class="btn btn-dark rounded-0 p-2" name="page" value="<?= ($page > 1) ? 1 : $page; ?>">
                &lt;&lt;
              </button>
            <?php endif; ?>

            <?php if ($page - $total_botoes > 1) : ?>
              <?php for ($i = $page - $total_botoes; $i < $page; $i++) : ?>
                <button class="btn btn-dark rounded-0 p-2" name="page" value="<?= $i; ?>"><?= $i; ?></button>
              <?php endfor; ?>
            <?php else : ?>
              <?php for ($i = 1; $i < $page; $i++) : ?>
                <button class="btn btn-dark rounded-0 p-2" name="page" value="<?= $i; ?>"><?= $i; ?></button>
              <?php endfor; ?>
            <?php endif; ?>

            <button class="btn btn-dark rounded-0 p-2 active" name="page" value="<?= $page; ?>">
              <?= $page; ?>
            </button>

            <?php if ($page + $total_botoes < $total_pages) : ?>
              <?php for ($i = $page + 1; $i <= $page + $total_botoes; $i++) : ?>
                <button class="btn btn-dark rounded-0 p-2" name="page" value="<?= $i; ?>"><?= $i; ?></button>
              <?php endfor; ?>
            <?php else : ?>
              <?php for ($i = $page + 1; $i <= $total_pages; $i++) : ?>
                <button class="btn btn-dark rounded-0 p-2" name="page" value="<?= $i; ?>"><?= $i; ?></button>
              <?php endfor; ?>
            <?php endif; ?>

            <?php if ($page < $total_pages) : ?>
              <button class="btn btn-dark rounded-0 p-2" name="page" value="<?= $total_pages; ?>">>
                >
              </button>
            <?php endif; ?>
          </form>

        </div>
      </div>
    </div>

  </div>
  <!-- Fim da paginação -->

</main>