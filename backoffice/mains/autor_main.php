<main class="container my-5 p-5 rounded-5">

  <div class="row">
    <div class="col-12">
      <h5 class="bg-dark bg-gradient p-2 text-center text-light text-uppercase">Autor</h5>
    </div>
  </div>
  <div class="row mt-5 text-center">

    <div>
      <img class=" " src="<?php echo getImageAutor(); ?>" alt="imagem_autor">
    </div>

    <form action="actions/autor_edit.php" method="post" class="col-12 mt-4">
      <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="imagem">Link da imagem da página (AUTOR)</label><br>
      <input class="btn btn-light rounded-0 p-2 w-75" type="text" value="<?php echo getImageAutor(); ?>" name="imagem">
      <br><br>
      <a href="../filemanager/tinyfilemanager.php" target="_blank" onclick="window.open('../filemanager/tinyfilemanager.php'); return false;">
        <button class="btn btn-success rounded-0 p-2 px-4">Procurar Imagem</button>
      </a>
      <br><br>

      <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="texto">Texto do autor na página (AUTOR)</label><br>
      <textarea class="btn btn-light rounded-0 p-2 w-75" name="texto" id="editor" cols="80" rows="7"><?php echo getTextoAutorHome(); ?></textarea>
      <script>
        ClassicEditor
          .create(document.querySelector('#editor'))
          .catch(error => {
            console.error(error);
          });
      </script>

      <br><br>
      <input class="btn btn-primary rounded-0 p-2 px-4" type="submit" value="Salvar">
    </form>
    <div class="col-md-10 m-auto text-center mt-5">
      <button onclick="voltarAtras()" class="btn btn-danger rounded-0 p-2 px-4">Cancelar</button></a>
    </div>
    </form>
  </div>

</main>