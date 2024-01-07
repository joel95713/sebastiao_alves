<?php

$form = isset($_POST["nome"]) && isset($_POST["apelido"]) && isset($_POST["login"]) && isset($_POST["senha"]);
$form = $form && isset($_POST["email"]);

$success_message = "";

if ($form) {
    $nome = $_POST["nome"];
    $apelido = $_POST["apelido"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    // Verifica se o login já existe na base de dados
    $login_existe = selectSQLUnico("SELECT id FROM colaboradores WHERE login = '$login'");
    if ($login_existe) {
        // Login já existe, exibe uma mensagem de erro:
        $success_message = "Erro: O login já está em uso. Escolha outro.";
    } else {
        // O login não existe,exibe uma mensagem de sucesso e insere na base de dados:
        iduSQL("INSERT INTO colaboradores (nome, apelido, email,  login, senha) VALUES ('$nome', '$apelido', '$email', '$login', '$senha_cript')");
        $success_message = "O novo login foi criado com sucesso!";
    }
}
?>

<main class="container my-5 p-5 rounded-5">
    <div class="row">
        <div class="col-12">
            <h5 class="bg-dark bg-gradient p-2 text-center text-light text-uppercase">Adicionar Novo Colaborador</h5>
        </div>
    </div>
    <div class="text-center mb-5">
        <!-- MENSAGEM DE SUCESSO OU ERRO: -->
        <div class="my-3" id="exibirAlerta" data-mensagem="<?php echo $success_message; ?>" style="color: <?php echo $success_message ? (strpos($success_message, 'Erro') !== false ? 'red' : 'green') : ''; ?>">
            <h5><?php echo $success_message; ?></h5>
        </div>
        <form action="" method="POST">
            <input class="btn btn-light rounded-0 p-2 w-75" type="text" name="nome" required placeholder="Nome">
            <br><br>
            <input class="btn btn-light rounded-0 p-2 w-75" type="text" name="apelido" required placeholder="Apelido">
            <br><br>
            <input class="btn btn-light rounded-0 p-2 w-75" type="text" name="email" required placeholder="E-mail">
            <br><br>
            <input class="btn btn-light rounded-0 p-2 w-75" type="text" name="login" required placeholder="Login">
            <br><br>
            <input class="btn btn-light rounded-0 p-2 w-75" type="password" name="senha" required placeholder="Senha">
            <br><br>
            <input class="btn btn-primary rounded-0 p-2 px-4" type="submit" value="Criar">
        </form>
    </div>
</main>