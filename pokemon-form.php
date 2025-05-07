<?php
require "header.php";

$newPokemon = new Pokemon($_POST); // ["number" => 412, "name" => "Cheniti", etc.]
/* echo "<pre>";
print_r($_POST);
print_r($newPokemon);
echo "</pre>"; */
$pokemonController->createPokemon($newPokemon);

?>

<form method="post" class="container mt-2">
    <label for="number">Numéro</label>
    <input type="number" class="form-control" name="number" id="number" placeholder="Numéro du Pokémon" required min=1 max=1000>
    <label for="name">Nom</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Nom du Pokémon" required minlength=3 max=20>
    <label for="image">Image</label>
    <input type="url" class="form-control" name="image" id="image" placeholder="Image du Pokémon" required>
    <label for="type1">Type 1</label>
    <input type="text" class="form-control" name="type1" id="type1" placeholder="Type 1 du Pokémon" required minlength=3 max=20>
    <label for="type2">Type 2</label>
    <input type="text" class="form-control" name="type2" id="type2" placeholder="Type 2 du Pokémon" minlength=3 max=20>
    <input type="submit" class="mt-2 btn btn-outline-success" value="Créer">
</form>
<?php require "footer.php" ?>