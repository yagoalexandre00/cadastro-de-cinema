<?php 
    include_once('config/url.php');
    include_once('config/connection.php');
    include_once('config/process.php')
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cinema</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL?>css/style.css">
    <link rel="icon" type="image/x-icon" href="<?= $BASE_URL?>img/movie.png">
</head>

<body>

<main>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= $BASE_URL ?>index.php"><img src="<?= $BASE_URL ?>img/movie.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="<?= $BASE_URL ?>index.php">Home</a>
            <a class="nav-link" href="<?= $BASE_URL ?>create.php">Cadastrar</a>
        </div>
        </div>
    </div>
    </nav>
</main>