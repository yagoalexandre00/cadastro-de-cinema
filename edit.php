<?php include_once('templates/header.php'); ?>

<div class="container">
    <h1>Editar <?= $contact['nome'] ?></h1>
    <form id="edit-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <div class="form-group">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $contact['id']?>">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="<?= $contact['nome'] ?>" required>
        </div>
        <div class="form-group">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" name="cidade" value="<?= $contact['cidade'] ?>" required>
        </div>
        <div class="form-group">
            <label for="cnpj">CNPJ</label>
            <input type="text" class="form-control" name="cnpj" value="<?= $contact['cnpj'] ?>" required>
        </div>
        <div class="form-group">
            <label for="qtdSalas">Quantidade de salas</label>
            <input type="text" class="form-control" name="quantidade_salas" value="<?= $contact['quantidade_salas'] ?>" required>
        </div>
        <input class="btn btn-dark" type="submit" value="Confirmar">
    </form>
</div>

<?php include_once('templates/footer.php'); ?>