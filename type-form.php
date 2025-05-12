<?php require "header.php";
// TODO: 5. Vérifier si connecté pour accéder à cette page -->
?>
<form method="post" class="container mt-2">
    <label for="name">Nom</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Nom du type" required minlength=3 max=20>
    <label for="icon">Icône</label>
    <input type="url" class="form-control" name="icon" id="icon" placeholder="Icône du Pokémon" required>
    <label for="color">Couleur</label>
    <input type="color" class="form-control" name="color" id="color" placeholder="Couleur du type" required>
    <input type="submit" class="mt-2 btn btn-outline-success" value="Créer">
</form>
<?php require "footer.php" ?>