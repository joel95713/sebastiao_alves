  <?php

  $form = isset($_POST["login"]) && isset($_POST["senha"]);
  if ($form) {
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $usuario = fazerLogin($login, $senha);

    if (!empty($usuario)) {
      header("Location: index.php?pagina=inicio");
      exit();
    }
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

  </head>

  <main class="container my-5 p-5 rounded-5">
    <section class="">
      <div class="bg-dark-subtle px-4 py-5 px-md-5 text-center text-lg-start">
        <div class="container">
          <div class="row gx-lg-5 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
              <h1 class="my-5 display-3 fw-bold ls-tight">
                Sebastião Alves <br />
                <span class="text-bg-warning">Backoffice</span>
              </h1>
              <p class="p text-bg-info px-1 ">
                 "A vida é como um caracol estrábico: nunca se sabe para onde vai olhar."
              </p>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
              <div class="card">
                <div class="card-body py-5 px-md-5">
                  <form action="" autocomplete="off" method="POST" class="col-12">

                    <?php if ($form) : ?>

                      <h6 class="text-danger">LOGIN INVÁLIDO</h6>

                    <?php endif; ?>

                    <!-- Username input -->
                    <h4 class="mb-3">Login</h4>
                    <div class="form-outline my-2">
                      <input type="text" placeholder="Username" name="login" class="form-control" />
                    </div>

                    <hr>

                    <!-- Password input -->
                    <div class="form-outline my-2">
                      <input type="password" name="senha" placeholder="Password" class="form-control" />
                    </div>

                    <hr>


                    <!-- Submit button -->
                    <div class="m-auto text-center"> <button type="submit" value="Entrar" class="btn btn-primary btn-block my-2 ">
                        Entrar
                      </button></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>