<?php

require("../../../helpers/requisitos.php");

if (!verificarLogin()) {
  header("Location: index.php");
  exit();
}

// Se estiver editando, obtenha os detalhes do imprensa
if (isset($_GET['editar'])) {
  $imprensa_id = $_GET['editar'];


  // Consulta para obter os detalhes do imprensa pelo ID
  $imprensa = selectSQL("SELECT * FROM imprensa WHERE id = $imprensa_id");


  // Verifica se o imprensa existe
  if (!$imprensa) {
    header("Location: ../../index.php?pagina=imprensa");
    exit();
  }

  // Atribui os valores das colunas do banco de dados às variáveis
  $titulo = isset($imprensa[0]['titulo']) ? $imprensa[0]['titulo'] : "";
  $texto = isset($imprensa[0]['texto']) ? $imprensa[0]['texto'] : "";
  $imagem = isset($imprensa[0]['imagem']) ? $imprensa[0]['imagem'] : "";
  $data_noticia = isset($imprensa[0]['data_noticia']) ? $imprensa[0]['data_noticia'] : "";
  $UpdatedOn = isset($imprensa[0]['UpdatedOn']) ? $imprensa[0]['UpdatedOn'] : "";
} else {
  $titulo = "";
  $texto = "";
  $imagem = "";
}
?>


<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Backoffice</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
  <script src="../../../js/functions.js"></script>
</head>

<body>

  <main class="container my-5 p-5 rounded-5">

    <div class="row">
      <div class="col-12">
        <h5 class="bg-dark bg-gradient p-2 text-center text-light text-uppercase">Editor da Imprensa</h5>
      </div>
    </div>
    <div class="row mt-5 text-center">
      <form action="<?php echo isset($imprensa_id) ? 'imprensa_edit.php' : 'imprensa_new.php'; ?>" method="post" class="col-12">
        <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="imagem">Link da imagem da capa da  noticia:</label><br>
        <input class="btn btn-light rounded-0 p-2 w-75" type="text" name="imagem" value="<?php echo $imagem; ?>">
        <br><br>
        <a href=" ../../../filemanager/tinyfilemanager.php" target="_blank" onclick="window.open('../../../filemanager/tinyfilemanager.php'); return false;">
          <button class="btn btn-success rounded-0 p-2 px-4">Procurar Imagem</button>
        </a>
        <br><br>
        <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="titulo">Título da Notícia:</label><br>
        <input class="btn btn-light rounded-0 p-2 w-75" type="text" name="titulo" value="<?php echo $titulo; ?>">
        <br><br>
        <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="data_noticia">Data da Notícia:</label><br>
        <input class="btn btn-light rounded-0 p-2 w-25" type="date" name="data_noticia" value="<?php echo $data_noticia; ?>">
        <br><br>
        <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="data_noticia">Texto da Notícia</label><br>
        <textarea class="btn btn-light rounded-0 p-2 w-75" name="texto" id="editor" cols="80" rows="7"><?php echo $texto; ?></textarea>
        <script>
          ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
              console.error(error);
            });
        </script>

        <br><br>

        <?php if (isset($_GET['editar'])) : ?>
          <input type="hidden" name="editar_id" value="<?php echo $imprensa_id; ?>">
        <?php endif; ?>

        <br><br>
        <input class="btn btn-primary rounded-0 p-2 px-4" type="submit" value="Salvar">
      </form>
      <div class="col-md-10 m-auto text-center mt-5">
        <button onclick="voltarAtras()" class="btn btn-danger rounded-0 p-2 px-4">Cancelar</button></a>
      </div>
      </form>
    </div>

  </main>
</body>

</html>