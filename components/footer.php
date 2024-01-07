<script src="js/functions.js"></script>

<footer class="container-fluid mt-0 mt-lg-5 mb-5 pt-1 pt-lg-5 pb-3">
  <div class="row d-none d-lg-block">
    <nav class="col-11 py-2 mx-auto d-flex justify-content-center">
      <a class="menu <?= ($pagina == "home") ? "active" : ""; ?>" href="index.php?pagina=home">Home</a>
      <a class="menu <?= ($pagina == "autor") ? "active" : ""; ?>" href="index.php?pagina=autor">Autor</a>
      <a class="menu <?= ($pagina == "livros") ? "active" : ""; ?>" href="#" onclick="abrirLivros(event)">Livros</a>
      <a class="menu <?= ($pagina == "imprensa") ? "active" : ""; ?>" href="index.php?pagina=imprensa">Imprensa</a>
      <a class="menu <?= ($pagina == "contactos") ? "active" : ""; ?>" href="index.php?pagina=contactos">Contactos</a>
    </nav>
  </div>

  <div class="col-11 mx-auto pb-1 d-block d-lg-none">
    <hr />
  </div>

  <div class="row d-flex justify-content-center mt-5">
    <div class="col-12 col-lg-6 text-center text-lg-start">
      <div class="row">
        <div class="col-12 t1">Contactos</div>
      </div>
      <div class="row mt-3">
        <div class="col-12 col-lg-5">
          <div class="titulo-campo">Morada</div>
          <div><?php echo getMorada(); ?></div>
        </div>
        <div class="col-12 col-lg mt-3 mt-lg-0">
          <div class="titulo-campo">Telefone</div>
          <div><?php echo getTelefone(); ?></div>
        </div>
        <div class="col-12 col-lg mt-3 mt-lg-0">
          <div class="titulo-campo">E-mail</div>
          <div><?php echo getEmail(); ?></div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 col-lg-3 mt-5 mt-lg-0">
      <div class="row text-center mt-4 mt-lg-0">
        <div class="col-12 t1">Siga-me nas redes sociais</div>
        <div class="col-12 mt-4 d-flex justify-content-center gap-4">
          <a href="<?php echo getInstagram(); ?>" target="_blank" class="icone icone-instagram"></a>
          <a href="<?php echo getFacebook(); ?>" target="_blank" class="icone icone-facebook"></a>
          <a href="<?php echo getLinkedin(); ?>" target="_blank" class="icone icone-linkedin"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="row d-flex justify-content-center mt-5">
    <div class="col-10">
      <div class="row d-flex justify-content-between mt-3 mt-lg-0">
        <div class="col-12 col-lg-auto text-center text-lg-start">
          <a href="#" class=""><img src="images/livroreclamacoes.svg" alt="Livro de Reclamações" /></a>
          <a href="#" class="ms-5"><img src="images/ralc.svg" alt="RALC" /></a>
        </div>
        <div class="col-12 col-lg-auto text-center p mt-5 mt-lg-0">
          Politica de Cookies.
          <br />
          Copyright © 2021 Grupo MediaMaster. Todos os direitos reservados.
        </div>
      </div>
    </div>
  </div>
</footer>