<?php require "header.php";

if ($_POST) {
    $user = $userController->getUserByEmail($_POST["email"]);
    if ($user && password_verify($_POST["password"], $user->getPassword())) {
        $_SESSION["email"] = $user->getEmail();
        $_SESSION["firstName"] = $user->getFirstName();
        $_SESSION["lastName"] = $user->getLastName();
        echo "<script>window.location.href='index.php'</script>";
    }
}

?>

<form method="post" class="container mt-2">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse e-mail" required>
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Votre mot de passe" required>

    <input type="submit" class="mt-2 btn btn-outline-success" value="Se connecter">
</form>

<?php require "footer.php" ?>