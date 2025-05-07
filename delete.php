<?php

require "header.php";
$pokemonController->deletePokemon($_GET["id"]);
echo "<script>window.location.href='./index.php'</script>";