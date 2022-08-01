<?php include_once('templates/header.php'); ?>

<div class="container">
    <h1>Cadastro</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <div class="form-group">
            <input type="hidden" name="type" value="create">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Insira o nome" required>
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" placeholder="Insira a cidade" required>
        </div>
        <div class="form-group">
            <label for="cnpj">CNPJ</label>
            <input type="text" class="form-control" name="cnpj" placeholder="Insira o CNPJ" required>
        </div>
        <div class="form-group">
            <label for="qtdSalas">Quantidade de salas</label>
            <input type="text" class="form-control" name="quantidade_salas" placeholder="Insira a quantidade de salas" required>
        </div>
        <input class="btn btn-dark" type="submit" value="Confirmar">
    </form>
</div>

<?php include_once('templates/footer.php'); ?>