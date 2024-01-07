<?php

$destaques = selectSQL("SELECT d.id, l.id AS livro_id, l.titulo AS livro_titulo, l.imagem AS livro_imagem, d.observacao 
          FROM destaques d
          JOIN livro l ON d.id_livros = l.id");

$livros = selectSQL("SELECT id, titulo FROM livro");

// Ordenar os livros do select
usort($livros, 'compareTitles');

?>

<main class=" container my-5 p-5">

  <div class="row">
    <div class="col-12">
      <h5 class="bg-dark bg-gradient p-2 text-center text-light text-uppercase">Home</h5>
    </div>
  </div>
  <div class="row mt-5 text-center">


    <div>
      <img class="mb-3 " src="<?php echo getImageHome(); ?>" alt="imagem_bem_vindo">
    </div>

    <form action="actions/home_edit.php" method="post" class="col-12">
      <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="imagem_bem_vindo">Link da imagem do bem-vindo</label><br>
      <input class="btn btn-light rounded-0 p-2 w-75" type="text" name="imagem_bem_vindo" value="<?php echo getImageHome(); ?>">
      <br><br>
      <a href="../filemanager/tinyfilemanager.php" target="_blank" onclick="window.open('../filemanager/tinyfilemanager.php'); return false;">
        <button class="btn btn-success rounded-0 p-2 px-4">Procurar Imagem</button>
      </a>
      <br><br>

      <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="texto_ultimos_livros">Texto do campo "Últimos Livros"</label><br>
      <textarea class="btn btn-light rounded-0 p-2 w-75" name="texto_ultimos_livros" id="editor" cols="80" rows="7"><?php echo getTextoUltimosLivrosHome(); ?></textarea>
      <script>
        ClassicEditor
          .create(document.querySelector('#editor'))
          .catch(error => {
            console.error(error);
          });
      </script>

      <br><br>
      <input class="btn btn-primary rounded-0 p-2 px-4" type="submit" value="Gravar">
    </form>
  </div>

  <div class="row mt-5">
    <div class="col-12">
      <h5 class="bg-dark bg-gradient p-2 text-center text-light text-uppercase">Destaques</h3>
    </div>
  </div>
  <div class="row mt-5 text-center">
    <table class="table table-hover ">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Imagem</th>
          <th scope="col">Título do Livro</th>
          <th scope="col">Observação</th>
          <th scope="col">Livro Selecionado</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($destaques as $destaque) : ?>
          <tr>
            <form method="post" action="<?php echo isset($destaque_id) ? 'actions/destaques_edit.php' : 'actions/destaques_edit.php'; ?>">
              <input type="hidden" name="destaque_id" value="<?php echo $destaque['id']; ?>">
              <th scope="row"><?php echo $destaque['id']; ?></th>
              <td><img class="w-25" src="<?php echo $destaque['livro_imagem']; ?>" alt="Imagem"></td>
              <td><?php echo $destaque['livro_titulo']; ?></td>
              <td><input class="btn btn-light rounded-0 p-2 w-75" type="text" name="observacoes" value="<?php echo $destaque['observacao']; ?>"></td>
              <td>
                <select class="btn btn-light rounded-0 p-2 w-75 " name="livro_selecionado">
                  <?php foreach ($livros as $livro) : ?>
                    <option class="btn btn-light rounded-0 p-2 w-75 text-start" value="<?php echo $livro['id']; ?>" <?php echo ($livro['id'] == $destaque['livro_id']) ? 'selected' : ''; ?>>
                      <?php echo $livro['titulo']; ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </td>
              <td>
                <button class="btn btn-primary rounded-0 p-2 px-4" type="submit">Gravar</button>
              </td>
            </form>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</main>