  <?php

  $lista_dropdown = selectSQL("SELECT * FROM `livro` ORDER BY `livro`.`titulo` ASC");

  $livros = selectSQL("SELECT * FROM `livro`");

  $carrousel = selectSQL("SELECT * FROM `carousel`");

  ?>

  <html lang="pt">

  <head>
    <script type="text/javascript" src="/___vscode_livepreview_injected_script"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sebastião Alves</title>
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="fonts/fontes.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
  </head>

  <body class="m-auto">
    <header class="container-fluid">
      <div id="topo-absoluto" class="row w-100 mt-5">
        <div class="col-11 col-lg-12 mx-auto text-center d-flex justify-content-between d-lg-block">
          <div class="titulo">SEBASTIÃO ALVES</div>
          <button class="navbar-toggler d-lg-none" id="toggleButton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleMenu()">
            <img src="images/menu.svg" alt="menu" />
          </button>
        </div>
        <hr class="col-11 mx-auto hr-topo mt-2" />
        <div class="col-12 p-0">
          <nav class="navbar navbar-expand-lg" id="nav-topo-desktop">
            <div class="container-fluid p-0">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center mx-auto">
                  <li class="nav-item">
                    <a class="nav-link menu <?= ($pagina == "home") ? "active" : ""; ?>" href="index.php?pagina=home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link menu <?= ($pagina == "autor") ? "active" : ""; ?>" href="index.php?pagina=autor">Autor</a>
                  </li>
                  <li class="nav-item dropdown ">
                    <a id="menu-livros" class="nav-link menu <?= ($pagina == "livros") ? "active" : ""; ?>" href="index.php?pagina=livros" role="button" data-toggle="dropdown" data-bs-toggle="dropdown">Livros</a>
                    </a>
                    <ul class="dropdown-menu rounded-0 border-0 p-4  ">
                      <?php foreach ($lista_dropdown as $lista) : ?>
                        <?php if ($lista["titulo"] !== "") : ?>
                          <li>
                            <a class="dropdown-item submenu <?= ($pagina == "livros" && isset($_GET['id']) && $_GET['id'] == $lista["id"]) ? "active" : ""; ?>" href="index.php?pagina=livros&id=<?= $lista["id"]; ?>"><?= $lista["titulo"]; ?></a>
                          </li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link menu <?= ($pagina == "imprensa") ? "active" : ""; ?>" href="index.php?pagina=imprensa">Imprensa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link menu <?= ($pagina == "contactos") ? "active" : ""; ?>" href="index.php?pagina=contactos">Contactos</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>

      <!-- FIM DA NAVBAR -->

      <div class="row">
        <div class="col-12 p-0 d-none d-lg-block">
          <!-- CARROUSEL DE IMAGENS DESKTOP -->
          <div id="carousel-desktop" class="carousel slide">
            <!-- INDICADORES DO CARROUSEL -->
            <div class="carousel-indicators d-flex justify-content-start">
              <?php for ($i = 0; $i < count(getTitulosCarousel()); $i++) : ?>
                <button type="button" data-bs-target="#carousel-desktop" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"></button>
              <?php endfor; ?>
            </div>
            <!-- ITENS DO CARROUSEL -->
            <div class="carousel-inner">
              <?php foreach (getTitulosCarousel() as $carousel => $titulo) : ?>
                <div class="carousel-item <?php echo $carousel === 0 ? 'active' : ''; ?>">
                  <img src="<?php echo getImagensDesktopCarousel()[$carousel]; ?>" alt="carousel" class="d-block w-100" />
                  <div class="carousel-caption d-none d-md-block">
                    <p class="carousel-observacao"><?php echo getObservacaoCarousel()[$carousel]; ?></p>
                    <h5 class="titulo-banner"><?php echo getTitulosCarousel()[$carousel]; ?></h5>
                    <div class="texto-banner mt-3">
                      <?php echo substr(getTextosCarousel()[$carousel], 0, 250); ?>...
                    </div>
                    <a href="<?php echo getLinksSaberMaisCarousel()[$carousel]; ?>"><button class="botao-saber-mais"></button></a>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <!-- CARROUSEL DE IMAGENS MOBILE -->
        <div class="col-12 p-0 d-block d-lg-none" id="carousel-mobile">
          <!-- INDICADORES DO CARROUSEL -->
          <div class="carousel slide">
            <div class="carousel-indicators d-flex justify-content-start">
              <?php for ($i = 0; $i < count(getTitulosCarousel()); $i++) : ?>
                <button type="button" data-bs-target="#carousel-mobile" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>"></button>
              <?php endfor; ?>
            </div>
          </div>
          <!-- ITENS DO CARROUSEL -->
          <div class="carousel-inner">
            <?php foreach (getTitulosCarousel() as $carousel => $titulo) : ?>
              <div class="carousel-item <?php echo $carousel === 0 ? 'active' : ''; ?>">
                <img src="<?php echo getImagensMobileCarousel()[$carousel]; ?>" class="d-block m-auto" alt="..." />
                <div class="carousel-caption">
                  <p class="carousel-observacao"><?php echo getObservacaoCarousel()[$carousel]; ?></p>
                  <h5 class="titulo-banner"><?php echo getTitulosCarousel()[$carousel]; ?></h5>
                  <div class="texto-banner mt-3">
                    <?php echo substr(getTextosCarousel()[$carousel], 0, 250); ?>...
                  </div>
                  <a href="<?php echo getLinksSaberMaisCarousel()[$carousel]; ?>"><button class="botao-saber-mais"></button></a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      </div>

    </header>