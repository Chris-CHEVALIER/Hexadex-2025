<?php
require "header.php";
$pokemons = $pokemonController->readAllPokemon();
?>

<div class="container d-flex flex-wrap justify-content-center mt-3 gap-3 mb-5">
    <?php
    foreach ($pokemons as $pokemon): ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $pokemon->getImage() ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $pokemon->getName() ?></h5>
                <p class="card-text"><?= $pokemon->getType1() ?> - <?= $pokemon->getType2() ?></p>
                <a href="#" class="btn btn-warning">Modifier</a>
                <a href="./delete.php?id=<?= $pokemon->getId() ?>" class="btn btn-danger">Supprimer</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
<?php require "footer.php" ?>