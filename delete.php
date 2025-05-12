<?php

require "header.php";
if (!is_connected()) {
    echo "<script>window.location.href='login.php'</script>";
}
$pokemonController->deletePokemon($_GET["id"]);
echo "<script>window.location.href='./index.php'</script>";
