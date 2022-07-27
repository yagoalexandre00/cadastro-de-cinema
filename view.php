<?php include_once('templates/header.php'); ?>

<h1><?= $contact['nome']?></h1>

<table class="table table-hover">
    <tr>
        <td>
            <h3>Cidade:</h3>
            <p><?= $contact['cidade']?></p>
        </td>
    </tr>

    <tr>
        <td>
            <h3>CNPJ:</h3>
            <p><?= $contact['cnpj']?></p>
        </td>
    </tr>

    <tr>
        <td>
            <h3>Quantidade de salas:</h3>
            <p><?= $contact['quantidade_salas']?></p>
        </td>
    </tr>
</table>


<?php include_once('templates/footer.php'); ?>