<?php require "header.php";

if ($_POST) {
    unset($_POST["confirm-password"]);
    $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $newUser = new User($_POST);
    /* echo "<pre>";
    print_r($newUser);
    echo "</pre>";
    $allUsers = $userController->readAllUser();
    foreach ($allUsers as $user) {
        if ($user->getEmail() === $_POST["email"]) {
            echo "Erreur...";
        }
    } */
    $userController->createUser($newUser);
    $_SESSION["firstName"] = $newUser->getFirstName();
    $_SESSION["lastName"] = $newUser->getLastName();
    $_SESSION["email"] = $newUser->getEmail();
}

?>

<form method="post" class="container mt-2">
    <label for="firstName">Prénom</label>
    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Votre prénom" required min=2 maxlength=30>
    <label for="lastName">Nom</label>
    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Votre nom de famille" required minlength=2 maxlength=30>
    <label for="email">E-mail</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse e-mail" required>
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Votre mot de passe" required>
    <label for="confirm-password">Confirmez votre mot de passe</label>
    <input type="password" class="form-control" name="confirm-password" id="confirm-password" placeholder="Confirmez votre mot de passe" required>

    <input type="submit" class="mt-2 btn btn-outline-success" value="S'inscrire">
</form>

<?php require "footer.php" ?>