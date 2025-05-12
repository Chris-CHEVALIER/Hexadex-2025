<?php

class PokemonController
{
    private PDO $db; // Instance de PDO

    public function __construct()
    {
        // Connexion à la BDD
        $host = "localhost";
        $dbName = "hexadex";
        $port = 8889;
        $userName = "root";
        $password = "root";
        try {
            $this->setDb(new PDO("mysql:host=$host;dbname=$dbName;port=$port;charset=utf8mb4", $userName, $password));
            //echo "Connexion réussie !";
        } catch (PDOException $error) {
            echo "<p style='color:red'>{$error->getMessage()}</p>";
        }
    }

    public function setDb(PDO $db): void
    {
        $this->db = $db;
    }

    // TODO: 6. Protéger données avant enregistrement en BDD !
    public function createPokemon(Pokemon $pokemon): void
    {
        $req = $this->db->prepare("INSERT INTO `pokemon` (number, name, image, type1, type2) VALUES (:number, :name, :image, :type1, :type2)");

        $req->bindValue(":number", htmlspecialchars($pokemon->getNumber()), PDO::PARAM_INT);
        $req->bindValue(":name", htmlspecialchars($pokemon->getName()), PDO::PARAM_STR);
        $req->bindValue(":image", htmlspecialchars($pokemon->getImage()), PDO::PARAM_STR);
        $req->bindValue(":type1", htmlspecialchars($pokemon->getType1()), PDO::PARAM_STR);
        $req->bindValue(":type2", htmlspecialchars($pokemon->getType2()), PDO::PARAM_STR);

        $req->execute();
    }

    public function updatePokemon(): void {

    }

    public function deletePokemon(int $id): void
    {
        $req = $this->db->prepare("DELETE FROM `pokemon` WHERE id=:id");
        $req->bindValue(":id", htmlspecialchars($id), PDO::PARAM_INT);
        $req->execute();
    }

    public function readPokemon(): void {}


    public function readAllPokemon(): array
    {
        $pokemons = [];
        $req = $this->db->prepare("SELECT * FROM `pokemon` ORDER BY number");
        $req->execute();
        $datas = $req->fetchAll();
        foreach ($datas as $data) {
            $pokemons[] = new Pokemon($data);
        }
        return $pokemons;
    }
}
