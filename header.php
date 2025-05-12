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
    session_start();
    spl_autoload_register(function (string $className) {
        require "$className.php";
    });

    $pikachuData = [
        "id" => 1,
        "number" => 25,
        "name" => "Pikachu",
        "image" => "https://m.media-amazon.com/images/I/612+s8hyJ8L._AC_UF1000,1000_QL80_.jpg",
        "type1" => "Electrik",
        "type2" => "",
    ];

    $pikachu = new Pokemon($pikachuData);
    $pokemonController = new PokemonController();
    $userController = new UserController();

    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">Hexadex</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pokemon-form.php">Créer un Pokémon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./type-form.php">Créer un type</a>
                    </li>
                    <?php if ($_SESSION && $_SESSION["email"] && $_SESSION["firstName"] && $_SESSION["lastName"]): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./logout.php">Se déconnecter</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="./register.php">S'inscrire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php">Se connecter</a>
                        </li>
                    <?php endif ?>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Rechercher un Pokémon" aria-label="Rechercher" />
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>
            </div>
        </div>
    </nav>