<?php

$form = isset($_POST["instagram"]) && isset($_POST["facebook"]) && isset($_POST["linkedin"]);

if ($form) {
  $instagram = $_POST["instagram"];
  $facebook = $_POST["facebook"];
  $linkedin = $_POST["linkedin"];

  iduSQL("UPDATE contactos SET instagram = '$instagram', facebook = '$facebook', linkedin = '$linkedin'");
}

?>

<main class="container my-5 p-5 rounded-5">

  <div class="row">
    <div class="col-12">
      <h5 class="bg-dark bg-gradient p-2 text-center text-light text-uppercase">Redes Sociais</h5>
    </div>
  </div>
  <div class="row mt-5 text-center">
    <form action="actions/redes_edit.php" method="post" class="col-12">
      <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="instagram">Instagram</label><br>
      <input class="btn btn-light rounded-0 p-2 w-75" type=" text" name="instagram" value="<?php echo getInstagram(); ?>" required>
      <br><br>
      <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="facebook">Facebook</label><br>
      <input class="btn btn-light rounded-0 p-2 w-75" type="text" name="facebook" value="<?php echo getFacebook(); ?>" required>
      <br><br>
      <label class="my-3 text-light fw-bold text-uppercase bg-dark bg-gradient px-4" for="linkedin">Linkedin</label><br>
      <input class="btn btn-light rounded-0 p-2 w-75" type="text" name="linkedin" value="<?php echo getLinkedin(); ?>" required>
      <br><br>
      <input class="btn btn-primary rounded-0 p-2 px-4" type="submit" value="Gravar">
    </form>
  </div>

</main>