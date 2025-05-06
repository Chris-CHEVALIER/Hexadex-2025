<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexadex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
</head>

<body>
    <?php

    spl_autoload_register(function (string $className) {
        require "$className.php";
    });

    $pikachu = new Pokemon(25, "Pikachu", "https://m.media-amazon.com/images/I/612+s8hyJ8L._AC_UF1000,1000_QL80_.jpg", "Electrik");
    $pokemonController = new PokemonController();

    ?>
    <div class="card" style="width: 18rem;">
        <img src="<?= $pikachu->getImage() ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $pikachu->getName() ?></h5>
            <p class="card-text"><?= $pikachu->getType1() ?> - <?= $pikachu->getType2() ?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>