<main class="container my-5 p-5 rounded-5">

  <div class="row">
    <div class="col-12">
      <h5 class="bg-dark bg-gradient p-2 text-center text-light text-uppercase">Contactos</h5>
    </div>
  </div>
  <div class="row mt-5 text-center">
    <form action="actions/contactos_edit.php" method="post" class="col-12">
      <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="morada">Morada</label><br>
      <input class="btn btn-light rounded-0 p-2 w-75" type="text" name="morada" value="<?php echo getMorada(); ?>" required>
      <br><br>
      <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="telefone">Telefone</label><br>
      <input class="btn btn-light rounded-0 p-2 w-75" type="text" name="telefone" value="<?php echo getTelefone(); ?>" required>
      <br><br>
      <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="email">E-mail</label><br>
      <input class="btn btn-light rounded-0 p-2 w-75" type="text" name="email" value="<?php echo getEmail(); ?>" required>
      <br><br>
      <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="horario">Horário</label><br>
      <input class="btn btn-light rounded-0 p-2 w-75" type="text" name="horario" value="<?php echo getHorario(); ?>" required>
      <br><br>
      <input class="btn btn-primary rounded-0 p-2 px-4" type="submit" value="Gravar">

    </form>
  </div>

</main>