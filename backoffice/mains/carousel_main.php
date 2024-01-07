<?php

$carousels = selectSQL("SELECT * FROM carousel");

?>

<script>
  function confirmarExclusao(carouselId) {
    if (confirm('Deseja mesmo apagar a Notícia com o ID (' + carouselId + ')?')) {
      window.location.href = 'actions/carousel/carousel_delete.php?deletar=' + carouselId;
    }
  }
</script>


<main class="container my-5 p-5 rounded-5">

  <div class="row">
    <div class="col-12">
      <h5 class="bg-dark bg-gradient p-2 text-center text-light text-uppercase">Carousel</h5>
    </div>
  </div>
  <div class="row mt-5 text-center ">
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Imagem Desktop</th>
          <th scope="col">Imagem Mobile</th>
          <th scope="col">Observação</th>
          <th scope="col">Titulo</th>
          <th scope="col">Texto</th>
          <th scope="col">Data de Atualização</th>
          <th scope="col">Atualizado por</th>
          <th scope="col">Acções</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($carousels as $carousel) : ?>
          <tr>
            <th scope="row"><?php echo $carousel['id']; ?></th>
            <td><img class="w-50" src="<?php echo $carousel['imagem_desktop']; ?>" alt="Imagem"></td>
            <td><img class="w-50" src="<?php echo $carousel['imagem_mobile']; ?>" alt="Imagem"></td>
            <td><?php echo $carousel['observacao']; ?></td>
            <td><?php echo $carousel['titulo']; ?></td>
            <td><?php echo substr($carousel['texto'], 0, 40); ?> ...</td>
            <td><?php echo $carousel['UpdatedOn']; ?></td>
            <td><?php echo $carousel['UpdatedBy']; ?></td>
            <td>
              <a href="actions\carousel\carousel_center.php?editar=<?php echo $carousel['id']; ?>"><button class="bg-warning border-0" type="button">Editar</button></a>
            <td>
              <a href="javascript:void(0);" onclick="confirmarExclusao(<?php echo $carousel['id']; ?>)"><button class="bg-danger border-0" type="button">Excluir</button></a>
            </td>

            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a class="text-center" href="actions\carousel\carousel_center.php"><button type="button" class="btn btn-dark rounded-0 p-2 px-4">Criar Carousel </button></a>
  </div>

</main>