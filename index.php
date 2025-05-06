<?php require "header.php" ?>
<div class="container d-flex flex-wrap justify-content-center mt-3">
    <div class="card" style="width: 18rem;">
        <img src="<?= $pikachu->getImage() ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $pikachu->getName() ?></h5>
            <p class="card-text"><?= $pikachu->getType1() ?> - <?= $pikachu->getType2() ?></p>
            <a href="#" class="btn btn-warning">Modifier</a>
            <a href="#" class="btn btn-danger">Supprimer</a>
        </div>
    </div>
</div>
<?php require "footer.php" ?>