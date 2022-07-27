<?php include_once('templates/header.php'); ?>


<div class="main-title">
    <h1>Cinema</h1>
</div>

<div class="container">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Local</th>
                <th scope="col">CNPJ</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody class="tbody">
            <?php foreach($contacts as $contact): ?>
            <tr>
               <td scope="row"><?= $contact['id']?></td> 
               <td scope="row"><?= $contact['nome']?></td> 
               <td scope="row"><?= $contact['cidade']?></td> 
               <td scope="row"><?= $contact['cnpj']?></td>
               <td class="actions">
                    <a href="<?= $BASE_URL ?>view.php?id=<?= $contact['id']?>"><i class="fas fa-eye check-icon"></i></a>
                    <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact['id']?>"><i class="fa-solid fa-pen"></i></a>
                    <a href="<?= $BASE_URL ?>delete.php?id=<?= $contact['id']?>"><i class="fa-solid fa-trash-can"></i></a>
               </td> 
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php include_once('templates/footer.php'); ?>