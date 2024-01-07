<?php

$usuarioLogado = obterUsuarioLogado();

?>

<main class="container my-5 p-5 rounded-5">

    <div class="row">
        <div class="col-12">
            <h5 class="bg-dark bg-gradient p-2 text-center text-light text-uppercase">Editar Colaborador</h5>
        </div>
    </div>
    <div class="text-center mb-5">

        <form action="actions/colaborador_edit.php" method="POST">
            <br><br>
            <div class="btn btn-dark rounded-0 p-2 w-25">NOME</div>
            <br>
            <input class="btn btn-light rounded-0 p-2 w-25" type="text" name="nome" required placeholder="Nome" value="<?php echo $usuarioLogado["nome"]; ?>">
            <br><br>
            <div class="btn btn-dark rounded-0 p-2 w-25">APELIDO</div>
            <br>
            <input class="btn btn-light rounded-0 p-2 w-25" type="text" name="apelido" required placeholder="Apelido" value="<?php echo $usuarioLogado["apelido"]; ?>">
            <br><br>
            <div class="btn btn-dark rounded-0 p-2 w-25">EMAIL</div>
            <br>
            <input class="btn btn-light rounded-0 p-2 w-25" type="text" name="email" required placeholder="E-mail" value="<?php echo $usuarioLogado["email"]; ?>">
            <br><br>
            <div class="btn btn-dark rounded-0 p-2 w-25">USERNAME</div>
            <br>
            <div class="btn btn-light rounded-0 p-2 w-25"><?php echo $usuarioLogado["login"]; ?></div>
            <br><br>
            <input class="btn btn-primary rounded-0 p-2 px-4" class="btn btn-primary rounded-0 p-2 px-4" type="submit" value="Gravar">
        </form>

</main>