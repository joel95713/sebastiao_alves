<?php

if (!verificarLogin()) {
  header("Location: index.php");
  exit();
}

$usuarioLogado = obterUsuarioLogado();

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
  <script src="../js/functions.js"></script>

</head>

<body>

  <header class="container-fluid border border-dark">
    <div class="row">
      <!-- Navbar -->
      <nav class="bg-dark col-12 navbar navbar-expand-lg p-0">
        <div class="bg-gradient container-fluid mx-auto">

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse font-monospace navbar-collapse d-flex justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="active nav-link text-light text-uppercase fw-bolder " href="../backoffice/index.php?pagina=inicio">Início</a>
              </li>
              <li class="nav-item">
                <a class="active nav-link text-light" aria-current="page" href="index.php?pagina=home">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link  text-light" href="../backoffice/index.php?pagina=carousel">Carousel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="../backoffice/index.php?pagina=autor">Autor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="../backoffice/index.php?pagina=livros">Livros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="../backoffice/index.php?pagina=imprensa">Imprensa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="../backoffice/index.php?pagina=contactos">Contactos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="../backoffice/index.php?pagina=redes">Redes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-light" href="../backoffice/index.php?pagina=configuracoes">Configurações</a>
              </li>
              <li class="nav-item ms-5">
                <a class="ms-5 nav-link text-bg-light" href="../backoffice/index.php?pagina=colaborador"" "><?php echo $usuarioLogado["nome"]; ?> <?php echo $usuarioLogado["apelido"]; ?> </a>
              </li>
              <li class=" nav-item">
                <a class="nav-link fw-bolder  text-bg-danger" href="javascript:void(0);" onclick="sair()">Sair</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

    </div>
  </header>

